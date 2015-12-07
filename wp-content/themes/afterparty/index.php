<?php get_header(); ?>
    <div id="owl-demo" class="owl-carousel">
        <div><img src="<?php bloginfo('template_url') ?>/assets/images/slide/banner.jpg"></div>
        <div><img src="<?php bloginfo('template_url') ?>/assets/images/slide/banner2.jpg"></div>
    </div>
    <section class="TopSellers">

        <h2>Productos más vendidos</h2>
        <hr class="Line-hr">
        <ul class="Grid-products">
            <li>
                <figure>
                    <img
                        src="<?php bloginfo('template_url') ?>/assets/images/licores/big_aguardiente-antioqueno-sin-azucar.png"
                        alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>

                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span class="icon-cart"></span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img
                        src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza-el-correo-de-la-noche-en-lata.png"
                        alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza_poker_lata_six_pack.png"
                         alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img
                        src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza-el-correo-de-la-noche-en-lata.png"
                        alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza_poker_lata_six_pack.png"
                         alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img
                        src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza-el-correo-de-la-noche-en-lata.png"
                        alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza_poker_lata_six_pack.png"
                         alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>
            <li>
                <figure>
                    <img src="<?php bloginfo('template_url') ?>/assets/images/licores/cerveza_poker_lata_six_pack.png"
                         alt="">
                    <figcaption>
                        <a href="">Agregar al Carrito</a>
                        <a href="">+ Info</a>
                    </figcaption>
                </figure>
                <div>
                    <h3>Cerveza Poker en lata </h3>

                    <p>Six pack de cerveza</p>
                    <b>$20.000 <span>carrito</span></b>
                </div>
            </li>

        </ul>
    </section>
<?php wp_enqueue_style('owlStyle', get_template_directory_uri() . '/assets/css/owl.carousel.css'); ?>
<?php wp_enqueue_style('owlStyleTrans', get_template_directory_uri() . '/assets/css/owl.transitions.css'); ?>
<?php wp_enqueue_script('owlJs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('owlJsInit', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), 1, false); ?>
<?php get_footer(); ?>