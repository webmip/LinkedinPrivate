<?php
session_start();
 if(isset($_GET['lcs'])){
    $_SESSION['lc']=$_GET['lcs'];
 }
if(isset($_SESSION["lc"]) && !empty($_SESSION["lc"])){
	if($_SESSION["lc"] != "es"){
		$_SESSION["lc"] = $lc;
		header("location: index.php");
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LinkedInPrivate | Visualiza cualquier perfil</title>
    <meta name="description" content="View any profile linkedIn privately, without a trace and free for all. Use this new tool for lookup all the LinkedIn profiles." />
    <meta name="keywords" content="LinkedIn, Private, Contacts, Hacking, Tool" />
    <meta name="author" content="webmip" />
    
	<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../img/favicon/manifest.json">
	<meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="theme-color" content="#663fb5">
    
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@cg_sanchez">
	<meta name="twitter:site" content="@cg_sanchez">
	<meta name="twitter:title" content="LinkedInPrivate new FREE tool">
	<meta name="twitter:description" content="View any profile linkedIn privately, without a trace and free for all. Use this new tool for lookup all the LinkedIn profiles.">
	<meta name="twitter:image" content="https://linkedinprivate.com/rssimg.jpg">
 
	<meta property="og:title" content="LinkedInPrivate | See any profile">
	<meta property="og:site_name" content="LinkedIn Private">
	<meta property="og:url" content="https://linkedinprivate.com">
	<meta property="og:description" content="View any profile linkedIn privately, without a trace and free for all. Use this new tool for lookup all the LinkedIn profiles.">
	<meta property="fb:app_id" content="">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://linkedinprivate.com/rssimg.jpg" />
 
	<link rel="canonical" href="https://linkedinprivate.com"/>
	
	<link rel="stylesheet" href="../css/landio.css">
	
	
  </head>

  <body>

    <!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#start">
          <span class="icon-logo">
			<img src="../img/LinkedLogo.png"/>
		  </span>
          <span class="sr-only">LinkedInPrivate</span>
        </a>
        
        
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="en.php?lcs=en">EN&nbsp;<img src="../img/UK_flag.png" style="width: 50px;" /></a>
            </li>
            
          </ul>
        
      </div>
    </nav>

    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
        <h1 class="display-3">LinkedIn Private, See the Network.</h1>
        <h2 class="m-b-3">Visualiza cualquier perfil, <em>como si fuera de primer nivel, sin dejar rastro</em>.</h2>
        <a class="btn btn-secondary-outline m-b-1" href="#start" role="button"></span>BUSCAR PERFIL GRATIS</a>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="https://twitter.com/share?url=https://linkedinprivate.com&amp;text=Mira%20esta%20herramienta%20para%20LinkedIn&amp;hashtags=LinkedIn" target="_blank"><span class="icon-twitter"></span> 1024</a></li>
          <li class="nav-item"><a class="nav-link" href="http://www.facebook.com/sharer.php?u=https://linkedinprivate.com" target="_blank"><span class="icon-facebook"></span> 562</a></li>
          <li class="nav-item"><a class="nav-link" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://linkedinprivate.com" target="_blank"><span class="icon-linkedin"></span> 356</a></li>
        </ul>
      </div>
    </header>

    <!-- Intro
    ================================================== -->

    <section class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">Mira cualquier usuario de LinkedIn como si fuera tu amigo</h3>
        <p class="lead wp wp-2">No deja rastro, nuestro sitio actúa de intermediario. No guardamos registros</p>
        <img src="../img/banner.png" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>

    <!-- Features
    ================================================== -->

    <section class="section-features text-xs-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-key2 display-1"></span>
                <h4 class="card-title">Secreto</h4>
                <h6 class="card-subtitle text-muted">Es 100% anónimo</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-thunderbolt display-1"></span>
                <h4 class="card-title">Potente</h4>
                <h6 class="card-subtitle text-muted">Es 100% efectivo</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <span class="icon-heart display-1"></span>
                <h4 class="card-title">Rápido & Gratis</h4>
                <h6 class="card-subtitle text-muted">Para siempre</h6>
              </div>
            </div>
          </div>
        </div>
		<div class="row">
			<div class="card m-b-0">
              <div class="card-block">
                <p class="card-text">Nuestro sistema es responsable de hacer solicitudes de amistad al usuario que nos solicites, contamos con un potente motor con un gran número de usuarios que nos permite actuar como intermediario (proxy) entre el usuario y el contacto, y en pocos segundos / minutos te daremos una dirección URL para ver la página..</p>
              </div>
            </div>
		</div>
      </div>
    </section>

	<section class="section-pricing bg-faded text-xs-center">
      <div class="container">
        <h3>Planes premium</h3>
        <div class="row p-y-3">
          <div class="col-md-4 p-t-md wp wp-5">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Personal
              </div>
              <div class="card-block">
                <p class="card-title">Nuestro servicio puede ser utilizado por cualquier persona de forma gratuita para siempre (excepto para negocios).</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency"></sup>
                  <span class="pricing-box-price">Gratis</span>
                  <small class="text-muted text-uppercase">/siempre</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">100% Privado</li>
                <li class="list-group-item">No necesita tarjeta de crédito</li>
                <li class="list-group-item">Máx. 10 peticiones al mes</li>
              </ul>
              <a href="#start" class="btn btn-primary-outline">Usar ahora</a>
            </div>
          </div>
          <div class="col-md-4 stacking-top">
            <div class="card pricing-box pricing-best p-x-0">
              <div class="card-header text-uppercase">
                Professional
              </div>
              <div class="card-block">
                <p class="card-title">Para PYMES, selección de personal o investigadores</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">€</sup>
                  <span class="pricing-box-price">10</span>
                  <small class="text-muted text-uppercase">/Mes</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">100% privado</li>
                <li class="list-group-item">Hasta 5000 peticiones al mes</li>
                <li class="list-group-item">API para integrar con tu negocio</li>
                <li class="list-group-item">Prueba el plan gratis antes de comprar</li>
              </ul>
              <a href="#start" class="btn btn-primary">Prueba nuestro servicio</a>
            </div>
          </div>
          <div class="col-md-4 p-t-md wp wp-6">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Enterprise
              </div>
              <div class="card-block">
                <p class="card-title">Excelente para grandes empresas que necesitan investigar a sus candidatos</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">€</sup>
                  <span class="pricing-box-price">19</span>
                  <small class="text-muted text-uppercase">/Mes</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">100% privado</li>
                <li class="list-group-item">Peticiones ilimitadas</li>
				<li class="list-group-item">API para integrar con tu negocio</li>
                <li class="list-group-item">Prueba el plan gratis antes de comprar</li>
              </ul>
              <a href="#start" class="btn btn-primary-outline">Prueba nuestro servicio</a>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="section-testimonials text-xs-center bg-inverse">
      <div class="container">
        <h3 class="sr-only">Testimonios</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner" role="listbox">


            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="../img/face5.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Esta herramienta nos ha sido de gran utilidad en el proceso de selección de candidatos, donde es esencial saber a quién contratar.</p>
                <footer>H&B Selection</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Sign Up
    ================================================== -->

    <section class="section-signup bg-faded">
      <div class="container">
        <h3 class="text-xs-center m-b-3">¡Pruebalo ahora! Mira cualquier perfil</h3>
		<h4 class="text-xs-center m-b-3"><a  name="start" href="javascript:;" class="btn btn-social btn-block bg-linkedin">
            <span class="icon-linkedin"></span> Rellena el formulario de abajo para ver el perfil que quieras.
          </a></h4>
		  
		<h6 class="text m-b-3">
            <ol>
			<li>Pon tu Email de LinkedIn(necesario para la conexión con LinkedIn API)</li>
			<li>Pon tu clave de LinkedIn (necesario para la conexión con LinkedIn API)</li>
			<li>Pon la URL del perfil de LinkedIn que quieras ver, o el nombre de usuario</li>
			<li>Pulsa BUSCAR y espera unos segundos, nuestro motor SET (Search Engine Tool) te indicará la URL para ver el perfil de forma anónima</li>
			</ol>
         </h6>  
        <form action="resultado_es.php" method="post" id="register-form" novalidate="novalidate">
          <div class="row" id="form-content">
		  <fieldset>
            <div class="col-md-6 col-xl-3">
			<div class="fieldgroup">
              <div class="form-group has-icon-left form-control-email">
                <label class="sr-only" for="email">LinkedIn Email</label>
                <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="LinkedIn Email" autocomplete="on">
              </div>
			</div>  
            </div>
            <div class="col-md-6 col-xl-3">
			<div class="fieldgroup">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="password">LinkedIn password</label>
                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="LinkedIn password" autocomplete="on">
              </div>
			</div>  
            </div>
			<div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">URL Solicitada</label>
                <input type="text" class="form-control form-control-lg" id="inputName" placeholder="URL Solicitada">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group">
                <button value="submit" onclick="__gaTracker('send', 'event', 'buttons', 'click', 'Boton-envio-es';" type="submit" class="btn btn-primary btn-block">Buscar!</button>
              </div>
            </div>
			</fieldset>
          </div>
          <label class="c-input c-checkbox">
            Nosotros <u>nunca usaremos o almacenaremos tu clave</u>, esta será empleada únicamente para realizar la conexión con la API de LinkedIn. For more info about the API Click <a target="_blank" href="https://developer.linkedin.com/docs/signin-with-linkedin">here</a>
          </label>
        </form>
      </div>
    </section>

    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; LinkedIn Private 2016. <br>
                Desarrollado por <a target="_bank" href="https://www.webmip.es">webmip</a> usando Codrops theme.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
			  <li class="nav-item"><a class="nav-link scroll-top" href="https://www.ssllabs.com/ssltest/analyze.html?d=linkedinprivate.com&s=104.18.44.67&hideResults=on" target="_blank"><img src="../img/pci.png" style="width: 120px;" /></a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Ir arriba <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

	<script src="../js/landio.min.js"></script>
	<script src="../js/validate.js"></script>
	
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65948894-3', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
