<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="content-container">
			<?php
			$pax = get_the_title();
			if(have_rows('chapter')){
				
				$i = 0;
				while(have_rows('chapter')){
					the_row();
					?> 
					<?php 
					if($pax == get_sub_field('chapter_name') && $i == 0){
						?>
						<h1 class="title"><?php echo $pax; ?></h1>
						<?php
						$i++;
					}
					else{
						if($i == 0){
							?>
							<h1 class="title"><?php echo $pax; ?></h1>
							<?php
							$i++;
						}
						?>
						<h2><?php echo get_sub_field('chapter_name');  ?></h2>
						<?php
					}
					
					?>
					<div><?php echo get_sub_field('the_story'); ?></div>
					
					<?php
				}
			}
			?>
            </div>
        <?php get_footer(); ?>