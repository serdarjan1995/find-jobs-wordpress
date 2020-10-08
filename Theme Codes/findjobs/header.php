<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.6.55/css/materialdesignicons.min.css" rel="stylesheet" type="text/css"/>
		<?php wp_head();?>
	</head>

	<body <?php body_class();?>>
		<div class="background-element background-div-green">

		</div>
		<?php if (is_numeric(get_query_var('query')) && intval(get_query_var('query'))%2 === 0 ){?>
			<img class="background-element background-img" src="http://lorempixel.com/600/300/nature/random/?rnd=<?php echo rand(); ?>" alt="">
		<?php }?>


		<header class="sticky-top p-3">
			<div class="container">
				<div class="row">
					<div class="col-1">
						<h3 class="site-name"><a class="permalink" href="<?php echo get_home_url(); ?>">hub</a></h3>
					</div>
					<div class="col-8">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'navbar',
								'menu_class' => 'navigation',
							)
						);?>
					</div>
					<div class="col-3">
						<div class="btn-group">
						  <button id="loginRegisterBtn" class="btn btn-green dropdown-toggle width-120" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Sign In
						  </button>
						  <div class="dropdown-menu width-120">
								<a class="dropdown-item" href="#" onclick="changeButtonName(this.innerHTML)">Sign In</a>
    						<a class="dropdown-item" href="#" onclick="changeButtonName(this.innerHTML)">Login</a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="search-area container">
			<div class="col">
				<h1 class="header-intro font-times">Find the most<br/> exciting <span>startup jobs</span></h1>
				<!-- Search form -->
				<?php get_search_form(); ?>
			</div>

		</div>

		<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
		<script>
		(function() {
		  var placesAutocomplete = places({
		    container: document.querySelector('#place')
		  });

		})();
		<?php if (is_numeric(get_query_var('query')) && intval(get_query_var('query'))%2 != 0 && intval(get_query_var('query'))%3 === 0 ){?>
			$('#place').val('Istanbul, Turkey');
			console.log(aaa)
		<?php }?>
		</script>
