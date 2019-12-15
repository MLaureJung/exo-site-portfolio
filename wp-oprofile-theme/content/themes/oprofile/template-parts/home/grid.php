
<?php

  $args = [
    'post_type' => 'post',
    'posts_per_page' => 6,
    'tag' => 'grille',
    'order' => 'relevance'
  ];

$wpqueryArticles = new WP_Query($args);

?>
    <section class="grids">
      <?php if ($wpqueryArticles->have_posts()) : while ($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post(); 
      $cats =  get_the_category();
        $cat = $cats[0];?>
        <div class="grid">
          <div class="grid__title">
          <div class="grid__button">
            <i class="fa fa-<?= $cat->slug; ?>  " aria-hidden="true"></i>
          </div>
            <h3><?php the_title(); ?></h3>
          </div>
          <div class="grid__content">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </section>