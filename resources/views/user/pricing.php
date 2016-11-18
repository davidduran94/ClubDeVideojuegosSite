<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CVD ESCOM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<section id="fh5co-header">
			<div class="container">
				<nav role="navigation">
					<ul class="pull-left left-menu">
						<li><a href="{{url('user/about')}}">Acerca de</a></li>
						<li><a href="{{url('projects')}}">Proyectos</a></li>
						<li><a href="pricing.php">Proximos eventos</a></li>
					</ul>
					<h1 id="fh5co-logo"><a href="index.php">CDV ESCOM<span>.</span></a></h1>
					<ul class="pull-right right-menu">
						<li><a href="about.php">Anuncios</a></li>
						<li><a href="pricing.php">Redes Sociales</a></li>
						<li><a href="pricing.php">Dudas y Comentarios</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- #fh5co-header -->

		<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/full_image_2.jpg);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro no-js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-center-position">
							<h2 class="animate-box">Videojuegos</h2>
							<h3 class="animate-box">Conoce los proyectos que han desarrollado nuestros miembos.</h3>
							
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
				<a href="#" class="scroll-btn">
					<span class="text">Descarga cada uno de nuestros juegos</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
				</a>
			</div>
		</section>
		<!-- END #fh5co-hero -->

		<section id="fh5co-pricing">
			<div class="container">
				<div class="row">

					<!-- Dynamic content -->
				<?php foreach($games as $game){?>
				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan"> <?php echo "$game->titulo";?></h2>
						<img src="<?php echo "$game->imagen";?>" alt="">
						<p><strong>Autor: </strong> <?php echo "$game->autor";?></p>
						<p><strong>Descripcion</strong></p>
						<p><?php echo "$game->descripcion";?></p>
						<hr>
						<a href="<?php echo "$game->link";?>" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>
				<?php };?>

				<!-- End Dynamic-->
					
				

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">GNO SPace</h2>
						<img src="images/juego_2.png" alt="">
						<p>GNO space, trata de una nave que tiene que capturar monedas a través de un laberinto, sin embargo por cada que toques una pared esas monedas decrementaran. </p>
						<hr>
						<ul class="pricing-info">
							<li>Multiplataforma</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://mega.nz/#!eUpEkIbR!4V1c7LAhHw1whPC2IkrlD3qm9v3y61EblO0mAL_QPxo" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Odisea Dimensional</h2>
						<img src="images/juego_3.png" alt="">
						<p>Este es un juego de una nave que viaja a traves de diversos dibujos
							Su mision es defenderse de los demonios ninja que invaden la dimension de los dibujos</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://ashcastillo.itch.io/odiseadimensional" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Alien Trap</h2>
						<img src="images/juego_4.png" alt="">
						<p>Jhonson fue parte de un programa para poblar el espacio, lamentablemente quedo solo en un ataque alienigena, con el control de gravedad alterado, jhonson logro ponerse su traje para evitar ser aplastado por la gravedad, pero ahora hay 2 problemas: los alienigenas y el como escapar de la base cuando solo tiene a su dispocicion un dispositivo prototipo de teletrasnportacion y una pistola de energía</p>
						<hr>
						<ul class="pricing-info">
							<li>Genero: platafomas, disparos, acción.</li>
							<li>Objetivo: recolectar los 11 circuitos sin morir</li>
							<li>Controles de movimiento : "a","w" y "d". Disparo: "space"</li>
							
						</ul>
						<a href="https://mega.nz/#!mMU0laIJ!cp3BKA4kqIc1KDgHTglGJHxalxeh_pZFx9C3eCFepFY" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">BJHJKNSA</h2>
						<img src="images/juego_5.png" alt="">
						<p> Bullet Hell</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://goo.gl/oeobnq" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Epilepsy</h2>
						<img src="images/juego_6.jpg" alt="">
						<p>Epilepsy, encuentra los 4 objetos distribuidos por el laberinto sin que te atrape el duende, logra encontrar la salida antes de que el reloj se detenga solo para quedar perdido en el espacio.
							Se recomienda jugarlo con audifonos.
							La única resolución a la que funciona bien es 1366X768, calidad "Fantastic".
							La exposición prolongada al juego puede producir mareos, nauseas, epilepsia y comportamiento suicida</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://mega.nz/#!hlARnAIL!dGLFA2MPGNmGudt35P5HUnsI_v9Wl-OpZCik9_zD2eQ" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Sadness Symphony</h2>
						<img src="images/juego_7.jpg" alt="">
						<p>Proteger a la princesa era su deber, no creerás lo que paso al final, este juego conmovió a Internet, averigua el porque cuando este compilado</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://mega.co.nz/#!icJkRZBK!9mqiP4e2C5izXgDeCCquoHq_J2_GI3n3PfDcBdX6ovk" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Fireway</h2>
						<img src="images/juego_8.jpg" alt="">
						<p>Se te ha encomendado una tarea sagrada y has bajado a las catacumbas subterraneas de tu pueblo natal. Adentratee en la oscuridad y hacia las profundidades donde yace tu destino.
							Usa WASD o las flechas para mover al personaje y espacio para comenzar el juego y saltarte los diálogos.</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://mega.co.nz/" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Batalla Final</h2>
						<img src="images/juego_9.jpg" alt="">
						<p>Descripción: Un gran guerrero se encuentra acorralado, pelea hasta la muerte en este machaca-botones de vista aérea y consigue la mejor puntuación.</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://www.dropbox.com/s/teozgq906j5kwn6/BatallaFinal.rar?dl=0" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Mafio</h2>
						<img src="images/juego_10.png" alt="">
						<p>-</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href="https://drive.google.com/file/d/0B2OBwhCmTMq5QlFuTjliZEVlVTQ/view?usp=sharing" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 animate-box">
					<div class="price-box">
						<h2 class="pricing-plan">Vampiro contra monstruo</h2>
						<img src="images/juego_11.jpg" alt="">
						<p>Toma el control de un vampiro y lucha contra los zombies y alliens que encuentres.</p>
						<hr>
						<ul class="pricing-info">
							<li>10 projects</li>
							<li>20 Pages</li>
							<li>20 Emails</li>
							<li>100 Images</li>
						</ul>
						<a href=" http://www.mediafire.com/download/sil7xdcwxcetcrn/VAMPIRO_CONTRA_MONSTRUO.zip" class="btn btn-default btn-sm">Descargar</a>
					</div>
				</div>

			
				
				</div>
			</div>
		</section>

		<!-- END #fh5co-pricing -->

		<div id="fh5co-faqs">
			<div class="container">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-lead animate-box">Preguntas Frecuentes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<ul class="fh5co-faq-list">
							<li class="animate-box">
								<h2>¿Dónde se ubica el club?</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</li>
							<li class="animate-box">
								<h2>¿Como se Juega?</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</li>
							<li class="animate-box">
								<h2>¿Puedo venderlo?</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		

		<!-- END #fh5co-subscribe -->

		<footer id="fh5co-footer">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Company</h3>
							<ul class="fh5co-links">
								<li><a href="#">Acerca de</a></li>
								<li><a href="#">Cursos</a></li>
								<li><a href="#">Proyectos</a></li>
								<li><a href="#">Proximos Eventos</a></li>
								<li><a href="#">Equipo</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Support</h3>
							<ul class="fh5co-links">
								<li><a href="#">Conocimientos</a></li>
								
								<li><a href="#">Video Demos</a></li>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Contact Us</h3>
							<p>
								<a href="mailto:info@freehtml5.co">info@.co</a> <br>
								198 West 21th Street, <br>
								Suite 721 New York NY 10016 <br>
								<a href="tel:+123456789">+12 34  5677 89</a>
							</p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Follow Us</h3>
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
			<div class="fh5co-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-left"><small>&copy; 2016 <a href="index.html"></a> Surreallabs All Rights Reserved.</small></p>
							<p class="fh5co-right"><small class="fh5co-right">Designed by <a href="http://surreallabs.co" target="_blank">David Durán</a></small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
	</div>
	<!-- END #fh5co-page -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>


	</body>
</html>

