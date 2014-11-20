<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="wrapper">
<div id="container">
<div id="header">
<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="site-logo" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

<?php else : ?>
    
        <div class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></div>
        <div class='site-description'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'description' ); ?></a></div>
        <div class='site-description'><a style="font-size: x-large" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>Universitas Pendidikan Indonesia</a></div>
        <div class='site-description' style="text-align: left;"><a style="font-size: medium; text-align: left;" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>Jl. Dr. Setiabudhi No. 229, Isola, Sukajadi, Bandung. Telepon: +6222-013163. Mobile: +6281320341199. Email: Ddarmawan@upi.edu/diestry2005@yahoo.com</a></div>

<?php endif; ?>

</div>

</div>

<div id="container3">
<div class="navtop">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => 'wp_page_menu', 'container' => 'div', 'container_class' => 'navmenu', 'menu_class' => 'navmenu', 'show_home' => 'Home' ) ); ?>
</div>
</div>