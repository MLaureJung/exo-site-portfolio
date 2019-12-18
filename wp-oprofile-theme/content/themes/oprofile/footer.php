<?php if( ! get_theme_mod( 'oprofile_footer_display' ) ) : ?>

<?php $color = get_theme_mod('oprofile_footer_background'); ?>
  
  <section id="contact" class="contact" style="background:<?= $color; ?>">


    <?php echo do_shortcode('[contact-form-7 id="48" title="Contact form 1"]'); ?>
      <!-- <form action="" method="get" class="form">
        <div class="form__responsive">
          <div class="form__input">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
          </div>
          <div class="form__input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
          </div>
        </div>
        <div class="form__input">
          <label for="message">Message</label>
          <textarea name="user_message" id="message"></textarea>
        </div>
        <div class="form__submit">
          <button type="submit" >Envoyer</button>
        </div>
      </form> -->
      <div class="details">
        <?php if (get_theme_mod('oprofile_footer_email')) : ?>

          <?php $email = get_theme_mod('oprofile_footer_email'); ?>

          <div class="details__email">
            <div class="details__email--button">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="details__email--email">
              <h4>Email</h4>
              <h5><?= $email; ?></h5>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_theme_mod('oprofile_footer_num')) : ?>
          <?php $number = get_theme_mod('oprofile_footer_num'); ?>

          <div class="details__phone">
            <div class="details__phone--button">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="details__phone--number">
              <h4>Téléphone</h4>
              <h5><?= $number; ?></h5>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_theme_mod('oprofile_footer_address')) : ?>

          <?php
          // https://www.php.net/manual/fr/function.nl2br.php    
          $address = nl2br(get_theme_mod('oprofile_footer_address')); ?>


          <div class="details__address">
            <div class="details__address--button">
              <i class="fa fa-home" aria-hidden="true"></i>
            </div>
            <div class="details__address--number">
              <h4>Adresse</h4>
              <h5><?= $address; ?></h5>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </section>
    <?php endif; ?>



  </main>
  
 
  <?php

get_template_part('template-parts/aside');
wp_footer();

?>

  <script src="js/app.js"></script>
</body>
</html>
