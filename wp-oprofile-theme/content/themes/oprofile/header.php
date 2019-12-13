<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webpack</title>
  <link rel="stylesheet" href="css/style.css" />

  <?php wp_head(); ?>

</head>
<body>
  <main id="wrapper">
    <header class="header">
      <h1>
        <a href="#homepage" class="header__logo">oprofile</a>
      </h1>
      <div class="header__social">
        <ul >
          <li >
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </header>