<?php

if ( ! class_exists( 'Okna' ) ) :

	class Okna {

		public function __construct() {
//			add_action( 'init', [ __CLASS__, 'register_post_types' ] );
			define( 'PHONE', '<a href="tel:+74956464959" class="phone-link">+7 (495) 646-49-59</a>' );

			add_action( 'wp_ajax_nopriv_feedback', [ __CLASS__, 'feedback_callback' ] );
			add_action( 'wp_ajax_feedback', [ __CLASS__, 'feedback_callback' ] );
		}

		public static function feedback_callback() {
			$name    = sanitize_text_field( $_POST['name'] );
			$phone   = sanitize_text_field( $_POST['phone'] );
			$message = sanitize_text_field( $_POST['message'] );
			$how     = sanitize_text_field( $_POST['how'] );
		}

		public static function register_post_types() {

			register_post_type( 'product', [
				'label'         => null,
				'labels'        => [
					'name'               => 'Продукция',
					'singular_name'      => 'Товар',
					'add_new'            => 'Добавить товар',
					'add_new_item'       => 'Добавление',
					'edit_item'          => 'Редактирование',
					'new_item'           => 'Новое',
					'view_item'          => 'Смотреть',
					'search_items'       => 'Искать',
					'not_found'          => 'Не найдено',
					'not_found_in_trash' => 'Не найдено в корзине',
					'parent_item_colon'  => '',
					'menu_name'          => 'Каталог',
				],
				'description'   => '',
				'public'        => true,
				// 'publicly_queryable'  => null, // зависит от public
				// 'exclude_from_search' => null, // зависит от public
				// 'show_ui'             => null, // зависит от public
				// 'show_in_nav_menus'   => null, // зависит от public
				'show_in_menu'  => null,
				// показывать ли в меню админки
				// 'show_in_admin_bar'   => null, // зависит от show_in_menu
				'show_in_rest'  => null,
				// добавить в REST API. C WP 4.7
				'rest_base'     => null,
				// $post_type. C WP 4.7
				'menu_position' => null,
				'menu_icon'     => null,
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'  => false,
				'supports'      => [ 'title', 'editor' ],
				'taxonomies'    => [],
				'has_archive'   => true,
				'rewrite'       => array(
					'slug'       => 'catalog',
					'with_front' => false,
				),
				'query_var'     => true,
			] );

			register_post_type( 'accessories', [
				'label'         => null,
				'labels'        => [
					'name'               => 'Аксессуары',
					'singular_name'      => 'Товар',
					'add_new'            => 'Добавить товар',
					'add_new_item'       => 'Добавление',
					'edit_item'          => 'Редактирование',
					'new_item'           => 'Новое',
					'view_item'          => 'Смотреть',
					'search_items'       => 'Искать',
					'not_found'          => 'Не найдено',
					'not_found_in_trash' => 'Не найдено в корзине',
					'parent_item_colon'  => '',
					'menu_name'          => 'Каталог',
				],
				'description'   => '',
				'public'        => true,
				// 'publicly_queryable'  => null, // зависит от public
				// 'exclude_from_search' => null, // зависит от public
				// 'show_ui'             => null, // зависит от public
				// 'show_in_nav_menus'   => null, // зависит от public
				'show_in_menu'  => null,
				// показывать ли в меню админки
				// 'show_in_admin_bar'   => null, // зависит от show_in_menu
				'show_in_rest'  => null,
				// добавить в REST API. C WP 4.7
				'rest_base'     => null,
				// $post_type. C WP 4.7
				'menu_position' => null,
				'menu_icon'     => null,
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'  => false,
				'supports'      => [ 'title', 'editor', 'thumbnail' ],
				'taxonomies'    => [],
				'has_archive'   => true,
				'rewrite'       => array(
					'slug'       => 'catalog',
					'with_front' => false,
				),
				'query_var'     => true,
			] );

			register_post_type( 'promo', [
				'label'         => null,
				'labels'        => [
					'name'          => 'Акции',
					'singular_name' => 'Акция',
					'menu_name'     => 'Акции',
				],
				'description'   => '',
				'public'        => true,
				// 'publicly_queryable'  => null, // зависит от public
				// 'exclude_from_search' => null, // зависит от public
				// 'show_ui'             => null, // зависит от public
				// 'show_in_nav_menus'   => null, // зависит от public
				'show_in_menu'  => null,
				// показывать ли в меню админки
				// 'show_in_admin_bar'   => null, // зависит от show_in_menu
				'show_in_rest'  => null,
				// добавить в REST API. C WP 4.7
				'rest_base'     => null,
				// $post_type. C WP 4.7
				'menu_position' => null,
				'menu_icon'     => null,
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'  => false,
				'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
				'taxonomies'    => [],
				'has_archive'   => true,
				'query_var'     => true,
			] );

			// список параметров: wp-kama.ru/function/get_taxonomy_labels
			register_taxonomy( 'product_cat', [ 'product' ], [
				'label'        => '',
				'labels'       => [
					'name'              => 'Genres',
					'singular_name'     => 'Genre',
					'search_items'      => 'Search Genres',
					'all_items'         => 'All Genres',
					'view_item '        => 'View Genre',
					'parent_item'       => 'Parent Genre',
					'parent_item_colon' => 'Parent Genre:',
					'edit_item'         => 'Edit Genre',
					'update_item'       => 'Update Genre',
					'add_new_item'      => 'Add New Genre',
					'new_item_name'     => 'New Genre Name',
					'menu_name'         => 'Genre',
					'back_to_items'     => '← Back to Genre',
				],
				'description'  => '', // описание таксономии
				'public'       => true,
				// 'publicly_queryable'    => null, // равен аргументу public
				// 'show_in_nav_menus'     => true, // равен аргументу public
				// 'show_ui'               => true, // равен аргументу public
				// 'show_in_menu'          => true, // равен аргументу show_ui
				// 'show_tagcloud'         => true, // равен аргументу show_ui
				// 'show_in_quick_edit'    => null, // равен аргументу show_ui
				'hierarchical' => false,

				'rewrite'           => true,
				//'query_var'             => $taxonomy, // название параметра запроса
				'capabilities'      => array(),
				'meta_box_cb'       => null,  // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
				'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
				'show_in_rest'      => null,  // добавить в REST API
				'rest_base'         => null,  // $taxonomy
				// '_builtin'              => false,
				//'update_count_callback' => '_update_post_term_count',
			] );

		}


	}

	return new Okna;

endif;