<?php

function fbThumb() {
    if ( is_single() ) {
        if (has_post_thumbnail()) {
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name');
            $thumbURL = $thumb[0];
            
            $tiitre = get_the_title();
            
            echo '
                <meta property="og:image" content="'.$thumbURL.'" />
                <meta property="og:title" content="'.$tiitre.'" />
            ';
        }
    }
}

add_action( 'wp_head', 'fbThumb' );