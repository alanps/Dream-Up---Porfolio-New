<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    if(!is_page('curriculum') && !is_page('calculadora') && !is_page('calculadora-mmc-mdc')){
        bundle('geral')->enqueue();

        if(is_404()){
            bundle('error404')->enqueue();
        }

        if(is_page('contato')){
            wp_enqueue_script( 'mask', '/wp-content/themes/dreamup/resources/scripts/libs/jquery.mask.js', ['jquery'], '1.0.0', true );
            bundle('contato')->enqueue();
        }
    }

    if(is_page('curriculum')){
        wp_enqueue_script( 'curriculum', '/wp-content/themes/dreamup/resources/scripts/curriculum.js', ['jquery'], '1.0.0', true );
        wp_enqueue_style( 'curriculum_stylesheet', '/wp-content/themes/dreamup/resources/fonts/stylesheet.css' );
        wp_enqueue_style( 'curriculum', '/wp-content/themes/dreamup/resources/styles/curriculum.css' );
    }

    if(is_page('calculadora')){
        wp_enqueue_script( 'calculadora', '/wp-content/themes/dreamup/resources/scripts/calculadora.js', ['jquery'], '1.0.0', true );
        wp_enqueue_style( 'calculadora_stylesheet', '/wp-content/themes/dreamup/resources/fonts/stylesheet.css' );
        wp_enqueue_style( 'calculadora_icomoon_stylesheet', '/wp-content/themes/dreamup/resources/fonts/icomoon/icomoon_style.css' );
        wp_enqueue_style( 'calculadora', '/wp-content/themes/dreamup/resources/styles/calculadora.css' );
        bundle('global_bundle')->enqueue();
    }

    if(is_page('calculadora-mmc-mdc')){
        wp_enqueue_style( 'calculadora-mmc-mdc', '/wp-content/themes/dreamup/resources/styles/calculadora-mmc-mdc.css' );
        bundle('global_bundle')->enqueue();
    }

    if(is_page('personagem')){
        wp_enqueue_style( 'personagem', '/wp-content/themes/dreamup/resources/styles/personagem.css' );
        wp_enqueue_style( 'tipsy', '/wp-content/themes/dreamup/resources/scripts/libs/tipsy/tipsy.css' );
        wp_enqueue_script( 'jquery.tipsy', '/wp-content/themes/dreamup/resources/scripts/libs/tipsy/jquery.tipsy.js', ['jquery'], '1.0.0', true );
        wp_enqueue_script( 'jquery.slimscroll.min', '/wp-content/themes/dreamup/resources/scripts/libs/jquery.slimscroll.min.js', ['jquery'], '1.0.0', true );
        wp_enqueue_script( 'spinners.min', '/wp-content/themes/dreamup/resources/scripts/libs/spinners.min.js', ['jquery'], '1.0.0', true );
        wp_enqueue_script( 'jquery.mousewheel-3.0.6.pack', '/wp-content/themes/dreamup/resources/scripts/libs/source/jquery.mousewheel-3.0.6.pack.js', ['jquery'], '1.0.0', true );
        wp_enqueue_style( 'jquery.fancybox', '/wp-content/themes/dreamup/resources/scripts/libs/source/jquery.fancybox.css' );
        wp_enqueue_script( 'jquery.fancybox.pack', '/wp-content/themes/dreamup/resources/scripts/libs/source/jquery.fancybox.pack.js', ['jquery'], '2.1.5', true );
        wp_enqueue_style( 'jquery.fancybox-buttons', '/wp-content/themes/dreamup/resources/scripts/libs/source/helpers/jquery.fancybox-buttons.css' );
        wp_enqueue_script( 'jquery.fancybox-buttons', '/wp-content/themes/dreamup/resources/scripts/libs/source/helpers/jquery.fancybox-buttons.js', ['jquery'], '1.0.5', true );
        wp_enqueue_script( 'jquery.fancybox-media', '/wp-content/themes/dreamup/resources/scripts/libs/source/helpers/jquery.fancybox-media.js', ['jquery'], '1.0.6', true );
        wp_enqueue_style( 'jquery.fancybox-thumbs', '/wp-content/themes/dreamup/resources/scripts/libs/source/helpers/jquery.fancybox-thumbs.css' );
        wp_enqueue_script( 'jquery.fancybox-thumbs', '/wp-content/themes/dreamup/resources/scripts/libs/source/helpers/jquery.fancybox-thumbs.js', ['jquery'], '1.0.7', true );
        bundle('global_bundle')->enqueue();
    }
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {

    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Enable custom logo.
     */
    add_theme_support('custom-logo');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary'
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer'
    ] + $config);
});

