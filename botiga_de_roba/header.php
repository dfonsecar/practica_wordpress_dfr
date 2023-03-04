<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo( 'name' ); ?>
    </title>
</head>
<?php wp_head(); ?>
<body>
    <div class="container">
        <header class="row">
        <nav class="navbar fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed top</a>
  </div>
  <?php wp_nav_menu( array(
            'menu' => 'primary',
            'theme_location' => 'primary',
            'container' => 'ul',
            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
            'add_li_class'  => 'nav-item' ,
            'link_class' => 'nav-link '
        )  ); 
    ?>
</nav>