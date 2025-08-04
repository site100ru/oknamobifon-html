<?php

namespace Irtek;

if ( ! class_exists( 'Theme' ) ) :

	final class Theme {

		private static string $version = '0.0.0';
		private static string $theme = '';

		public function __construct() {
			$theme = wp_get_theme();

			self::$version = $theme->get( 'Version' );
			self::$theme   = $theme->get( 'Name' );

			add_action( 'wp_enqueue_scripts', [ __CLASS__, 'scripts' ], 10 );
			add_action( 'after_setup_theme', [ __CLASS__, 'after_setup' ] );
		}

		public static function scripts(): void {
			if ( ! is_admin() ) {
				$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

				if ( is_page( 'payment' ) ) {
					wp_enqueue_script( self::$theme . '-yookassa-script', 'https://yookassa.ru/integration/simplepay/js/yookassa_construct_form.js', null, self::$version, true );
					wp_enqueue_style( self::$theme . '-yookassa-style', 'https://yookassa.ru/integration/simplepay/css/yookassa_construct_form.css', null, self::$version );
				}

				wp_enqueue_style( self::$theme . '-style', get_template_directory_uri() . '/assets/css/main' . $suffix . '.css', null, self::$version, 'all' );

				wp_enqueue_script( self::$theme . '-script', get_template_directory_uri() . '/assets/js/main.bundle' . $suffix . '.js', null, self::$version, [
					'in_footer' => true,
					'strategy'  => 'defer',
				] );

				wp_localize_script( self::$theme . '-script', self::$theme, [
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
					'nonce'   => wp_create_nonce( 'update-cart' ),
				] );
			}
		}

		public static function after_setup(): void {
			// включаем меню в админке
			add_theme_support( 'menus' );

			// создание метатега <title> через хук
			add_theme_support( 'title-tag' );

			add_theme_support( 'post-thumbnails' );

			register_nav_menus( array(
				'main-menu' => 'Главное меню'
			) );
		}

	}

	return new Theme;

endif;