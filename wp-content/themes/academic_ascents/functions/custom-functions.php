<?php
/*
 * @package WordPress
 * @subpackage Zemplate
 * @since Zemplate 1.0
 *
 * Theme-specific functions and definitions
 *
 * Use this file to set up any theme-specific functions you'd like to use
 * in the current theme.
 */

/*------------------------------------*\
    ::Facebook OG
\*------------------------------------*/

add_action('wp_head', 'add_fb_open_graph_tags');
function add_fb_open_graph_tags() {
    if (is_single()) {
        global $post;
        if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_object = get_post($thumbnail_id);
            $image = $thumbnail_object->guid;
        } else {    
            $image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
        }
        //$description = get_bloginfo('description');
        $description = my_excerpt( $post->post_content, $post->post_excerpt );
        $description = strip_tags($description);
        $description = str_replace("\"", "'", $description);
?>
<!-- Facebook -->
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo $image; ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />

<?php   }
}

function my_excerpt($text, $excerpt){
    
    if ($excerpt) return $excerpt;

    $text = strip_shortcodes( $text );

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n
     ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
    } else {
            $text = implode(' ', $words);
    }

    return apply_filters('wp_trim_excerpt', $text, $excerpt);
}