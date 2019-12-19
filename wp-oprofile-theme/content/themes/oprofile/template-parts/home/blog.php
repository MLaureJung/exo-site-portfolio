<?php
$args = [
  'post_type' => 'post',
  'posts_per_page' => 6,
  'tag' => 'blog',
  'orderby' => 'date'
];

$wpqueryArticles = new WP_Query($args);
?>
<section id="blog" class="posts">
  <?php if ($wpqueryArticles->have_posts()) : while ($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post(); ?>
    <article class="post" style=" background-image: url(<?php the_post_thumbnail_url(); ?>); background-size: cover;">
      <div class="post__overlay"></div>  
      <div class="post__title">
          <h3><?php the_title(); ?></h3>
          <?php do_action('mon_hook_custom'); ?>
        </div>
        <div class="post__content">
          <?php the_content(); ?>
        </div>
    </article>
   <?php endwhile; endif; ?>
</section>

<?php if (get_theme_mod('showcase-page')) : ?>
          <?php $page = get_theme_mod('showcase-page'); ?>

          <section>
            <h1 style="background: red"><?= get_the_title($page); ?></h1>
          </section>

<?php endif; ?>