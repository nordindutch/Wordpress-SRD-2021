<?php /* 
Template Name: Background Page 
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
			?>
			
			<?php 
			if(have_rows('background_group')):?>
				<div class="background-container"><?php
				while(have_rows('background_group')): the_row();
				?>
					<h2><?php echo get_sub_field('group_title'); ?></h2>
					<div><?php echo get_sub_field('group_description'); ?></div>
					<table style="width:100%">
						<thead>
							<tr>
								<th style="text-align: left">Name</th>
								<th style="text-align: left">Core Skill</th>
								<th style="text-align: left">Skill Points</th>
								<th style="text-align: left">Specializations</th>
								<th style="text-align: center">Circles</th>
								<th style="text-align: left">Stats</th>
								<th style="text-align: left">Requirements</th>
							</tr>
						</thead>
						<tbody>
					<?php if(have_rows('backgrounds')):
							while(have_rows('backgrounds')): the_row();
								?>
								<tr>
									<td><?php echo get_sub_field('name'); ?></td>
									<td><?php echo get_sub_field('core_skill'); ?></td>
									<td><?php echo get_sub_field('skill_points'); ?></td>
									<td><?php echo get_sub_field('specialization'); ?></td>
									<td style="text-align: center"><?php echo get_sub_field('circles'); ?></td>
									<td><?php if(get_sub_field('stats')){echo get_sub_field('stats');}else{echo '-';} ?></td>
									<td><?php if(get_sub_field('requirements')){echo get_sub_field('requirements');}else{echo '-';} ?></td>
								</tr>
								<?php
							endwhile;
						endif;

					?>
					</tbody>
					</table>
				<?php
				endwhile;
				?></div><?php
			endif;
			?>
</div>
        <?php get_footer(); ?>