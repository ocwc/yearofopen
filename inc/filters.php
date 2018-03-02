<?php

function add_social_meta_tags() {
    global $post;

    $image = get_stylesheet_directory_uri() . '/images/facebook.jpg';
    $url = get_permalink();
    $title = get_bloginfo('title');
    $description = '';

    if ( is_home() ) {
        $url = get_bloginfo('url');
        $description = get_bloginfo('description');
    } elseif ( get_post_type() === 'page' ||
               get_post_type() === 'post'                   ) {

        $title = get_the_title();
    }

    ?>

    <meta property="og:title" content="<?php echo $title; ?>" >
    <meta property="og:description" content="<?php echo $description; ?>" >
    <meta property="og:image" content="<?php echo $image; ?>" >
    <meta property="og:url" content="<?php echo $url; ?>" >
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" >

    <?php
}

add_action('wp_head', 'add_social_meta_tags');

add_filter('pre_get_posts',"my_custom_shared_drafts");
function my_custom_shared_drafts($query) {
    if(!is_admin()) return;
    $screen = get_current_screen();
    if($screen->base != "posts_page_shareadraft/shareadraft") return;
    $query->set('post_type',array('post','article'));
}
