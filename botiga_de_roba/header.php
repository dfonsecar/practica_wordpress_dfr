<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>>
    <link rel="stylesheet" href="style.css"/>
    <title>Botiga
    </title>
</head>
<body>
    <body class="container-xxl">
        <header class="header">
        <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-xxl">
        <a class="navbar-brand" href="index.html"><i class="web-icon"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php wp_nav_menu( array(
            'menu' => 'primary',
            'theme_location' => 'primary',
            'container' => 'ul',
            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
            'add_li_class'  => 'nav-item' ,
            'link_class' => 'nav-link '
        )  ); 
    ?>
        </div>
    </nav>
</header>