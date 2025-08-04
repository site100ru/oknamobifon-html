<?php

require_once 'framework/class-starter.php';
require_once 'inc/class-okna.php';

function custom_display_menu( $menu_name ) {
	$locations = get_nav_menu_locations();

	if ( isset( $locations[ $menu_name ] ) ) {
		$menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
		$menu_items = wp_get_nav_menu_items( $menu->term_id );

		$menu_list = '<ul class="navbar-nav">';

		$submenu = false;
		foreach ( $menu_items as $item ) {

			$active_class = '';
			if ( get_the_ID() == $item->object_id ) {
				$active_class .= ' active-menu-item';
			}

			if ( in_array( 'current-menu-item', $item->classes ) ||
			     in_array( 'current-menu-parent', $item->classes ) ||
			     in_array( 'current-menu-ancestor', $item->classes )
			) {
				$active_class .= ' current-menu-item';
			}


			if ( ! $item->menu_item_parent ) {
				if ( $submenu ) {
					$menu_list .= '</ul></li>';
					$submenu   = false;
				}
				$menu_list .= '<li class="nav-item ' . $active_class . '">
								<a itemprop="url" class="nav-link" href="' . $item->url . '"><span itemprop="name">' . $item->title . '</span></a>';
			} else {
				if ( ! $submenu ) {
					$submenu   = true;
					$menu_list .= '<div class="dropdown-menu-wrapper"><ul class="dropdown-menu">';
				}

				$menu_list .= '<li><a class="dropdown-item ' . $active_class . '" itemprop="url" href="' . $item->url . '"><span itemprop="name">' . $item->title . '</span></a></li>';
			}

		}

		if ( $submenu ) {
			$menu_list .= '</ul></div></li>';
		}

		$menu_list .= '</ul>';

		echo $menu_list;
	}
}

function menu_items( $menu_name ) {
	$menu_tree  = [];
	$menu_items = wp_get_nav_menu_items( $menu_name );

	if ( $menu_items ) :
		foreach ( $menu_items as $item ) {
			if ( ! $item->menu_item_parent ) {
				if ( get_the_ID() == $item->object_id ) {
					$item->active = true;
				}
				$item->children         = [];
				$menu_tree[ $item->ID ] = $item;
			}
		}

		foreach ( $menu_items as $item ) {
			if ( $item->menu_item_parent ) {
				if ( isset( $menu_tree[ $item->menu_item_parent ] ) ) {
					if ( get_the_ID() == $item->object_id ) {
						$item->active                                 = true;
						$menu_tree[ $item->menu_item_parent ]->active = true;
					}
					$menu_tree[ $item->menu_item_parent ]->children[ $item->ID ] = $item;
				} else {
					error_log( "Parent item with ID {$item->menu_item_parent} not found for child item with ID {$item->ID}" );
				}
			}
		}
	endif;

	return $menu_tree;
}

function isBetween9And19( $timestamp ) {
	$hour = date( 'G', $timestamp ); // 'G' возвращает час в 24-часовом формате без ведущих нулей

	return $hour >= 9 && $hour < 19;
}

add_filter( 'site_url', function ( $url, $path, $scheme ) {
	if ( ! is_admin() ) {
		return user_trailingslashit( $url );
	}

	return $url;

}, 10, 3 );


function gallery_atts( $out, $pairs, $atts ) {
	$out['link'] = 'file';
	$out['size'] = 'medium';

	return $out;
}

add_filter( 'shortcode_atts_gallery', 'gallery_atts', 10, 3 );

add_filter( 'post_gallery', 'gallery_filter', 10, 3 );

function gallery_filter( $output, $attr, $instance ) {
	ob_start();
	get_template_part( 'parts/gallery', '', [ 'ids' => explode( ',', $attr['ids'] ) ] );

	return ob_get_clean();
}

/* Hook shortcodes removal function to the_content filter */
add_filter( 'the_content', 'remove_orphan_shortcodes', 0 );

