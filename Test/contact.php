<?php require_once('cockpit/bootstrap.php'); ?>
<?php require_once('route.php'); ?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title><?= $title; ?></title>
	<!-- LIB -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- BOOTSRAP -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
	<!-- ZOOMBOX -->
	<link rel="stylesheet" href="/assets/zoombox/zoombox.css">
	<script type="text/javascript" src="/assets/zoombox/zoombox.js"></script> 	
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 
	<!-- CSS -->
	<link rel="stylesheet" href="/Test/assets/main.css">
	<!-- ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="/assets/icons/mainlogo__temp.ico" />
</head>

<body>
	<header>
		<section class="main_menu_bootstrap">
			<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
				<div class="container">
					<div class="main_logo_left">
						<img src="assets/icons/LogoBlackSmall.png">
						<h1 class="title">Studio 7Seven</h1>
					</div>
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="/" class="element_main_menu <?php if ($get_1==null) echo 'element_main_menu_actif'; ?>">Home</a></li>
							<li><a href="/formations" class="element_main_menu <?php if ($get_1 == "formations") echo 'element_main_menu_actif'; ?>">Formations</a></li>
							<li><a href="/formateurs" class="element_main_menu <?php if ($get_1 == "formateurs") echo 'element_main_menu_actif'; ?>">Formateurs</a></li>
							<li><a href="/cours_video" class="element_main_menu <?php if ($get_1 == "cours_video") echo 'element_main_menu_actif'; ?>">Cours video</a></li>
							<li><a href="/contact" class="element_main_menu <?php if ($get_1 == "contact") echo 'element_main_menu_actif'; ?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>

<!-- -->
<section class="video_presentation_full_back">
	<div class="video_full_back">
		<img src="/Test/upload/Img/background1.jpg">
	</div>
</section>


		<section class="band_footer">
			<div class="container text-center">
				<div class="band_footer_content">
					Made by <a href="">Studio 7Seven</a> - Tous droits réservés - <a href="">Mentions légales</a>
				</div>
			</div>
		</section>
	</body>
</html>

