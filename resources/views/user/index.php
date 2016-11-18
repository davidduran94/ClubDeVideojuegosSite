<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CDV ESCOM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />


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
	<!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" id="theme-switch" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>


	<!-- 
		INFO:
		Add 'boxed' class to body element to make the layout as boxed style.
		Example: 
		<body class="boxed">	
	-->
	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<section id="fh5co-header">
			<div class="container">
				<nav role="navigation">
					<ul class="pull-left left-menu">
						<li><a href="{{url('about')}}">Acerca de</a></li>
						<li><a href="pricing.php">Proyectos</a></li>
						<li><a href="pricing.php">Proximos eventos</a></li>
					</ul>
					<h1 id="fh5co-logo"><a href="index.html">CDV ESCOM<span>.</span></a></h1>
					<ul class="pull-right right-menu">
						<li><a href="user/about.php">Anuncios</a></li>
						<li><a href="pricing.php">Redes Sociales</a></li>
						<li><a href="{{route('game.index')}}">Administrador</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- #fh5co-header -->

		<section id="fh5co-hero" class="js-fullheight" style="background-image: url(images/hero_bg.png);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-left-position">
							<h2 class="animate-box">Club de Desarrollo de Videojuegos ESCOM</h2>
							<p class="animate-box"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-outline popup-vimeo btn-video"><i class=" icon-video-camera"></i> Reproducir</a> 

						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
				<a href="#" class="scroll-btn">
					<span class="text">Más información</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
				</a>
			</div>
		</section>
		<!-- END #fh5co-hero -->


		<section id="fh5co-projects">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-lead animate-box">Nuestros Cursos</h2>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
						<a href="images/img_1.jpg" class="fh5co-project-item image-popup">
							<img src="images/blender.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>Blender</h2>
								<p align="justify">Blender es un programa informático multi plataforma, dedicado especialmente al modelado, iluminación, renderizado, animación y creación de gráficos tridimensionales. También de composición digital utilizando la técnica procesal de nodos, edición de vídeo, escultura (incluye topología dinámica) y pintura digital. En Blender, además, se puede desarrollar vídeo juegos ya que posee un motor de juegos interno.</p>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
						<a href="images/img_2.jpg" class="fh5co-project-item image-popup">
							<img src="images/unity3d.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>Unity</h2>
								<p align="justify">Unity es un motor de videojuego multiplataforma creado por Unity Technologies. Unity está disponible como plataforma de desarrollo para Microsoft Windows, OS X y Linux. La plataforma de desarrollo tiene soporte de compilación con diferentes tipos de plataformas (Vease la sección Plataformas objetivo).</p>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
						<a href="images/img_3.jpg" class="fh5co-project-item image-popup">
							<img src="images/unreal.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>Unreal</h2>
								<p align="justify">Unreal Engine es un motor de juego de PC y consolas creados por la compañía Epic Games. Implementado inicialmente en el shooter en primera persona Unreal en 1998. Unreal Engine también ofrece varias herramientas de gran ayuda para diseñadores y artistas facilitando la visualización de entornos o de construcciones.</p>
							</div>
						</a>
					</div>
					
				</div>
			</div>
		</section>
		<!-- END #fh5co-projects -->
		

		<div class="row">
					
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-person">
							<div class="fb-page" data-href="https://www.facebook.com/ClubVideojuegosESCOM" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ClubVideojuegosESCOM" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ClubVideojuegosESCOM">Club de Desarrollo de Videojuegos ESCOM</a></blockquote></div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-person">	
		    	            <a class="twitter-timeline"  href="https://twitter.com/hashtag/TwitterStories" data-widget-id="759759348994236417">#TwitterStories Tweets</a>
         				    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="fh5co-person">
							<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSckzD2VYNhKmRM1TqTZ-a6Rc8WtLSi2AxmYd2FsQ6uAtId0bA/viewform?embedded=true" width="360" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
						</div>
					</div>
		</div>


		<section id="fh5co-features">
			<div class="container">
				<div class="row text-center row-bottom-padded-md">
					<div class="col-md-8 col-md-offset-2">
						<figure class="fh5co-devices animate-box"><img src="images/img_devices.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></figure>
						<h2 class="fh5co-lead animate-box">Desarrollo de Videojuegos multiplataforma</h2>
						<p class="fh5co-sub-lead animate-box">Se parte de los cursos donde aprenderas el desarrollo de videojuegos para multiples dispositivos</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="icon-power"></i>
							</div>
							<h3>Best For Startup</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right .</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="icon-flag2"></i>
							</div>
							<h3>Easy To Use</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right .</p>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="icon-anchor"></i>
							</div>
							<h3>Robust In Mind</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right .</p>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="icon-paragraph"></i>
							</div>
							<h3>Beautiful Typography</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right .</p>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="icon-umbrella"></i>
							</div>
							<h3>Eco Friendly</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right .</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="icon-toggle"></i>
							</div>
							<h3>Wide and Boxed</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right .</p>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
			</div>
		</section>	

		<!-- END #fh5co-features -->


		<section id="fh5co-features-2">
			<div class="container">
				<div class="col-md-6 col-md-push-6">
					<figure class="fh5co-feature-image animate-box">
						<img src="images/macbook_by.png" alt="">
					</figure>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<span class="fh5co-label animate-box">See Features</span>
					<h2 class="fh5co-lead animate-box">Superb Features</h2>
					<div class="fh5co-feature">
						<div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
						<div class="fh5co-text animate-box">
							<h3>Beautiful Typography</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
					<div class="fh5co-feature">
						<div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
						<div class="fh5co-text animate-box">
							<h3>Eco Friendly</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
					<div class="fh5co-feature">
						<div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
						<div class="fh5co-text animate-box">
							<h3>Wide and Boxed</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>

					<div class="fh5co-btn-action animate-box">
						<a href="#" class="btn btn-primary btn-cta">More Features</a>
					</div>

				</div>
			</div>
		</section>
		<!-- END #fh5co-features-2 -->

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

	<!-- Main JS  -->
	<script src="js/main.js"></script>

	</body>
</html>

