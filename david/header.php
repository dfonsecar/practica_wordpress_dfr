<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php bloginfo( 'name' ); ?>
    </title>
  </head>
  <?php wp_head(); ?>
  <body>
    <div class="container">
      <header class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php wp_nav_menu( array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                'add_li_class'  => 'nav-item' ,
                'link_class' => 'nav-link '
                )  ); ?>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>