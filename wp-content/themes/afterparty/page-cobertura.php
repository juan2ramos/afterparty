<?php get_header() ?>

    <div class="Coverage">

        <h2>Cobertura</h2>

        <p> Desde la calle <span>100</span> hasta la <span>170</span>, entre la <span>avenida 7</span> y <span>autopista norte</span>.</p>
    </div>

    <section id="map-canvas"></section>
<?php wp_enqueue_script('GoogleMaps', 'http://maps.googleapis.com/maps/api/js?sensor=false&#038;ver=1.0', array('jquery'), 1, false); ?>
<?php wp_enqueue_script('GoogleMapsStyle', get_template_directory_uri() . '/assets/js/styleMap.js', array('jquery'), 1, false); ?>
<?php get_footer() ?>