<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="content-container">
<h1 class="title"><?php echo get_bloginfo( 'name' ); ?></h1>
<div class="frontpage-container">
    <div class="frontpage-text"><?php the_field('frontpage', 2); ?></div>
        <div class="frontpage-articles">
            <h2 style="margin: 0 0 1rem 0;">Updates</h2>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-blog', get_post_format() );
			endwhile; endif;
            ?>
            </div>
    </div>
    </div>
<?php get_footer(); ?>