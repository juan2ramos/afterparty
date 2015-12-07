<?php
/*
Description: The Header
Theme: AfterPartyBogota
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php the_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!---- Favicon -- -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/assets/images/favicon/favicon-16x16.png">


    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">

<header class="Header">
    <figure class="Header-logo">
        <img src="<?php bloginfo('template_url') ?>/assets/images/after-party-logo.png"  alt="Correo de la noche After party">
    </figure>
    <div class="Header-callToAction">
        <a href="tel:031255555">
            <div>¡LLAMA YA! <span>2 555 555</span></div>
        </a>
        <div>ó</div>
        <a href="#">
            <div>¡HAZ TU PEDIDO! <span>ONLINE</span></div>
        </a>
    </div>
    <hr class="Line-hr">
    <b class="Header-slogan">TODO LO QUE NECESITAS. TODA LA NOCHE</b>
    <div class="Nav-button"><span></span><span></span><span></span></div>
    <nav class="Nav">
        <ul class="Nav-ul">
            <li><a href="<?php bloginfo('url') ?>">Inicio</a></li>
            <li><a href="<?php bloginfo('url') ?>/promociones">Promociones</a></li>
            <li><a href="<?php bloginfo('url') ?>/productos">Productos</a></li>
            <li><a href="<?php bloginfo('url') ?>/cobertura">Cobertura</a></li>
            <li><a href="<?php bloginfo('url') ?>/contacto">Contacto</a></li>
            <li><a href="tel:031255555"><span class="Nav-call">Haz clic y llama 2 555 555</span></a></li>
            <li class="Nav-social"><a href=""><span class="icon-facebook"></span></a></li>
            <li class="Nav-social"><a href=""><span class="icon-twitter"></span></a></li>
            <li class="Nav-social"><a href=""><span class="icon-instagram"></span></a></li>
        </ul>
    </nav>
</header>
<main class="<?php echo $post->post_name ?>">
