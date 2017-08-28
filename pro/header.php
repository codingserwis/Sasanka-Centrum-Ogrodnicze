<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Sasanka, Sasanka Opole, Centrum Ogrodnicze, Centrum Ogrodnicze Opole, Sklep, Usługi ogrodnicze, Usługi ogrodnicze Opole, Usługi Ogrodncze opolskie, Zakładanie ogrodów, Projektowanie ogrodoów, Pielęgnacja ogrodów, Sklep ogrodniczy, Sklep ogrodniczy opole, Środki ochrony roślin, Systemy nawadniania, Opole, opolskie, Opolszczyzna">
		<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:100,300&amp;subset=latin-ext" rel="stylesheet">
		<script src="https://use.fontawesome.com/b1f95d1c43.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/app.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89931638-3', 'auto');
  ga('send', 'pageview');

</script>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_directory');?>/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo('template_directory');?>/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<div class="row">
				<div class="top_logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_directory')?>/assets/img/sasanka_white_logo.svg">
					</a>
				</div>
				<div class="fast_contact">
					<ul>
						<li>sklep: <a href="tel:+48603443552">603443552</a></li>
						<li>usługi: <a href="tel:+48601533825">601533825</a></li>
					</ul>
				</div>
			</div>
			<?php
				wp_nav_menu(array(
					'menu' => 'header_menu',
					'theme_location' => 'header_menu',
					'menu_id' => 'main_menu',
					'container' => 'nav',
					'container_class' => 'main_nav',
					));
			?>
		</header>