<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function awesome_custom_post_type (){
    
    $labels = array(
        'name' => 'Films',
        'singular_name' => 'Film',
        'add_new' => 'Add Film',
        'all_Films' => 'All Films',
        'add_new_item' => 'Add Film',
        'edit_item' => 'Edit Film',
        'new_item' => 'New Film',
        'view_item' => 'View Film',
        'search_item' => 'Search Films',
        'not_found' => 'No Film found',
        'not_found_in_trash' => 'No Films found in trash',
        'parent_item_colon' => 'Parent Film'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('films',$args);
}
add_action('init','awesome_custom_post_type');



function awesome_custom_taxonomies() {
    
    register_taxonomy('genre', 'films', array(
        'label' => 'Genre',
        'rewrite' => array( 'slug' => 'genre' ),
        'hierarchical' => false
    ) );
    
    register_taxonomy('year', 'films', array(
        'label' => 'Year',
        'rewrite' => array( 'slug' => 'year' ),
        'hierarchical' => false
    ) );
    
    register_taxonomy('actor', 'films', array(
        'label' => 'Actor',
        'rewrite' => array( 'slug' => 'actor' ),
        'hierarchical' => false
    ) );
    
    register_taxonomy('country', 'films', array(
        'label' => 'Country',
        'rewrite' => array( 'slug' => 'country' ),
        'hierarchical' => false
    ) );
    
}
add_action( 'init' , 'awesome_custom_taxonomies' );


function admin_init(){
    add_meta_box("ticket_price", "Ticket Price", "ticket_price", "films", "normal", "low");
    add_meta_box("release_date", "Release Date", "release_date", "films", "normal", "low");
}

function ticket_price() {
    global $post;
    $custom = get_post_custom($post->ID);
    $strTicketPrice = $custom["strTicketPrice"][0];
    ?>
  <p>
  	<label>Ticket Price:</label><br />
  	<input type="text" name="strTicketPrice" value="<?php echo $strTicketPrice; ?>" class="form-control"  style="width:100%;">
  </p>
  <?php
}
function release_date() {
    global $post;
    $custom = get_post_custom($post->ID);
    $strReleaseDate = $custom["strReleaseDate"][0];
    ?>
  <p>
  	<label>Ticket Price:</label><br />
  	<input type="text" name="strReleaseDate" value="<?php echo $strReleaseDate; ?>" class="form-control"  style="width:100%;">
  </p>
  <?php
}

add_action("admin_init", "admin_init");

function save_details(){
    global $post;
    
    update_post_meta($post->ID, "strTicketPrice", $_POST["strTicketPrice"]);
    update_post_meta($post->ID, "strReleaseDate", $_POST["strReleaseDate"]);
}

add_action('save_post', 'save_details');
