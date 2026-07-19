<?php
/**
 * Plugin Name: Productos Manager
 * Description: Registra el tipo de contenido personalizado Productos.
 * Version: 1.0.0
 * Author: Rodrigo
 * Text Domain: productos-manager
 */

if (! defined('ABSPATH')) {
	exit;
}

/**
 * Registra el CPT Productos.
 */
function productos_manager_register_post_type(): void
{
	$labels = array(
		'name'               => __('Productos', 'productos-manager'),
		'singular_name'      => __('Producto', 'productos-manager'),
		'menu_name'          => __('Productos', 'productos-manager'),
		'name_admin_bar'     => __('Producto', 'productos-manager'),
		'add_new'            => __('Añadir nuevo', 'productos-manager'),
		'add_new_item'       => __('Añadir nuevo producto', 'productos-manager'),
		'new_item'           => __('Nuevo producto', 'productos-manager'),
		'edit_item'          => __('Editar producto', 'productos-manager'),
		'view_item'          => __('Ver producto', 'productos-manager'),
		'all_items'          => __('Todos los productos', 'productos-manager'),
		'search_items'       => __('Buscar productos', 'productos-manager'),
		'not_found'          => __('No se encontraron productos.', 'productos-manager'),
		'not_found_in_trash' => __('No hay productos en la papelera.', 'productos-manager'),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'menu_icon'          => 'dashicons-products',
		'supports'           => array(
			'title',
			'editor',
			'thumbnail',
		),
		'has_archive'        => true,
		'rewrite'            => array(
			'slug' => 'productos',
		),
		'menu_position'      => 20,
	);

	register_post_type('producto', $args);
}
add_action('init', 'productos_manager_register_post_type');

/**
 * Regenera las reglas de enlaces permanentes al activar el plugin.
 */
function productos_manager_activate(): void
{
	productos_manager_register_post_type();
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'productos_manager_activate');

/**
 * Regenera las reglas al desactivar el plugin.
 */
function productos_manager_deactivate(): void
{
	flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'productos_manager_deactivate');