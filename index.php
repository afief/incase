<?php get_header(); ?>



<div id="main">



<div id="content">



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



<div class="commentstext">

<?php _e('Posted on ', 'newbar'); ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?></a><?php _e(' By ', 'newbar'); ?><?php the_author_posts_link(); ?><div class="delimiter"></div>

<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', ''); ?> <?php _e('Categories: ', 'newbar'); ?><?php the_category(', '); ?> <?php the_tags(); ?></div>



</div>



<?php endwhile; else: ?>



<div class="divwrapper">



<p><?php _e('Sorry, no posts matched your criteria.', 'newbar'); ?></p>



</div>



<?php endif; ?>



<h4 class="pagi">

<?php _e('Page Navigation ', 'newbar'); ?><?php posts_nav_link(' &#183 ', 'Previous', 'Next'); ?>

</h4>



</div>



<?php get_sidebar(); ?>



</div>



<div class="delimiter"></div>
<div id="container2">
<div id="footer">

<div id="footer-sidebar">        
            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
            <?php } ?>
    </div>

<div class="footer-copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | Ddarmawan@upi.edu/diestry2005@yahoo.com, Mobile: +6281320341199.</div>
<div class="toplink"><a href="#"></a></div>

</div>
</div>


</div>



<?php get_footer(); ?>