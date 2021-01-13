<?php /* 
Template Name: Stories Page 
Template Post Type: page

*/ ?>
<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="content-container">
<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; endif;
	
			?>

			<div class="story-container">
			<?php 
			  
			  $args = array( 'post_type' => 'story'
				 
			  );
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();

			  ?><a href="<?php the_permalink(  ); ?>" class="story-card">
					 <?php 
					 if(get_the_post_thumbnail()){
					 the_post_thumbnail( );}
					 else{
						 ?>
						 <img src="<?php echo get_stylesheet_directory_uri().'/img/placeholder_story.png'; ?>"/>
						 <?php
					 } ?> 
				  <span><?php the_title(); ?></span>
				  <?php the_excerpt(  ); ?></a><?php

			endwhile;
			  ?>
			</div>
			</div>
			
        <?php get_footer(); ?>