/**
 * Registrar CPTs.
 */
add_action( 'init', function () {
    $labels = array(
        'name'                  => _x( 'Artes', 'Post Type General Name', 'dreamup' ),
        'singular_name'         => _x( 'Arte', 'Post Type Singular Name', 'dreamup' ),
        'menu_name'             => __( 'Artes', 'dreamup' ),
        'name_admin_bar'        => __( 'Artes', 'dreamup' ),
        'archives'              => __( 'Item Archives', 'dreamup' ),
        'attributes'            => __( 'Item Attributes', 'dreamup' ),
        'parent_item_colon'     => __( 'Parent Item:', 'dreamup' ),
        'all_items'             => __( 'Todos os Artes', 'dreamup' ),
        'add_new_item'          => __( 'Adicionar novo Arte', 'dreamup' ),
        'add_new'               => __( 'Adicionar novo', 'dreamup' ),
        'new_item'              => __( 'Novo Arte', 'dreamup' ),
        'edit_item'             => __( 'Editar Arte', 'dreamup' ),
        'update_item'           => __( 'Atualizar Arte', 'dreamup' ),
        'view_item'             => __( 'Visualizar Arte', 'dreamup' ),
        'view_items'            => __( 'Visualizar Artes', 'dreamup' ),
        'search_items'          => __( 'Procurar Arte', 'dreamup' ),
        'not_found'             => __( 'Não encontrado', 'dreamup' ),
        'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'dreamup' ),
        'featured_image'        => __( 'Imagem destacada', 'dreamup' ),
        'set_featured_image'    => __( 'Definir imagem destacada', 'dreamup' ),
        'remove_featured_image' => __( 'Remove imagem destacada', 'dreamup' ),
        'use_featured_image'    => __( 'Usar como imagem destacada', 'dreamup' ),
        'insert_into_item'      => __( 'Insert into item', 'dreamup' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'dreamup' ),
        'items_list'            => __( 'Lista de Artes', 'dreamup' ),
        'items_list_navigation' => __( 'Items list navigation', 'dreamup' ),
        'filter_items_list'     => __( 'Filter items list', 'dreamup' ),
    );

    $args = array(
        'label'                 => __( 'Arte', 'dreamup' ),
        'description'           => __( 'Artes', 'dreamup' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
        'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-book',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
    );

    register_post_type( 'artes', $args );
}, 0 );

/**
 * Registrar CPTs.
 */
add_action( 'init', function () {
    $labels = array(
        'name'                  => _x( 'Sites', 'Post Type General Name', 'dreamup' ),
        'singular_name'         => _x( 'Site', 'Post Type Singular Name', 'dreamup' ),
        'menu_name'             => __( 'Sites', 'dreamup' ),
        'name_admin_bar'        => __( 'Sites', 'dreamup' ),
        'archives'              => __( 'Item Archives', 'dreamup' ),
        'attributes'            => __( 'Item Attributes', 'dreamup' ),
        'parent_item_colon'     => __( 'Parent Item:', 'dreamup' ),
        'all_items'             => __( 'Todos os Sites', 'dreamup' ),
        'add_new_item'          => __( 'Adicionar novo Site', 'dreamup' ),
        'add_new'               => __( 'Adicionar novo', 'dreamup' ),
        'new_item'              => __( 'Novo Site', 'dreamup' ),
        'edit_item'             => __( 'Editar Site', 'dreamup' ),
        'update_item'           => __( 'Atualizar Site', 'dreamup' ),
        'view_item'             => __( 'Visualizar Site', 'dreamup' ),
        'view_items'            => __( 'Visualizar Sites', 'dreamup' ),
        'search_items'          => __( 'Procurar Site', 'dreamup' ),
        'not_found'             => __( 'Não encontrado', 'dreamup' ),
        'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'dreamup' ),
        'featured_image'        => __( 'Imagem destacada', 'dreamup' ),
        'set_featured_image'    => __( 'Definir imagem destacada', 'dreamup' ),
        'remove_featured_image' => __( 'Remove imagem destacada', 'dreamup' ),
        'use_featured_image'    => __( 'Usar como imagem destacada', 'dreamup' ),
        'insert_into_item'      => __( 'Insert into item', 'dreamup' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'dreamup' ),
        'items_list'            => __( 'Lista de Sites', 'dreamup' ),
        'items_list_navigation' => __( 'Items list navigation', 'dreamup' ),
        'filter_items_list'     => __( 'Filter items list', 'dreamup' ),
    );

    $args = array(
        'label'                 => __( 'Site', 'dreamup' ),
        'description'           => __( 'Sites', 'dreamup' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-book',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
    );

    register_post_type( 'sites', $args );
}, 0 );

/**
 * Registrar CPTs.
 */
add_action( 'init', function () {
    $labels = array(
        'name'                  => _x( 'Aplicativos', 'Post Type General Name', 'dreamup' ),
        'singular_name'         => _x( 'Aplicativo', 'Post Type Singular Name', 'dreamup' ),
        'menu_name'             => __( 'Aplicativos', 'dreamup' ),
        'name_admin_bar'        => __( 'Aplicativos', 'dreamup' ),
        'archives'              => __( 'Item Archives', 'dreamup' ),
        'attributes'            => __( 'Item Attributes', 'dreamup' ),
        'parent_item_colon'     => __( 'Parent Item:', 'dreamup' ),
        'all_items'             => __( 'Todos os Aplicativos', 'dreamup' ),
        'add_new_item'          => __( 'Adicionar novo Aplicativo', 'dreamup' ),
        'add_new'               => __( 'Adicionar novo', 'dreamup' ),
        'new_item'              => __( 'Novo Aplicativo', 'dreamup' ),
        'edit_item'             => __( 'Editar Aplicativo', 'dreamup' ),
        'update_item'           => __( 'Atualizar Aplicativo', 'dreamup' ),
        'view_item'             => __( 'Visualizar Aplicativo', 'dreamup' ),
        'view_items'            => __( 'Visualizar Aplicativos', 'dreamup' ),
        'search_items'          => __( 'Procurar Aplicativo', 'dreamup' ),
        'not_found'             => __( 'Não encontrado', 'dreamup' ),
        'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'dreamup' ),
        'featured_image'        => __( 'Imagem destacada', 'dreamup' ),
        'set_featured_image'    => __( 'Definir imagem destacada', 'dreamup' ),
        'remove_featured_image' => __( 'Remove imagem destacada', 'dreamup' ),
        'use_featured_image'    => __( 'Usar como imagem destacada', 'dreamup' ),
        'insert_into_item'      => __( 'Insert into item', 'dreamup' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'dreamup' ),
        'items_list'            => __( 'Lista de Aplicativos', 'dreamup' ),
        'items_list_navigation' => __( 'Items list navigation', 'dreamup' ),
        'filter_items_list'     => __( 'Filter items list', 'dreamup' ),
    );

    $args = array(
        'label'                 => __( 'Aplicativo', 'dreamup' ),
        'description'           => __( 'Aplicativos', 'dreamup' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-book',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
    );

    register_post_type( 'apps', $args );
}, 0 );

/**
 * Adicionar página de opções do tema.
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Configurações do Tema',
        'menu_title'    => 'Configurações do Tema',
        'menu_slug'     => 'dreamup_config_page',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'update_button' => __('Salvar', 'acf'),
        'updated_message' => __("Alterações Salvas", 'acf'),
    ));
}

/**
 * Criando campos na página de configurações do tema.
 */
add_action( 'acf/init', function () {
    if( function_exists('acf_add_local_field_group') ):

        $args = array(
           'type'                     => 'artes',
           'orderby'                  => 'name',
           'order'                    => 'ASC',
           'hide_empty'               => 1,
           'hierarchical'             => 1,
           'taxonomy'                 => 'category',
           'exclude'                  => [1]
        );
        $categories = get_categories($args);
        $artes_carrousel = [];

        foreach ($categories as $categorie) {
            $artes_carrousel += array($categorie->cat_ID => $categorie->name);
        }
        asort($artes_carrousel);
        
        acf_add_local_field_group(array(
            'key'      => 'dreamup_config_page_fields',
            'name'     => 'dreamup_config_page_fields',
            'title'    => 'Configurações do Carrousel da Home',
            'fields'   => array (
                    array (
                        'key' => 'dreamup_config_page_group',
                        'name' => 'dreamup_config_page_group',
                        'title' => 'Configurações do Carrousel da Home',
                        'type' => 'group',
                        'layout' => 'block',
                        'sub_fields' => array (
                            array (
                                'key' => 'artes_carrousel',
                                'label' => 'Artes do Carrousel',
                                'instructions' => 'Selecione as artes que serão listadas no carrousel da home.',
                                'name' => 'artes_carrousel',
                                'type' => 'select',
                                'choices' => $artes_carrousel,
                                'multiple' => 1,
                                'ui' => 0,
                                'wrapper' => array (
                                    'width' => '30%'
                                )
                            ),
                        ),
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'dreamup_config_page',
                        ),
                    ),
                ),
        ));

    endif;
});


/**
 * Criando campos no CPTs Sites e Apps.
 */
add_action( 'acf/init', function () {
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key'      => 'sites_e_apps_fields',
            'name'     => 'sites_e_apps_fields',
            'title'    => 'Configurações de Sites e Apps',
            'fields'   => array (
                    array (
                        'key' => 'sites_e_apps_group',
                        'name' => 'sites_e_apps_group',
                        'title' => 'Configurações de Sites e Apps',
                        'type' => 'group',
                        'layout' => 'block',
                        'sub_fields' => array (
                            array (
                                'key' => 'site',
                                'label' => 'Site',
                                'instructions' => 'Escreva a url do site.',
                                'name' => 'site',
                                'type' => 'text',
                                'required' => false
                            ),
                            array (
                                'key' => 'cargo',
                                'label' => 'Cargo',
                                'instructions' => 'Escreva o cargo na empresa.',
                                'name' => 'cargo',
                                'type' => 'text',
                                'required' => false
                            ),
                            array (
                                'key' => 'entrada_empresa',
                                'label' => 'Data de Entrada na Empresa',
                                'instructions' => 'Selecione a data de entrada na empresa.',
                                'name' => 'entrada_empresa',
                                'type' => 'date_picker',
                                'required' => false,
                                'return_format' => 'Y/m/d'
                            ),
                            array (
                                'key' => 'saida_empresa',
                                'label' => 'Data de Saída da Empresa',
                                'instructions' => 'Selecione a data de saída na empresa.',
                                'name' => 'saida_empresa',
                                'type' => 'date_picker',
                                'required' => false,
                                'return_format' => 'Y/m/d'
                            ),
                        ),
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'sites',
                        ),
                    ),
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'apps',
                        ),
                    ),
                ),
        ));

    endif;
});
