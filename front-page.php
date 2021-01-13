<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="content-container">
<h1 class="title"><?php echo get_bloginfo( 'name' ); ?></h1>
<div class="frontpage-container">
    <div class="frontpage-text"><?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-home', get_post_format() );
			endwhile; endif;
			?>
            </div>
        <div class="frontpage-articles">
            <h2 style="margin: 0 0 1rem 0;">Updates</h2>
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DSC',
            );
            $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); get_template_part( 'content-blog', get_post_format() );
            endwhile
            ?>
            </div>
    </div>
    </div>
<?php get_footer(); ?>