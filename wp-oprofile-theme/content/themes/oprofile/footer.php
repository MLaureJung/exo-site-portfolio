
  
  <section id="contact" class="contact">
      <form action="" method="get" class="form">
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
      </form>
      <div class="details">
        <div class="details__email">
          <div class="details__email--button">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="details__email--email">
            <h4>Email</h4>
            <h5>kaplan@oprofile.ocl</h5>
          </div>
        </div>
        <div class="details__phone">
          <div class="details__phone--button">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </div>
          <div class="details__phone--number">
            <h4>Téléphone</h4>
            <h5>+33 6 78 90 12 34</h5>
          </div>
        </div>
        <div class="details__address">
          <div class="details__address--button">
            <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="details__address--number">
            <h4>Adresse</h4>
            <h5>223 allée de la gare <br/>
            44000 Nantes</h5>
          </div>
        </div>
      </div>
    </section>


  </main>
  
 
  <?php

get_template_part('template-parts/aside');
wp_footer();

?>

  <script src="js/app.js"></script>
</body>
</html>
