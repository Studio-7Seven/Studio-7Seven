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
	<!-- CSS -->
	<link rel="stylesheet" href="/assets/main.css">
	<!-- ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="/assets/icons/mainlogo__temp.ico" />
</head>

<body>
	<header>
		<section class="band_info_network">
			<div class="band_top">
				<div class="container">
					<div class="band_content_left">
						<!--Lorem Ipsum-->
					</div>
					<div class="band_content_right">
						<u class="social_media_list">
							<!--<li class="social_media_element"><a target="_blank" href=""><div class="social_media_icons_fb"></div></a></li>
							<li class="social_media_element"><a target="_blank" href=""><div class="social_media_icons_tw"></div></a></li>-->
							<li class="social_media_element"><a target="_blank" href="https://www.youtube.com/channel/UCufZ9TPTfBrPVirxfGoDBRw"><div class="social_media_icons_yt"></div></a></li>
						</u>
					</div>
				</div>
			</div>
		</section>

		<section class="main_menu_bootstrap">
			<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
				<div class="container">
					<div class="main_logo_left">
						<!--<img src="../Assets/Img/logo.png">-->
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
							<li><a href="/studio" class="element_main_menu <?php if ($get_1 == "studio") echo 'element_main_menu_actif'; ?>">Studio</a></li>
							<li><a href="/jeux" class="element_main_menu <?php if ($get_1 == "jeux") echo 'element_main_menu_actif'; ?>">Jeux</a></li>
							<li><a href="/web" class="element_main_menu <?php if ($get_1 == "web") echo 'element_main_menu_actif'; ?>">Web</a></li>
							<li><a href="/softwares" class="element_main_menu <?php if ($get_1 == "softwares") echo 'element_main_menu_actif'; ?>">Softwares</a></li>
							<li><a href="/contact" class="element_main_menu <?php if ($get_1 == "contact") echo 'element_main_menu_actif'; ?>">Contact</a></li>
							<li><a href=""><img src="/assets/icons/iconmonstr-favorite-7-red.svg" class="svg_main_menu"></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>
		
		<section class="particles_canva" style="height: <?php echo $height; ?>"></section>

	<?= $content; ?>

		<section class="band_footer">
			<div class="container text-center">
				<div class="band_footer_content">
					Made by <a href="">Studio 7Seven</a> - Tous droits réservés - <a href="">Mentions légales</a>
				</div>
			</div>
		</section>
	</body>
</html>

