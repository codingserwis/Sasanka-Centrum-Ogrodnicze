<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
	<head>
		<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-PKRSBGR');</script>
		<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Sasanka, Sasanka Opole, Centrum Ogrodnicze, Centrum Ogrodnicze Opole, Sklep, Usługi ogrodnicze, Usługi ogrodnicze Opole, Usługi Ogrodncze opolskie, Zakładanie ogrodów, Projektowanie ogrodoów, Pielęgnacja ogrodów, Sklep ogrodniczy, Sklep ogrodniczy opole, Środki ochrony roślin, Systemy nawadniania, Opole, opolskie, Opolszczyzna">
		<script src="https://use.fontawesome.com/b1f95d1c43.js"></script>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicons/favicon.ico" />
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/favicons/apple-touch-icon.png' );?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/favicons/favicon-32x32.png' );?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/favicons/favicon-16x16.png' );?>">
		<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/favicons/manifest.json' );?>">
		<link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/favicons/safari-pinned-tab.svg' );?>" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKRSBGR"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<header class="header">
			<div class="row">
				<div class="top_logo">
					<h1 class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/sasanka_white_logo.svg' );?>">
						</a>
					</h1>
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