<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?> 
<!DOCTYPE html>
<html lang="en">


<head>

	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	<meta name="description" content="Red Design Systems"/>
	<meta name="author" content="RDS"/>

	<title><?php bloginfo('name');?></title>

	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,300italic,400italic,600italic,700italic|Droid+Serif:400,400italic">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/fonts/novecento/stylesheet.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/icons/glyphicons/style.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/icons/font-awesome/font-awesome.min.css">

	<!-- Styles -->
	
	

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/theme-light.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/bootstrap.min.css">
	
	
	
	<!--<link rel="stylesheet" href="assets/css/theme-dark.css">-->

	<!-- Plugins -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/plugins/royalslider/royalslider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/plugins/mfp/jquery.mfp.css">

<?php wp_head(); ?>

</head>

<body>

	<div class="site-loader"></div>



	<!--HEADER-->
	<header class="site-header">

		<div class="header-inner">
			<div class="contactoPestana"> 
				<a href="javascript:$.scrollTo('#footer',800);"> 
					<div class="contactoPestana">
						<i class="fa fa-question-circle"></i>
					</div>
				</a> 
			</div>

			<div class="container">
				<div class="row">
					<div class="header-table col-md-12">
						<div class="header-col brand">
							<a href="<?php echo site_url(); ?> ">
								<img src="<?php bloginfo('template_directory')?>/assets/img/logo.png" alt="Red Design Systems">

							</a>
						</div>

						<nav class="header-col main-nav">
							<a href="#" class="nav-toggle"></a>

							<?php    /**
									* Displays a navigation menu
									* @param array $args Arguments
									*/
									$args = array(
										'theme_location' => 'principal',
										'container_id' => 'navbar',
										'container' => 'ul',
										'menu_class' => 'nav',
										
									);
								
									wp_nav_menu( $args ); 
							?>
							
						</nav>

						

					</div> 

				</div>

			</div>

		</div>

	</header>





	
