<?php $nbPosts = wp_count_posts(); 
var_dump($nbPosts);
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <section id="blog" class="posts">
      <div class="posts__row--top">
      <article class="post" style=" background-image: url('/images/montagne.jpg'); background-size: cover;">
        <div class="post__title">
          <h3>Winter view</h3>
        </div>
        <div class="post__content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut modi omnis sed beatae obcaecati eaque. Minima tempora sequi repellendus, deserunt perspiciatis distinctio reiciendis. Labore accusamus, atque repellat voluptatum non mollitia quo repudiandae debitis sed. Voluptate soluta magni exercitationem corrupti a aperiam tempora animi quam voluptas natus, eligendi expedita at ea, repellendus asperiores. Earum maxime magnam necessitatibus, voluptatum provident cumque tempora, libero esse possimus minima exercitationem quo perspiciatis tenetur, dolor ipsum veritatis doloribus deleniti quis atque magni officia similique debitis labore?
        </div>
      </article>
  </section>
  <?php endwhile; endif; ?>