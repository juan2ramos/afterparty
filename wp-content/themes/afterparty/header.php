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
            <li><a href="">Promociones</a></li>
            <li><a href="">Productos</a></li>
            <li><a href="">Cobertura</a></li>
            <li><a href="">Nuestros servicios</a></li>
            <li><a href="">Contacto</a></li>
            <li><a href="tel:031255555"><span class="Nav-call">Haz clic y llama 2 555 555</span></a></li>
            <li class="Nav-social"><a href=""><span class="icon-facebook"></span></a></li>
            <li class="Nav-social"><a href=""><span class="icon-twitter"></span></a></li>
            <li class="Nav-social"><a href=""><span class="icon-instagram"></span></a></li>
        </ul>
    </nav>
</header>
<main>