/* Main function which finds and hides unused shortcodes */
function remove_orphan_shortcodes( $content ) {

	if ( false === strpos( $content, '[' ) ) {
		return $content;
	}

	global $shortcode_tags;

	//Check for active shortcodes
	$active_shortcodes = ( is_array( $shortcode_tags ) && ! empty( $shortcode_tags ) ) ? array_keys( $shortcode_tags ) : array();

	//Avoid "/" chars in content breaks preg_replace
	$hack1   = md5( microtime( true ) );
	$content = str_replace( "[/", $hack1, $content );
	$hack2   = md5( microtime( true ) + 1 );
	$content = str_replace( "/", $hack2, $content );
	$content = str_replace( $hack1, "[/", $content );


	if ( ! empty( $active_shortcodes ) ) {
		//Be sure to keep active shortcodes
		$keep_active = implode( "|", $active_shortcodes );
		$content     = preg_replace( "~(?:\[/?)(?!(?:$keep_active))[^/\]]+/?\]~s", '', $content );
	} else {
		//Strip all shortcodes
		$content = preg_replace( "~(?:\[/?)[^/\]]+/?\]~s", '', $content );
	}

	//Set "/" back to its place
	$content = str_replace( $hack2, "/", $content );

	return $content;
}

function get_terms_tree( $taxonomy ) {
	$terms = get_terms( [
		'taxonomy'   => $taxonomy,
		'hide_empty' => false,
	] );

	if ( is_wp_error( $terms ) ) {
		return [];
	}

	$terms_hierarchy = [];
	$terms_by_id     = [];

	foreach ( $terms as $term ) {
		$term->children                = [];
		$terms_by_id[ $term->term_id ] = $term;
	}

	foreach ( $terms as $term ) {
		if ( $term->parent ) {
			$terms_by_id[ $term->parent ]->children[] = $term;
		} else {
			$terms_hierarchy[] = $term;
		}
	}

	return $terms_hierarchy;
}

function svg( $name ) {
	echo file_get_contents( get_theme_file_path( "/assets/img/icons/{$name}.svg" ) );
}

function add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'add_excerpts_to_pages' );


add_action( 'wp_ajax_send', 'action_send_form' );
add_action( 'wp_ajax_nopriv_send', 'action_send_form' );

function action_send_form() {
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

		$to      = [ "amironov@oknamobifon.ru", "oknamobifon@irtek.dev", "yvolkova@oknamobifon.ru" ];
		$subject = "Заявка";
		$headers = array( 'Content-Type: text/html; charset=UTF-8' );

		$upload_dir     = wp_upload_dir();
		$uploaded_files = array();


		foreach ( $_FILES['files']['tmp_name'] as $key => $tmp_name ) {
			$file_name   = $_FILES['files']['name'][ $key ];
			$upload_file = $upload_dir['path'] . '/' . basename( $file_name );

			if ( move_uploaded_file( $tmp_name, $upload_file ) ) {
				$uploaded_files[] = $upload_file;
			}
		}


		$message = <<<EOF
            <div style="background-image:linear-gradient(to right, #00ADEE, #1B75BB);color:#fff;padding:15px 20px;border-radius: 8px 8px 0 0;overflow: hidden;margin-bottom: -1px;">     
                <div style="font-weight: 700;font-size: 28px;line-height: 1;color: #fff;user-select: none;letter-spacing: -0.5px;">
                   ОкнаМобифон
                </div>
            </div>
            <div style="border: 1px solid #ccc;padding:20px;border-radius: 0 0 8px 8px;overflow: hidden;background-color:#f4f4f4;">
                <h2>заявка с сайта</h2>         
               <p>
               <strong>Имя:</strong> {$_POST['form-name']} <br>
               <strong>Телефон:</strong> <a href="tel:{$_POST['form-phone']}">{$_POST['form-phone']}</a><br>
               <strong>Пожелания:</strong> {$_POST['form-message']}
               </p>
           </div>
        EOF;

		ob_start();
		// Отправка email с вложением
		if ( $result = wp_mail( $to, $subject, $message, $headers, $uploaded_files ) ) {
			echo '<h2><span>Спасибо, мы Вам перезвоним</span></h2><p>
			<span>Благодарим за обращение. Мы сейчас работает и перезвоним Вам в самое ближайшее время.</span></p>';
		} else {
			get_template_part( 'parts/form', 'feedback', [ 'type' => 'error', 'message' => 'Ошибка отправки почты' ] );
		}

		// Удаление файлов после отправки
		foreach ( $uploaded_files as $file ) {
			unlink( $file );
		}

		ob_get_contents();
		exit();

	}

	ob_start();
	get_template_part( 'parts/feedback', 'form', [] );
	ob_get_contents();
}

