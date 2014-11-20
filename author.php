<?php get_header(); ?>

<div id="main">

<div id="content">

<div class="pagiwrapper">

<?php printf( __( 'Showing all posts by %s', 'newbar' ), get_the_author() ); ?>

<h4 class="delimiter">
<?php posts_nav_link(' &#183 ', 'Previous Page', 'Next Page'); ?>
</h4>

</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="postwrapper">

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('category-thumb', array('class' => 'alignnone')); ?>
   </a>
 <?php endif; ?>

<?php the_content('Continue Reading &#8594;'); ?>

</div>

<div class="commentstext"><?php _e('Posted on ', 'newbar'); ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?></a><?php _e(' By ', 'newbar'); ?><?php the_author_posts_link(); ?><div class="delimiter"></div>
<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', ''); ?> <?php _e('Categories: ', 'newbar'); ?><?php the_category(', '); ?> <?php the_tags(); ?></div>

</div>

<?php endwhile; else: ?>

<div class="divwrapper">

<p><?php _e('Sorry, no posts matched your criteria.', 'newbar'); ?></p>

</div>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

</div>

<div class="delimiter"></div>

</div>

<?php get_footer(); ?>