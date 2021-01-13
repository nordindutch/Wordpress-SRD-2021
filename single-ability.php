<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="content-container">
	<div class="ability-container">
			<?php
	if(get_field('descriptions')['ability_description']){
		$desc = get_field('descriptions');
		$mana = get_field('mana');
		$term_obj_list = get_the_terms( $post->ID, 'taxonomy' );
		?>
		
		<div style="width: 100%;background-color: unset;border: none;box-shadow:none;transform:none" class="ability <?php echo  $tax->name; ?>">
		<h1><?php the_title(); ?></h1>
		<div class="ability-stats">
			<span class="mana"><?php if($mana['levels'] == 1){ echo  $mana['mana_cost_level_1'].' Mana'; }elseif($mana['levels'] == 2){echo  $mana['mana_cost_level_1'].' / '.$mana['mana_cost_level_2'].' Mana';} else{echo  $mana['mana_cost_level_1'].' / '.$mana['mana_cost_level_2'].' / '.$mana['mana_cost_level_3'].' Mana';} ?></span>
			<span style="text-align: center; padding: 0 2rem;font-weight: black;border-left: 1px solid black; border-right: 1px solid black">Tier: <?php echo $mana['tier']; ?></span>
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
		</div><?php
	}
			?>
			</div>
</div>
        <?php get_footer(); ?>