function add_schema_data() {
	echo '<script type="application/ld+json">' . json_encode( [
			"@context" => "https://schema.org",
			"@type"    => "Organization",
			"url"      => home_url(),
			"logo"     => get_theme_file_uri( 'assets/img/logo.svg' )
		] ) . '</script>';
}

add_action( 'wp_head', 'add_schema_data' );

function the_whatsapp( $classes = null, $show = true ) {
	if ( $classes ) {
		$classes = 'class="' . $classes . '"';
	}

	$result = '<a href="https://wa.me/79938642678" ' . $classes . ' target="_blank" rel="nofollow">WhatsApp</a>';

	if ( ! $show ) {
		return $result;
	}
	echo $result;
}

function the_telegram( $classes = null, $show = true ) {
	if ( $classes ) {
		$classes = 'class="' . $classes . '"';
	}
	$result = '<a href="https://t.me/+79852111060" ' . $classes . ' target="_blank" rel="nofollow">Telegram</a>';

	if ( ! $show ) {
		return $result;
	}
	echo $result;
}

function the_phone( $classes = null, $show = true ) {
	if ( $classes ) {
		$classes = 'class="' . $classes . '"';
	}
	$result = '<a href="tel:+74956464959" ' . $classes . ' target="_blank" rel="nofollow">+7 (495) 646-49-59</a>';

	if ( ! $show ) {
		return $result;
	}
	echo $result;
}

//function compress_html_output( $buffer ) {
//	$search = array(
//		'/\>[^\S ]+/s',   // удаляет пробелы после тегов
//		'/[^\S ]+\</s',   // удаляет пробелы перед тегами
//		'/(\s)+/s',       // сжимает множественные пробелы в один
//	);
//
//	$replace = array(
//		'>',
//		'<',
//		'\\1'
//	);
//
//	$buffer = preg_replace( $search, $replace, $buffer );
//
//	$buffer = preg_replace( '/«окнамобифон»/ui', 'ОкнаМобифон', $buffer );
//	$buffer = preg_replace( '/окнамобифон/ui', '«ОкнаМобифон»', $buffer );
//
//	return "<!-- Разработка сайтов на WordPress [ Woocommerce ] © Irtek.dev | https://irtek.dev -->\n" . $buffer;
//}

function compress_html_output( $buffer ) {
	// Удаляем пробелы, переносы строк и комментарии
	$search = array(
		'/\>[^\S ]+/s',     // Удаляем пробелы после тегов
		'/[^\S ]+\</s',     // Удаляем пробелы перед тегами
		'/(\s)+/s',         // Удаляем множественные пробелы
		'/<!--(.|\s)*?-->/' // Удаляем HTML-комментарии
	);

	$replace = array(
		'>',
		'<',
		'\\1',
		''
	);

	return "<!-- Разработка сайтов на WordPress [ Woocommerce ] © Irtek.dev | https://irtek.dev -->\n" . preg_replace( $search, $replace, $buffer );
}


