<h1 class="title"><?php the_title(); ?></h1>
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
<?php the_content(); ?>