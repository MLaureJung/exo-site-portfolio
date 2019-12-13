<?php
$args = [
  'post_type' => 'post',
  'posts_per_page' => 6,
  'tag' => 'blog',
  'order' => 'ASC'
];

$wpqueryArticles = new WP_Query($args);
?>
<section id="blog" class="posts">
  <?php if ($wpqueryArticles->have_posts()) : while ($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post(); ?>
    <article class="post" style=" background-image: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;">
      <div class="post__overlay"></div>  
      <div class="post__title">
          <h3><?php the_title(); ?></h3>
        </div>
        <div class="post__content">
          <?php the_content(); ?>
        </div>
    </article>
   <?php endwhile; endif; ?>
</section>