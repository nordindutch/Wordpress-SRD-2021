<h1 class="title"><?php the_title(); ?></h1>
<div class="blog-page">
<div class="infobox">
<h3><?php the_title(); ?></h3>
<?php if(has_post_thumbnail()){ the_post_thumbnail();} ?>
<?php
if(have_rows('infobox')){
	?>
	<div class="infobox-content">
	<?php
	while(have_rows('infobox')){
		the_row();
		?>
		<div class="infobox-item">
		<span class="label"><?php echo get_sub_field('label'); ?></span>
		<span class="content"><?php echo get_sub_field('content'); ?></span>

		</div>
		<?php
	}
	?>
</div>
	<?php
}

?>
</div>
<?php the_field('introduction')?>
 <?php the_content(); ?>

</div><!-- /.blog-post -->