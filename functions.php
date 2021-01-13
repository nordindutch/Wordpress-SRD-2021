<?php 
add_theme_support( 'custom-logo' );
add_image_size( 'sml_size', 300 );
add_image_size( 'mid_size', 600 );
add_image_size( 'lrg_size', 1200 );
add_image_size( 'sup_size', 2400 );
add_theme_support( 'post-thumbnails' );
function startwordpress_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
  wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
function create_rules() {
	register_post_type( 'rules',
			array(
			'labels' => array(
	'name' => __( 'Rules' ),
	'singular_name' => __( 'Rule' ),
			),
			'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-hammer',
			'supports' => array(
	'title',
  'editor',
  'page-attributes',
	'custom-fields'
			)
	));
}
function my_taxonomies_product() {
  $labels = array(
    'name'              => _x( 'Ability Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Ability Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Ability Categories' ),
    'all_items'         => __( 'All Ability Categories' ),
    'parent_item'       => __( 'Parent Ability Category' ),
    'parent_item_colon' => __( 'Parent Ability Category:' ),
    'edit_item'         => __( 'Edit Ability Category' ), 
    'update_item'       => __( 'Update Ability Category' ),
    'add_new_item'      => __( 'Add New Ability Category' ),
    'new_item_name'     => __( 'New Ability Category' ),
    'menu_name'         => __( 'Ability Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'ability_category', 'ability', $args );
}
add_action( 'init', 'my_taxonomies_product', 0 );

function create_abilities() {
	register_post_type( 'ability',
			array(
			'labels' => array(
        'name'          => __( 'Abilities' ),
        'singular_name' => __( 'Ability' ),
			),
			'public'       => true,
      'has_archive'  => true,
      'hierarchical' => false,
      'show_in_rest' => true,
      'taxonomies'   => array( 'ability_types' ),
      'rewrite'      => array('slug' => 'abilities'),
      'menu_icon'    => 'dashicons-buddicons-topics',
			'supports'     => array(
        'title',
        'page-attributes',
        'custom-fields'
			)
	));
}
function create_short_stories() {
	register_post_type( 'story',
			array(
			'labels' => array(
        'name'          => __( 'Short Stories' ),
        'singular_name' => __( 'Short Story' ),
			),
			'public'       => true,
      'has_archive'  => true,
      'hierarchical' => false,
      'show_in_rest' => true,
      'rewrite'      => array('slug' => 'stories'),
      'menu_icon'    => 'dashicons-book-alt',
			'supports'     => array(
        'title',
        'page-attributes',
        'custom-fields',
        'excerpt',
        'thumbnail'
			)
	));
}
function world_article_types() {
  $labels = array(
    'name'              => _x( 'Article Types', 'taxonomy general name' ),
    'singular_name'     => _x( 'Article Type', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Article Types' ),
    'all_items'         => __( 'All Article Types' ),
    'parent_item'       => __( 'Parent Article Type' ),
    'parent_item_colon' => __( 'Parent Article Type:' ),
    'edit_item'         => __( 'Edit Article Type' ), 
    'update_item'       => __( 'Update Article Type' ),
    'add_new_item'      => __( 'Add Article Type' ),
    'new_item_name'     => __( 'New Article Type' ),
    'menu_name'         => __( 'Article Types' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
  );
  register_taxonomy( 'world_article_types', 'world_article', $args );
}
function world_article_timeline() {
  $labels = array(
    'name'              => _x( 'Timelines', 'taxonomy general name' ),
    'singular_name'     => _x( 'Timeline', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Timelines' ),
    'all_items'         => __( 'All Timelines' ),
    'parent_item'       => __( 'Parent Timeline' ),
    'parent_item_colon' => __( 'Parent Timeline:' ),
    'edit_item'         => __( 'Edit Timeline' ), 
    'update_item'       => __( 'Update Timeline' ),
    'add_new_item'      => __( 'Add Timeline' ),
    'new_item_name'     => __( 'New Timeline' ),
    'menu_name'         => __( 'Timelines' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
  );
  register_taxonomy( 'timelines', 'world_article', $args );
}
function create_world() {
	register_post_type( 'world_article',
			array(
			'labels' => array(
        'name'          => __( 'World Articles' ),
        'singular_name' => __( 'World Article' ),
			),
			'public'       => true,
      'has_archive'  => true,
      'hierarchical' => false,
      'show_in_rest' => true,
      'rewrite'      => array('slug' => 'world_article'),
      'menu_icon'    => 'dashicons-admin-site-alt',
			'supports'     => array(
        'title',
        'page-attributes',
        'editor',
        'custom-fields',
        'excerpt',
        'thumbnail',
			)
	));
}
add_action( 'init', 'world_article_types', 0 );
add_action( 'init', 'create_world' );
add_action( 'init', 'create_rules' );
add_action( 'init', 'create_short_stories' );
add_action( 'init', 'create_abilities' );
add_action('admin_init', function () {
  // Redirect any user trying to access comments page
  global $pagenow;
  
  if ($pagenow === 'edit-comments.php') {
      wp_redirect(admin_url());
      exit;
  }

  // Remove comments metabox from dashboard
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

  // Disable support for comments and trackbacks in post types
  foreach (get_post_types() as $post_type) {
      if (post_type_supports($post_type, 'comments')) {
          remove_post_type_support($post_type, 'comments');
          remove_post_type_support($post_type, 'trackbacks');
      }
  }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
  if (is_admin_bar_showing()) {
      remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
  }
});

function getTheTax() {
  // Get post by post ID.
  if ( ! $post = get_post() ) {
      return '';
  }

  // Get post type by post.
  $post_type = $post->post_type;

  // Get post type taxonomies.
  $taxonomies = get_object_taxonomies( $post_type, 'objects' );

  $out = array();

  foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

      // Get the terms related to post.
      $terms = get_the_terms( $post->ID, $taxonomy_slug );

      if ( ! empty( $terms ) ) {
          $out[] = "";
          foreach ( $terms as $term ) {
              $out[] = sprintf( '%2$s',
                  esc_url( get_term_link( $term->slug, $taxonomy_slug ) ),
                  esc_html( $term->name )
              );
          }
          $out[] = "";
      }
  }
  return implode( '', $out );
}
add_action('admin_head', 'admin_css');

function admin_css() {
  ?>
  <style>
    .acf-field[data-width]+.acf-field[data-width],.acf-repeater .acf-row-handle.order+td,.acf-fields.-border{
      border: none;
      
    }
    [data-name='backgrounds'] .acf-row:nth-child(even) > .acf-fields{
      background-color: rgba(135, 206, 235, 0.2);
    }
    [data-name='backgrounds'] .acf-row:nth-child(even) > .acf-row-handle{
      background-color: #ddd;
      color: white;
    }
    
    .acf-row-handle + .acf-fields{
      border-bottom: 1px solid #eee!important;
    }
    input,border,a, select,textarea{
      border-radius: 0!important;
    }
    .acf-field .acf-label label{
      text-align: center;
    margin: 0;
    }
    .acf-field[data-type='group']{
      padding: 0;
    }
    .acf-field[data-type='group'] > .acf-label > label{
      display: none;
    }
    .acf-field{
      min-height: 50px!important;
    }
    .-collapsed .acf-label, [data-name="group_title"] .acf-label{
      display: none!important;
    }
    [data-name="group_title"] input, .-collapsed input{
      border:none!important;
      background-color: rgba(0,0,0,0)!important;
      font-weight: bold;
      padding: 0;
    }
  </style>';
  <?php
}
add_filter('get_the_archive_title', function ($title) {
  if(is_tax('world_article_types')){
    $title = 'World of Solaria';
  }
  return $title;
});


?>
