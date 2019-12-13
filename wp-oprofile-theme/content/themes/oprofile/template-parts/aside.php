<div class="button_container" id="toggle">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </div>
    <div class="overlay" id="overlay">
      <!-- <nav class="overlay-menu">
        <ul>
          <li ><a href="#homepage">Homepage</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#projets">Projets</a></li>
          <li><a href="#exemple">Exemple</a></li>
          <li><a href="#contact">Contact</a></li>
          
        </ul>
      </nav> -->

<?php 

    $menu = wp_nav_menu([
      'theme_location' => 'home', // identifiant de l'emplacement de menu (déclaré dans functions.php)
      'container' => 'nav', // on souhaite une <nav> comme container (par défaut -> <div>)
      'container_class' => 'overlay-menu', // on souhaite que notre container ai la classe 'navigation'
      'echo' => false // on ne souhaite pas afficher le menu (son code HTML), mais seulement le retourner
    ]);

    echo $menu;

?>
         <div class="social">
          <a target="blank" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="blank" href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a target="blank" href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a target="blank" href="http://www.github.com"><i class="fa fa-github" aria-hidden="true"></i></a>
          <a target="blank" href="http://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
    </div>