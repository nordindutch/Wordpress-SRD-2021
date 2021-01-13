<?php /* 
Template Name: Destiny Page 
Template Post Type: rules

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
			$tax = get_term_by( 'term_taxonomy_id', get_field('ability_category'), get_query_var( 'taxonomy' ));
			?>
			
			<div class="ability-container">
				<h1><?php echo  $tax->name; ?></h1>
			<?php 
			  
			  $args = array( 'post_type' => 'ability', 'tax_query' => array(
				array(
				'taxonomy' => 'ability_category',
				'field' => 'term_id',
				'terms' => get_field('ability_category')
				 )
			  ));
			  $loop = new WP_Query( $args );
			  while ( $loop->have_posts() ) : $loop->the_post();
				if(get_field('descriptions')['ability_description']){
					$desc = get_field('descriptions');
					$mana = get_field('mana');
					$term_obj_list = get_the_terms( $post->ID, 'taxonomy' );
					?>
					
					<a target="_blank" href="<?php the_permalink(); ?>" class="ability <?php echo  $tax->name; ?>">
					<h2 data-tier="Tier: <?php echo $mana['tier']; ?>"><?php the_title(); ?></h2>
					<div class="ability-stats">
						<span class="mana"><?php if($mana['levels'] == 1){ echo  $mana['mana_cost_level_1'].' Mana'; }elseif($mana['levels'] == 2){echo  $mana['mana_cost_level_1'].' / '.$mana['mana_cost_level_2'].' Mana';} else{echo  $mana['mana_cost_level_1'].' / '.$mana['mana_cost_level_2'].' / '.$mana['mana_cost_level_3'].' Mana';} ?></span>
						<span class="type"><?php echo getTheTax(); ?></span>
					</div>
					<div class="ability-desc">
						<?php echo $desc['ability_description']; ?>
						<?php if($mana['levels'] == 1 || $mana['levels'] == 2){
							echo "<div class='ability-level-description'><span>".$mana['mana_cost_level_1']." Mana:</span>".$desc['description_level_1']."</div>";
							echo "<div class='ability-level-description'><span>".$mana['mana_cost_level_2']." Mana:</span>".$desc['description_level_2']."</div>";
						}
						elseif($mana['levels'] == 3){
							echo "<div class='ability-level-description'><span>".$mana['mana_cost_level_1']." Mana:</span>".$desc['description_level_1']."</div>";
							echo "<div class='ability-level-description'><span>".$mana['mana_cost_level_2']." Mana:</span>".$desc['description_level_2']."</div>";
							echo "<div class='ability-level-description'><span>".$mana['mana_cost_level_3']." Mana:</span>".$desc['description_level_3']."</div>";
						} 
							?>
					
					</div>
				<?php if($desc['requirements']['has_requirements'] == true){ ?><div class="ability-req"><?php echo $desc['requirements']['requirement_description']; ?></div><?php ;} ?>
					</a><?php
				}
			  endwhile;
			  ?>
			  </div>
            </div>
			
        <?php get_footer(); ?>