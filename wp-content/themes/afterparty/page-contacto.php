<?php get_header() ?>
<div class="Contact-questions">
    <p>¿Necesitas ayuda acerca de un producto o de su pedido?</p>

    <p>¿Tienes alguna recomendación o sugerencia sobre nuestro servicio?</p>
</div>
<section class="CallUs">
    <div class="Callus-email">
        <h3>Por E-mail</h3>
        <a href="mailto:hola@afterpartybogota.com">hola@afterpartybogota.com</a>
    </div>
    <div class="Callus-phone">
        <h3>Por Teléfono</h3>
        <a href="tel:031255555">+(57) 1 2 55 55 55</a>
    </div>
</section>
<form action="" class="Contact-form">
    <div class="Contact-formContent">
        <div class="inline">
            <label for="name">Nombre <em>*</em></label>
            <input type="text" name="name">
        </div>
        <div class="inline">
            <label for="name">Apellido</label>
            <input type="text" name="apellido">
        </div>
    </div>
    <div class="Contact-formContent">
        <label for="email">E-mail <em>*</em></label>
        <input type="email" name="email">
    </div>
    <div class="contact-formContent">
        <label for="mensaje">Mensaje <em>*</em></label>
        <textarea name="mensaje" cols="30" rows="10"></textarea>
        <small>campos requeridos</small>
        <em>*</em>
    </div>
    <button> Enviar </button>
</form>
<?php get_footer() ?>

