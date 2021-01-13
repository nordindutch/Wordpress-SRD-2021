<?php /* 
Template Name: Hexmap Page 
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
	<div class="hex-container">
		<div class="hex-box c4 r1" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c3 r2" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c5 r2" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c4 r3" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c2 r3" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c6 r3" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c1 r4" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c3 r4" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c5 r4" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c7 r4" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c2 r5" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c4 r5" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c6 r5" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c1 r6" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c3 r6" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c5 r6" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c7 r6" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c2 r7" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c4 r7" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c6 r7" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c1 r8" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c3 r8" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c5 r8" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c7 r8" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c2 r9" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c4 r9" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c6 r9" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c1 r10" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c3 r10" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c5 r10" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c7 r10" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c2 r11" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c4 r11" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c6 r11" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c3 r12" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast">
					<h3>Dungeon of Testing</h3>
				</div>
			</div>
		</div>
		<div class="hex-box c5 r12" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
		<div class="hex-box c4 r13" >
			<div class="hex">
			</div>
			<div class="pillar">
				<div class="pillar-contrast"></div>
			</div>
		</div>
	</div>
</div>
			
        <?php get_footer(); ?>