function compressHtml( $html ) {
	preg_match_all( '/<script>(.*?)<\/script>/is', $html, $html_js_1 );
	preg_match_all( '/<script type="text\/javascript"\s?>(.*?)<\/script>/is', $html, $html_js_2 );

	$html_js = array_merge( $html_js_1['1'], $html_js_2['1'] );
	foreach ( $html_js as $i => &$js ) {
		if ( ! empty( $js ) ) {
			$search = [
				'<script>' . $js . '</script>',
				'<script type="text/javascript">' . $js . '</script>'
			];
			$html   = str_replace( $search, '<script data-s="' . $i . '" type="text/javascript">' . $js . '</script>', $html );
			unset( $search );
		}
		unset( $js, $i );
	}

	// сжимаем html в строку
	$html = preg_replace( '/(\r\n|\r|\n)/', '', $html );
	$html = preg_replace( '/\s+/', ' ', $html );

	// возвращаем js на место
	foreach ( $html_js as $i => &$js ) {
		// Backslashes
		$pregged = preg_replace( '/\\\/', '\\\\\\\\', $js );

		$html = preg_replace( '/<script data-s="' . $i . '" type="text\/javascript">(.*?)<\/script>/is', '<script type="text/javascript">' . $pregged . '</script>', $html );

		unset( $js, $i, $pregged );
	}

	// Remove multi-line comments
	$js = preg_replace( '!/\*.*?\*/!s', '', $html );

	// Remove single-line comments
	$js = preg_replace( '/\/\/.*$/m', '', $js );

	// Remove whitespace around symbols
	$js = preg_replace( '/\s*([{};:(),=+])\s*/', '$1', $js );

	// Remove unnecessary whitespace
	$js = preg_replace( '/\s+/', ' ', $js );


	return $html;
}

function start_html_compression() {
	ob_start( 'compress_html_output' );
}

// if ( ! WP_DEBUG ) {
// 	add_action( 'get_header', 'start_html_compression' );
// }

add_shortcode( 'map', 'map_shortcode' );

function map_shortcode() {
	return '<div id="map"></div>';
}

add_shortcode( 'phone', 'phone_shortcode' );

function phone_shortcode() {
	return the_phone( '', false );
}

add_shortcode( 'section', 'section_shortcode' );

function section_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'path' => ''
	), $atts, 'section' );

	ob_start();
	get_template_part( $atts['path'] );

	return ob_get_clean();
}

add_action( 'add_meta_boxes', array( 'T5_Richtext_Excerpt', 'switch_boxes' ) );

class T5_Richtext_Excerpt {
	public static function switch_boxes() {
		if ( ! post_type_supports( $GLOBALS['post']->post_type, 'excerpt' ) ) {
			return;
		}

		remove_meta_box(
			'postexcerpt'   // ID
			, ''            // Screen, empty to support all post types
			, 'normal'      // Context
		);

		add_meta_box(
			'postexcerpt2'               // Reusing just 'postexcerpt' doesn't work.
			, __( 'Excerpt' )            // Title
			, array( __CLASS__, 'show' ) // Display function
			, null                       // Screen, we use all screens with meta boxes.
			, 'normal'                   // Context
			, 'core'            // Priority
		);
	}


	public static function show( $post ) {
		?>
		<label class="screen-reader-text" for="excerpt"><?php
			_e( 'Excerpt' )
			?></label>
		<?php
		// We use the default name, 'excerpt', so we don’t have to care about
		// saving, other filters etc.
		wp_editor(
			self::unescape( $post->post_excerpt ),
			'excerpt',
			array(
				'textarea_rows' => 15
			,
				'media_buttons' => false
			,
				'teeny'         => true
			,
				'tinymce'       => true
			)
		);
	}


	public static function unescape( $str ) {
		return str_replace(
			array( '&lt;', '&gt;', '&quot;', '&amp;', '&nbsp;', '&amp;nbsp;' )
			, array( '<', '>', '"', '&', ' ', ' ' )
			, $str
		);
	}
}

// Удаляет строку 
// <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
add_filter('wp_img_tag_add_auto_sizes', '__return_false');