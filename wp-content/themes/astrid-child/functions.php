<?php
function my_theme_enqueue_styles() {

    $parent_style = 'astrid-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Projects' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array('category'),
      'supports' => array( 'title', 'editor','author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions')
    )
  );
}

function astrid_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = '<i class="fa fa-calendar"></i><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	$author_info = get_userdata(get_the_author_meta('ID'));

	$byline = sprintf(
		'<div class="author-image">'.get_avatar(get_the_author_meta('ID'), 50).'</div>' . esc_html_x( '%s', 'post author', 'astrid' ),
		'<div class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( $author_info->first_name.' '.$author_info->last_name ) . ' - ' . esc_html(implode(', ', $author_info->roles)) .'</a></div>'
	);

	echo '<div class="byline"> ' . $byline . '</div><span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	$categories_list = get_the_category_list( esc_html__( ', ', 'astrid' ) );
	if ( $categories_list ) {
		echo '<span class="cat-links"><i class="fa fa-folder-o"></i>' . $categories_list . '</span>';
	}	

}
?>