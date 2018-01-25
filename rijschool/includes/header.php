<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
		   <a class="navbar-brand animated pulse" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="t" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>
		<div class="collapse navbar-collapse animated pulse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li  class="nav-item">
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'navbar-right',
						'depth'             => 2,
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
				
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container -->
	</nav>
	<header class="business-header">
	  <div class="container">
		<div class="row">
		  <div class="col-lg-12">
		  <div class="mt30">
			<h1 class="display-3 text-center text-black mt-4 animated fadeInLeft ">Naam</h1>
		  </div>
			<div class="text-center text-white">
				<div class="animated fadeInRight ">
					<h3 >Haal je rijbewijs nu !</h3>
					<h5> Heb jij last van faal angst of ben jij altijd zenuwachtig voor een examen ? </h5>
					<h5>Dan is dat geen enkel probleem voor ons</h5>
					<h5> Onze team bestaat namelijk uit professionele rij-instructeurs</h5>
				</div>	
				<a class="btn btn-primary btn-lg mt-20" href="#">Meld je nu aan &raquo;</a>
			</div>
		  </div>
		</div>
	  </div>
	</header>
  

