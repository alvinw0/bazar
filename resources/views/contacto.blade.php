<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/hola1.css">
    <link rel="stylesheet" type="text/css" href="css/galeria.css">
    <title>Contacto | Bazar</title>
    <meta name="viewport" content="width=device-witdh, user-scalable=no, initial-scale=1.0, maximum-scalable=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="icon/styles.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/contacto.css">
  </head>
  <body>

    <header class="main-header">
      <div class="container container--flex">
        <div class="logo-container column column--50">
          <h1 class="logo">Select the desired products</h1>
        </div>
        <div class="main-header__contactInfo column column--50">
          <p class="main-header__contactInfo__phone">
            <span class="icon-phone">961-214-0291</span>
          </p>
          <p class="main-header__contactInfo__address">
            <span class="icon-map-pin-streamline">Tuxtla Gutierrez, Chiapas, Mexico</span>
          </p>
      </div>
    </div>
    </header>
    <nav class="main-nav">
      <div class="container container--flex">
        <span class="icon-bars" id="btnmenu"></span>
        <ul class="menu" id="menu">
          <li class="menu__item"><a href="/inicio" class="menu__link">Inicio</a></li>
          <li class="menu__item"><a href="/nosotros" class="menu__link">Nosotros</a></li>
          <li class="menu__item"><a href="/catalago" class="menu__link">Catalago</a></li>
          <li class="menu__item"><a href="/contacto" class="menu__link menu__link--select">Venta</a></li>
          <li class="menu__item"><a href="{{ route('login') }}" class="menu__link">Login</a></li>
        </ul>
        <div class="social-icon">
          <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
          <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
          <a href="" class="social-icon__link"><span class="icon-envelope"></span></a>
      </div>
    </nav>
    <section class="banner">
      <img src="img/banner-contact.png" alt="" class="banner__img">
      <div class="banner__content">Dejanos un mensajes</div>
    </section>

    <main class="main">
      <section class="group contact">
        <h2 class="group__title">Contáctenos</h2>
        <div class="container container--flex">
          <div class="contact-information column column--50">
            <h3 class="column__title">Información de contacto</h3>
            <p class="column__txt">Somos una pagina en donde podrá seleccionar los productos buscados, donde encontrará todo tipo de producto que
            busque en nuestro catalago o en nuestra pagina web.</p>
            <p class="column__txt"><span class="icon-phone"></span>Telefono 1:961-214-0291</p>
            <p class="column__txt"><span class="icon-phone"></span>Telefono 2:555-555-555</p>
            <p class="column__txt"><span class="icon-map-pin-streamline"></span>Tuxtla Gutierrez, Chiapas, Mexico</p>
            <p class="column__txt"><span class="icon-envelope"></span>aberlaycarto@gmail.com</p>
            <div class="social-icon">
              <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
              <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
              <a href="" class="social-icon__link"><span class="icon-envelope"></span></a>
            </div>
          </div>
          <form action="" method="post" class="formulario column column--50">
            <label for="" class="formulario__label">Nombre:</label>
            <input type="text" class="formulario__input-txt" name="nombre">
            <label for="" class="formulario__label">Correo:</label>
            <input type="text" class="formulario__input-txt" name="correo">
            <label for="" class="formulario__label">Teléfono:</label>
            <input type="text" class="formulario__input-txt" name="telefono">
            <label for="" class="formulario__label">Mensaje:</label>
            <textarea name="mensaje" id="" cols="40" rows="10" class="formulario__textarea">
            </textarea>
            <input type="submit" class="btn formulario__btn" value="Enviar">
          </form>
        </div>
      </section>
    </main>

    <footer class="main-footer">
      <div class="container container--flex">
        <div class="column column-33">
          <h2 class="column__title">¿Por que visitarnos?</h2>
          <p class="column__txt">Somos una pagina en donde podrá seleccionar los productos buscados, donde encontrará todo tipo de producto que
          busque en nuestro catalago.Entre los jóvenes, lo de hoy son los bazares, pues hay una interacción más padre entre ellos y por supuesto con el resto del público al que quieren dirigirse. Los bazares se prestan a
          la venta de ropa, accesorios, chácharas y alimentos, por decir algo, todo a un precio económico.</p>
        </div>
        <div class="column column-33">
          <h2 class="column__title">Contactos</h2>
          <p class="column__txt">Tuxtla Gutierrez, Chiapas, Mexico</p>
          <p class="column__txt">Telefono:961-214-0291</p>
          <p class="column__txt">aberlaycarto@gmail.com</p>
        </div>
        <div class="column column-33">
          <h2 class="column__title">Siguenos en redes sociales</h2>
          <p class="column__txt"><a href="" class="icon-facebook">facebook</a></p>
          <p class="column__txt"><a href="" class="icon-twitter">Twitter</a></p>
          <p class="column__txt"><a href="" class="icon-youtube-play">Visita nuestro canal</a></p>
        </div>
        <p class="copy">&copy;Select Chido | Todos los derechos son reservados</p>
      </div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/nuevo.js" ></script>
  </body>
</html>
