<?php

remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'wp_head', 'rsd_link' );

// Отключаем фильтры REST API
//remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
//remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
//remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
//remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
//remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );


// Отключаем события REST API
//	remove_action( 'init', 'rest_api_init' );
//	remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
//	remove_action( 'parse_request', 'rest_api_loaded' );
//
//// Отключаем Embeds связанные с REST API
//	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
//	remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );


remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
	wp_dequeue_style( 'core-block-supports' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );

add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
function mywptheme_child_deregister_styles() {
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'wp-block-library' );
}

# Закрывает все маршруты REST API от публичного доступа
add_filter( 'rest_authentication_errors', function ( $result ) {

	if ( is_null( $result ) && ! current_user_can( 'edit_others_posts' ) ) {
		return new WP_Error( 'rest_forbidden', 'You are not currently logged in.', [ 'status' => 401 ] );
	}

	return $result;
} );


/*
	Disable REST API link in HTTP headers
	Link: <https://example.com/wp-json/>; rel="https://api.w.org/"
*/
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

/*
	Disable REST API links in HTML <head>
	<link rel='https://api.w.org/' href='https://example.com/wp-json/' />
*/
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );

/*
	Disable REST API
*/

add_filter( 'rest_authentication_errors', 'disable_wp_rest_api' );


function disable_wp_rest_api( $access ) {

	if ( ! is_user_logged_in() && ! disable_wp_rest_api_allow_access() ) {

		$message = apply_filters( 'disable_wp_rest_api_error', __( 'REST API restricted to authenticated users.', 'disable-wp-rest-api' ) );

		return new WP_Error( 'rest_login_required', $message, array( 'status' => rest_authorization_required_code() ) );

	}

	return $access;

}

function disable_wp_rest_api_allow_access() {

	$post_var   = apply_filters( 'disable_wp_rest_api_post_var', false );
	$server_var = apply_filters( 'disable_wp_rest_api_server_var', false );

	if ( ! empty( $post_var ) ) {

		if ( is_array( $post_var ) ) {

			foreach ( $post_var as $var ) {

				if ( isset( $_POST[ $var ] ) && ! empty( $_POST[ $var ] ) ) {
					return true;
				}

			}

		} else {

			if ( isset( $_POST[ $post_var ] ) && ! empty( $_POST[ $post_var ] ) ) {
				return true;
			}

		}

	}

	if ( ! empty( $server_var ) ) {

		if ( is_array( $server_var ) ) {

			foreach ( $server_var as $var ) {

				if ( isset( $_SERVER['REQUEST_URI'] ) && $_SERVER['REQUEST_URI'] === $var ) {
					return true;
				}

			}

		} else {

			if ( isset( $_SERVER['REQUEST_URI'] ) && $_SERVER['REQUEST_URI'] === $server_var ) {
				return true;
			}

		}

	}

	return false;

}

function disable_wp_rest_api_plugin_links( $links, $file ) {

	if ( $file === plugin_basename( __FILE__ ) ) {

		$home_href  = 'https://perishablepress.com/disable-wp-rest-api/';
		$home_title = esc_attr__( 'Plugin Homepage', 'disable-wp-rest-api' );
		$home_text  = esc_html__( 'Homepage', 'disable-wp-rest-api' );

		$links[] = '<a target="_blank" rel="noopener noreferrer" href="' . $home_href . '" title="' . $home_title . '">' . $home_text . '</a>';

		$rate_href  = 'https://wordpress.org/support/plugin/disable-wp-rest-api/reviews/?rate=5#new-post';
		$rate_title = esc_attr__( 'Please give a 5-star rating! A huge THANK YOU for your support!', 'disable-wp-rest-api' );
		$rate_text  = esc_html__( 'Rate this plugin', 'disable-wp-rest-api' ) . '&nbsp;&raquo;';

		$links[] = '<a target="_blank" rel="noopener noreferrer" href="' . $rate_href . '" title="' . $rate_title . '">' . $rate_text . '</a>';

	}

	return $links;

}

add_filter( 'plugin_row_meta', 'disable_wp_rest_api_plugin_links', 10, 2 );

// remove
// <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
add_filter( 'wp_img_tag_add_auto_sizes', '__return_false' );