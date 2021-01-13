<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<div class="content-container">
<h1><?php echo is_tax('world_article_types', 'world_article_types-realm'); ?></h1>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
            </div>
        <?php get_footer(); ?>