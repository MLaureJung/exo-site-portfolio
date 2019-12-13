<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section id="homepage" class="intro" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
      <div class="intro__container" >
        <h2 class="intro__title"><?php the_title(); ?></h2>
        <div class="intro__content"><?php the_content(); ?></div>
        <div class="intro__buttons">
          <a href="#blog" class="intro__button--moreinfo">En savoir plus <span>➜</span></a>
          <a href="#contact" class="intro__button--contact">Contact <span>➜</span></a>
        </div>
      </div>
    </section>
<?php endwhile; endif; ?>