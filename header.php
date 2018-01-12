<!DOCTYPE html>
<html lang="de">

  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="author" content="">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="/">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

	<link href="<?php echo get_template_directory_uri(); ?>/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/littlehelpers.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

</head>

<body>
	
<nav id="navbar">
	<div class="logo"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
	</div>
</nav>


<div class="hamburger" id="navHamburger">
	<span class="line"></span>
	<span class="line"></span>
	<span class="line"></span>
</div>

<div id="navOverlayWrapper" class="transition">
	<div id="navOverlay">

<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo '<div>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</div> ';

} ?>

	</div>
</div>


