<?php

function yoo_pre_get_posts( $query ) {
    if ( $query->is_main_query()  && ! is_admin() ) {
        if ( $query->is_post_type_archive( 'partner' ) ) {
            $query->set( 'posts_per_page', 100 );
            $query->set( 'orderby', 'title' );
            $query->set( 'order', 'ASC');
        }
    }
}

add_action( 'pre_get_posts', 'yoo_pre_get_posts' );
