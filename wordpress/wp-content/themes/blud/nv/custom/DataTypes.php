<?php
namespace NV\Custom;

/**
 * 
 * Search class.
 *
 * @since Thomas 1.0
 */


class DataTypes
{

	
	/**
     * Initialize the DataTypes class. 
     * 
     */

	public static function register() {
        self::data_post_type();
        self::taxonomies_for_pages();
    }

	
	/**
     * Registers the Data post type and associated taxonomies.
     *
     * Taxonomies:
     * Company
     * Products
     *
     * Used by action hook: 'init'
     */
	public static function data_post_type(){
        $data = array(
            'labels'             => array(
                'name'               => _x( 'usaa', 'post type general name' ),
                'singular_name'      => _x( 'usaa', 'post type singular name' ),
                'menu_name'          => _x( 'usaa', 'admin menu' ),
                'name_admin_bar'     => _x( 'usaa', 'add new on admin bar' ),
                'add_new'            => _x( 'Add New', 'usaa' ),
                'add_new_item'       => __( 'Add New usaa' ),
                'new_item'           => __( 'New usaa' ),
                'edit_item'          => __( 'Edit usaa' ),
                'view_item'          => __( 'View usaa' ),
                'all_items'          => __( 'All usaa' ),
                'search_items'       => __( 'Search usaa' ),
                'parent_item_colon'  => __( 'Parent usaa:' ),
                'not_found'          => __( 'No usaa found.' ),
                'not_found_in_trash' => __( 'No usaa found in Trash.' )
            ),
            'public'             => false,
            'publicly_queryable' => true,
            'exclude_from_search'=> true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'rewrite'            => array( 'slug' => 'usaa' ),
            'supports'           => array( 'title' )
        );
        register_post_type( 'usaa', $data );
		
/*
        $args = array(
            'hierarchical'      => true,  
            'labels'            => array(
                'name'              => _x( 'Companies', 'taxonomy general name' ),
                'singular_name'     => _x( 'Company', 'taxonomy singular name' ),
                'search_items'      => __( 'Search Companies' ),
                'all_items'         => __( 'All Companies' ),
                'parent_item'       => __( 'Parent Company' ),
                'parent_item_colon' => __( 'Parent Company:' ),
                'edit_item'         => __( 'Edit Company' ),
                'update_item'       => __( 'Update Company' ),
                'add_new_item'      => __( 'Add New Company' ),
                'new_item_name'     => __( 'New Company Name' ),
                'menu_name'         => __( 'Companies' ),
                ),
            'query_var'         => true,
            'rewrite'           => array(
                'slug'  => 'company'
            )
        );
        register_taxonomy( 'companies', 'products', $args );
*/

 
	}
	
	/**
     * Registers the use of categories for pages
     *
     * Used by action hook: 'init'
     */
	public static function taxonomies_for_pages(){	     
		  register_taxonomy_for_object_type( 'category', 'page' );
	} 

}