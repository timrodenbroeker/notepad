<?php add_theme_support( 'post-thumbnails' ); 

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>