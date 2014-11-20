<?php get_header(); ?>

<div id="main">

<div id="content">

<div class="postwrapper">

<h1><?php _e('404 Error', 'newbar'); ?></h1>

	<p><?php _e('We cannot seem to find what you were looking for.', 'newbar'); ?></p>
	<p><?php _e('Maybe we can still help you.', 'newbar'); ?></p>

	<ul>
		<li><?php _e('You can search our site using the form provided below.', 'newbar'); ?>

<p><?php get_search_form(); ?></p>

</li>
	</ul>

<?php _e('Click', 'newbar'); ?> <a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('here', 'newbar'); ?></a> <?php _e('to return to the main page.', 'newbar'); ?>

</div>

</div>

<?php get_sidebar(); ?>

</div>

<div class="breaker"></div>

</div>

<?php get_footer(); ?>