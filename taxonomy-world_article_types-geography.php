<?php get_header(); ?>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<div class="content-container">

  <h1>Realms of Solaria</h1>
      <?php
      $args = array(
        'post_type' => 'world_article',
        'posts_per_page' => -1,
        'tax_query' => array(
          array (
              'taxonomy' => 'world_article_types',
              'field' => 'realms',
              'terms' => 15,
          )
      ),
    );
    $realms = new WP_Query($args);
    if($realms->have_posts()){

      while($realms->have_posts()){
        $realms->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="article-block">
          
          <h2 class="title"><?php the_title(); ?></h2>
          <?php $eras = wp_get_post_terms($post->ID, 'timelines',array( 'fields' => 'all' ) ); 
          foreach ($eras as $era){
            ?>
            <span class="era"><?php echo $era->name; ?></span>
            <?php
          }
          ?>

        </a>
        <?php
      }

    }
    wp_reset_postdata();

      ?>
 

  <h1>Continents of Solaria</h1>
      <?php
      $args = array(
        'post_type' => 'world_article',
        'posts_per_page' => -1,
        'tax_query' => array(
          array (
              'taxonomy' => 'world_article_types',
              'field' => 'continents',
              'terms' => 18,
          )
      ),
    );
    $realms = new WP_Query($args);
    if($realms->have_posts()){

      while($realms->have_posts()){
        $realms->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="article-block">
          
          <h2 class="title"><?php the_title(); ?></h2>
          <?php $eras = wp_get_post_terms($post->ID, 'timelines',array( 'fields' => 'all' ) ); 
          foreach ($eras as $era){
            ?>
            <span class="era"><?php echo $era->name; ?></span>
            <?php
          }
          ?>

        </a>
        <?php
      }

    }

    wp_reset_postdata();
      ?>
        <h1>Prominent Locations</h1>
      <?php
      $args = array(
        'post_type' => 'world_article',
        'posts_per_page' => -1,
        'tax_query' => array(
          array (
              'taxonomy' => 'world_article_types',
              'field' => 'prominent-locations',
              'terms' => 19,
          )
      ),
    );
    $realms = new WP_Query($args);
    if($realms->have_posts()){

      while($realms->have_posts()){
        $realms->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="article-block">
          
          <h2 class="title"><?php the_title(); ?></h2>
          <?php $eras = wp_get_post_terms($post->ID, 'timelines',array( 'fields' => 'all' ) ); 
          foreach ($eras as $era){
            ?>
            <span class="era"><?php echo $era->name; ?></span>
            <?php
          }
          ?>

        </a>
        <?php
      }

    }

    wp_reset_postdata();
      ?>

            </div>
        <?php get_footer(); ?>