<a href="<?php the_permalink(); ?>" class="article-block">
<img src="<?php if(has_post_thumbnail()){ the_post_thumbnail_url('medium', '');}else{echo get_bloginfo( 'stylesheet_directory' ) .'/img/placeholder.png';} ?>"/>
<h1 class="title"><?php the_title(); ?></h1>

<?php
the_excerpt();
?>

</a>