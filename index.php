<?php
// Redirecciones para facilitar recordar las rutas
if (isset($_GET['p']) && $_GET['p'] == 'correo') {
	header('Location:http://webmail.webfaction.com');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Casa Olsen - Hacienda de retiro Cuernavaca</title>
	<meta name="description" content="Asilo en Cuernavaca para personas mayores, Casa Olsen es un centro geriátrico donde tus seres queridos encontrarán confort, cariño y cuidados especiales." >
	<meta name="author" content="Casa Olsen">

	<!-- OG -->
	<meta property="og:title" content="Casa Olsen - Hacienda de retiro en Cuernavaca"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="Asilo en Cuernavaca para personas mayores, Casa Olsen es un centro geriátrico donde tus seres queridos encontrarán confort, cariño y cuidados especiales."/>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Search Console -->
	<meta name="google-site-verification" content="5p2KxBrS7tspiLyWRVkJPUgQvqk5hIEW778lSMDlCl4" />

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->
	<style media="screen">
		#wrapper { max-width: 600px; margin: 0 auto; text-align: center; }
			#gallery { overflow: hidden; }
			#gallery a { display: block; float: left; }
			#gallery a img { display: block; border: 0; }
	</style>


</head>
<body>


	<!-- Preloader -->
	<div id="preloader">
		<div id="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="lading"></div>
		</div>
	</div><!-- /#preloader -->
	<!-- Preloader End-->


	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button> <!-- /.navbar-toggle -->

		</div> <!-- /.navbar-header -->

		<nav class="collapse navbar-collapse">
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li class="active"><a href="#page-top">Inicio</a></li>
				<li><a href="#about">Instalaciones</a></li>
				<li><a href="#galeria">Galería</a></li>
				<!-- <li><a href="#subscribe">Suscríbete</a></li> -->
				<li><a href="#contact">Contacto</a></li>
			</ul> <!-- /.nav .navbar-nav -->
		</nav> <!-- /.navbar-collapse  -->
	</div><!-- /#main-menu -->
	<!-- Main Menu End -->


	<!-- Page Top Section -->
	<section id="page-top" class="section-style" data-background-image="images/background/bg1.png">
		<div class="pattern height-resize">
			<div class="container">
				<!-- <h1 class="site-title">
					Casa Olsen
				</h1> -->
				<h2 class="site-title">
					Casa Olsen
				</h2>
				<!-- /.site-title -->
				<h3 class="section-name">
					<!-- <span>
						We Are
					</span> -->
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					<!-- Espéralo -->
					<!-- En vivo -->
				</h2><!-- /.Section-title  -->
				<div class="" style="height:400px">

				</div>


				<p class="time-until">
					<!-- <span>Tiempo restante</span> -->
				</p><!-- /.time-until -->



				<div class="next-section">
					<a class="go-to-about" href="#about"><span></span></a>
				</div><!-- /.next-section -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->
	</section><!-- /#page-top -->
	<!-- Page Top Section  End -->


	<!-- About Us Section -->
	<section id="about" class="section-style" data-background-image="../images/bg2.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Nosotros
					</span>
				</h3><!-- /.section-name -->

				<!-- /.Section-title  -->
				<p class="section-description texto-negro" align="center">
					Somos un asilo en Cuernavaca para personas mayores, Casa Olsen es un centro geriátrico donde tus seres queridos encontrarán confort, cariño y cuidados especiales.
				</p><!-- /.section-description -->

				<div class="row">
					<div class="col-md-6">

						<img src="images/IMG_0629.JPG" style="padding-top:20px" alt="" width="100%" />
					</div>
					<div class="col-md-6 texto-negro">
						<!-- <h3>Servicio personalizado</h3> -->
						<br>
						<ul class="section-description">
							<li>Estancia permanente</li>
							<li>Terapia ocupacional</li>
							<li>Actividades físicas</li>
							<li>Dietas balanceadas</li>
							<li>Enfermería 24/7</li>
							<li>Geriatría</li>
							<li>Mantenimiento de habitaciones</li>
							<li>Música ambiental</li>
							<li>Espléndidos jardines</li>
						</ul>
					</div>
				</div>

				<div class="next-section">
					<a class="go-to-galeria"><span></span></a>
				</div><!-- /.next-section -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->


	</section><!-- /#about -->
	<!-- About Us Section End -->

	<section id="fondo" class="section-style" data-background-image="" style="background-image:url(images/IMG_0559.JPG)">
	<!-- <section id="contact" class="section-style" data-background-image="images/background/bg1.png"> -->
		<div class="pattern height-resize">
			<div class="container">
				<div style="height:500px">

				</div>
			</div><!-- /.container -->
		</div><!-- /.pattern -->


	</section><!-- /#about -->
	<!-- About Us Section End -->

	<section id="galeria" class="section-style" >
		<div class="pattern height-resize">
			<div class="container" style="padding-bottom:80px" id="wrapper">
				<h2 class="section-name" style="color:#555">
					<span>
						Galería
					</span>
				</h2><!-- /.section-name -->

				<div class="row" id="gallery">

					<div class="col-md-6">
				    <a href="images/IMG_0559.JPG">
							<img src="images/IMG_0559.JPG" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>
				  </div>

					<div class="col-md-6">
						<a href="images/IMG_0627.JPG">
							<img src="images/IMG_0627.JPG" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>
				  </div>

				</div>

				<hr>
				<br>

				<div class="row">
					<div class="col-md-6">
				    <a href="images/IMG_0559.JPG">
							<img src="images/IMG_0629.JPG" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>
				  </div>
					<div class="col-md-6">
						<a href="images/IMG_0701.JPG">
							<img src="images/IMG_0701.JPG" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>
				  </div>
				</div>

				<hr>
				<br>

				<div class="row">
					<div class="col-md-6">
						<a href="images/casa con cielo azul.png">
							<img src="images/casa con cielo azul.png" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>
				  </div>
					<div class="col-md-6">
						<a href="images/IMG_0566.JPG">
							<img src="images/IMG_0566.JPG" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>
				  </div>

					<div class="col-md-3">
						<!-- <a href="images/IMG_0566.JPG">
						<img src="images/IMG_0566.JPG" alt="" width="100%" title="Imagen de Asilo Cuernavaca" /></a>				     -->
				  </div>
				</div>
			</div><!-- /.container -->
		</div><!-- /.pattern -->


	</section><!-- /#about -->
	<!-- Galeria Section End -->



	<!-- Contact Section -->
	<!-- images/background/contact.jpg -->
	<section id="subscribe" class="section-style" data-background-image="images/madera.jpg" style="background-color:#21610B">
	  <div class="pattern height-resize">
	    <div class="container">
	      <h3 class="section-name">
	        <span>
	          Contacto
	        </span>
	      </h3><!-- /.section-name -->
				<br>
				<div class="row">
				  <div class="col-md-6">
						<p class="section-description">
							<h4>Cuernavaca Morelos.</h4>
							<ul>
								<li>045 777 324 98 18</li>
								<li>017 772 434 109</li>
							</ul>
		 					<h4>Ciudad de Mexico.</h4>
							<ul>
								<li>044 55 11 73 33 70</li>
								<li>55 73 90 56</li>
							</ul>
			      </p><!-- /.section-description -->
				  </div>
					<div class="col-md-6">
						<form id="contact-form" action="email.php" method="post" class="clearfix">
			        <div class="contact-box-hide">
			          <div class="col-sm-6">
			            <input type="text"  class="form-control" id="first_name" name="first_name" required placeholder="Nombre">
			            <span class="first-name-error"></span>
			          </div>
			          <div class="col-sm-6">
			            <input type="text"  class="form-control" id="last_name" name="last_name" required placeholder="Apellidos">
			            <span class="last-name-error"></span>
			          </div>
			          <div class="col-sm-6">
			            <input type="email" class="form-control"  id="contact_email" name="contact_email" required placeholder="Email">
			            <span class="contact-email-error"></span>
			          </div>
			          <div class="col-sm-6">
			            <input type="text"  class="form-control" id="subject" name="contact_subject" required placeholder="Asunto">
			            <span class="contact-subject-error"></span>
			          </div>
			          <div class="col-sm-10">
			            <textarea class="form-control" rows="5" id="message" name="message" required placeholder="Mensaje"></textarea>
			            <span class="contact-message-error"></span>
			          </div>
			          <div class="col-sm-2">
			            <button id="contact-submit" class="btn custom-btn col-xs-12" type="submit" name="submit"><i class="fa fa-rocket"></i></button>
			            <span id="contact-loading" class="btn custom-btn col-xs-12"> <i class="fa fa-refresh fa-spin"></i> </span>
			          </div>
			        </div><!-- /.contact-box-hide -->
			        <div class="contact-message"></div>

			      </form><!-- /#contact-form -->
					</div>
				</div>



	    </div><!-- /.container -->
	  </div><!-- /.pattern -->

	</section><!-- /#contact -->
	<!-- Contact Section End -->










		<!-- Footer Section -->
		<footer id="footer-section">
			<p class="copyright">
				&copy; <a href="#">Casa Olsen</a>
			</p>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
		<!-- Galería -->
		<script type="text/javascript" src="assets/js/jquery.poptrox.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="assets/js/plugins.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>


	</body>
	</html>
