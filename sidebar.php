<?php if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
}
?>
<div class="page-container">
<?php 
$args =[
    'title_li' => '',
];
wp_list_pages($args); ?>

<li class="pagenav">
<span class="world-articles rules expand">The World Of Solaria</span>
<ul>
<?php
$terms = get_terms(
    array(
        'taxonomy'   => 'world_article_types',
        'parent' => 0,
        'hide_empty' => true,
    )
);
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) ).'/';
    foreach ( $terms as $term ) { ?>
        <li <?php if($current_url === get_term_link( $term ) ){echo 'class="current_page_item"';} ?>><a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name;?>
        </a>
        <?php $children = get_term_children($term->term_id, 'world_article_types');
        
        if(count($children) > 0){
            ?><ul class="children"><?php
        foreach ($children as $child){
            $sub = get_term_by( 'id', $child, 'world_article_types' )
            ?>
            
            <li <?php if($current_url === get_term_link( $child ) ){echo 'class="current_page_item"';} ?>><a href="<?php echo esc_url( get_term_link( $sub ) ) ?>">
            <?php echo $sub->name; ?>
        </a></li>
            <?php
        }
        ?></ul><?php
        }
        ?>
         
        </li><?php
    }
}
?>
</ul>
</li>
<?php

$args =[
    'post_type' => 'rules',
    'title_li' => '<span class="rules-tab rules expand">Game Rules</span>',
];
wp_list_pages($args); ?>

    </div>
