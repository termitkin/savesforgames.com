<?php
function remove_admin_bar(){
	if (!current_user_can('administrator') && !is_admin()){
		show_admin_bar(false);
	}
};

// Удаляем хлам из <head>
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Удаляем ссылки на embed страницы из <head>
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

// Удаляем все emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

// Удаляем dns-prefetch
remove_action( 'wp_head', 'wp_resource_hints', 2);

// Добавление rel="canonical" на страницы с сейвами
if( function_exists( 'rel_canonical' ) ) {
	remove_action( 'wp_head', 'rel_canonical' );
}
function rel_canonical_nabtron() {
	if ( !is_singular() )
	return;

	global $wp_the_query;
	if ( !$id = $wp_the_query->get_queried_object_id() )
	return;

	$link = get_permalink( $id );

	echo ('<link rel="canonical" href="'. $link . '" />');
}
add_action( 'wp_head', 'rel_canonical_nabtron' );

function xyz_amp_modify_json_metadata( $metadata, $post ) {
	$metadata['@type'] = 'NewsArticle';

	$metadata['publisher']['logo'] = array(
		'@type' => 'ImageObject',
		'url' => get_template_directory_uri() . '/logo.png',
		'height' => 40,
		'width' => 400,
	);

	return $metadata;
}
add_filter( 'amp_post_template_metadata', 'xyz_amp_modify_json_metadata', 10, 2 );

// Remove css file from Post Views Counter Plugin
function delete_css_from_post_views_counter() {
	wp_dequeue_style( 'post-views-counter-frontend' );
}
add_action( 'wp_print_styles', 'delete_css_from_post_views_counter', 100 );

// remove dashicons in frontend to non-admin
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

// Move jquery to footer
function wpse_173601_enqueue_scripts() {
	wp_scripts()->add_data( 'jquery', 'group', 1 );
	wp_scripts()->add_data( 'jquery-core', 'group', 1 );
	wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );

// Allow uploads .rar archives without Disable Real MIME Check plugin
function enable_extended_upload ( $mime_types =array() ) {
  $mime_types['rar']  = 'application/x-rar';

  return $mime_types;
}
add_filter('upload_mimes', 'enable_extended_upload');

// Remove website field from add comments form
function website_remove($fields) {
	if(isset($fields['url'])) {
		unset($fields['url']);
	}
	if (isset($fields['email'])) {
		unset($fields['email']);
	}
	
	return $fields;
}
add_filter('comment_form_default_fields', 'website_remove');

// Comment date to format %num% days ago
function pressfore_comment_time_output($date, $d, $comment){
	return sprintf( _x( '%s ago', '%s = human-readable time difference'), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter('get_comment_date', 'pressfore_comment_time_output', 10, 3);

// Change order fields in comments (author -> textarea -> submit button)
function wpb_move_comment_field_to_bottom($fields) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );







// Remove comment date
// function wpb_remove_comment_date($date, $d, $comment) { 
//     if ( !is_admin() ) {
//         return;
//     } else { 
//         return $date;
//     }
// }
// add_filter( 'get_comment_date', 'wpb_remove_comment_date', 10, 3);
 
// Remove comment time
// function wpb_remove_comment_time($date, $d, $comment) { 
//     if ( !is_admin() ) {
//             return;
//     } else { 
//             return $date;
//     }
// }
// add_filter( 'get_comment_time', 'wpb_remove_comment_time', 10, 3);



?>
