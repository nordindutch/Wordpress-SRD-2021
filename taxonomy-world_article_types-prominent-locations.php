<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<div class="content-container">
  <h1>Prominent Locations</h1>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-world', get_post_format() );
			endwhile; endif;
			?>
            </div>
        <?php get_footer(); ?>