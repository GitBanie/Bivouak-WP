<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="<?php echo get_template_directory_uri() ;?>/dist/img/logos/bivoik.png" />
	<?php wp_head() ?>
</head>

<body>
  <div class="wrapper">
    <header class="container-fluid" id="master-header">
      <div class="bg-site-branding container-fluid">
        <div class="container">
          <div class="site-branding">
            <nav class="site-navigation navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="<?php echo home_url() ?>">
                <div class="header-logo">
                  <img src="<?php echo get_template_directory_uri() ;?>/dist/img/logos/bivoik.svg" alt="logo bivoik">
                  <div class="by-Yakaygo">
                    <span>by</span>
                    <img src="<?php echo get_template_directory_uri() ;?>/dist/img/logos/yakaygo.svg" alt="logo yakaygo">
                  </div>
                </div>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <?php
              wp_nav_menu(array(
                  'theme_location'  => 'menu-header',
                  'depth'           => 2,
                  'container'       => 'div',
                  'container_id'    => 'navbarNav',
                  'container_class' => 'collapse navbar-collapse',
                  'items_wrap'      => my_nav_wrap(),
                  'menu_class'      => 'nav navbar-nav ml-auto',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker()
              ));
              ?>
              <div class="tel">
                <a href="<?php echo esc_url('tel:09 87 67 09 61') ?>"><?php echo esc_html( "09 87 67 09 61" ) ?></a>
              </div>
              </nav>
            </div><!-- /site-branding -->
          </div><!-- /container -->
        </div><!-- /container-fluid -->

			<?php if(is_front_page()): ?>
      	<div class="container">
	        <div class="site-title">
	          <h1><?php echo esc_html( 'Reveillez votre instinct de survie' ) ?></h1>
	          <p><?php echo esc_html( "Réservez votre stage sélectionné par YAKAYGO, l'expert des activités de plein air" ) ?></p>
	          <img class="animate-arrow" src="<?php echo get_template_directory_uri() ;?>/dist/img/bg/line-with-arrow.png" alt="fleche de separation">
	        </div>

	        <div class="search">
	          <form class="search-form" action="test.html" method="get">
	            <div class="row">
	              <div class="col-md i-group">
	                <input id="searchTextField" class="form-control" placeholder="Entrez un lieu" type="search" name="place">
	                <div class="i">
	                  <i class="fas fa-map-marker-alt"></i>
	                </div>
	              </div>
	              <div class="col-md i-group">
	                <select class="form-control" name="number">
	                  <option value="" selected="selected"><?php echo esc_html( "Nombre" )?></option>
	                  <option value="1"><?php echo esc_html( "1" )?></option>
	                  <option value="2"><?php echo esc_html( "2" )?></option>
	                  <option value="3"><?php echo esc_html( "3" )?></option>
	                  <option value="4"><?php echo esc_html( "4" )?></option>
	                  <option value="5"><?php echo esc_html( "5" )?></option>
	                  <option value="6"><?php echo esc_html( "6" )?></option>
	                </select>
	                <div class="i">
	                  <i class="fas fa-users"></i>
	                </div>
	                <div class="angle-down">
	                  <i class="fas fa-angle-down"></i>
	                </div>
	              </div>
	              <div class="col-md i-group">
	                <select class="form-control" name="lvl">
	                  <option value="" selected="selected"><?php echo esc_html( "Niveau" )?></option>
	                  <option value="debutant"><?php echo esc_html( "Débutant" )?></option>
	                  <option value="confirme"><?php echo esc_html( "Confirmé" )?></option>
	                  <option value="expert"><?php echo esc_html( "Expert" )?></option>
	                </select>
	                <div class="i">
	                  <i class="fas fa-signal"></i>
	                </div>
	                <div class="angle-down">
	                  <i class="fas fa-angle-down"></i>
	                </div>
	              </div>
	              <div class="col-md i-group">
	                <select class="form-control" name="theme">
	                  <option value="" selected="selected"><?php echo esc_html( "Thème" )?></option>
										<?php if (null !== (get_terms('genre'))) : ?>
										<?php foreach (get_terms('genre') as $cat) : ?>
											<option value="<?php echo $cat->slug ?>"><?php echo $cat->name ?></option>
										<?php endforeach; ?>
										<?php endif; ?>
	                </select>
	                <div class="i">
	                  <i class="fas fa-tag"></i>
	                </div>
	                <div class="angle-down">
	                  <i class="fas fa-angle-down"></i>
	                </div>
	              </div>
	              <button type="submit" class="col-md-2 btn btn-danger">
	                <i class="fas fa-search"></i> <span><?php echo esc_html( "Chercher" )?></span>
	              </button>
	            </div><!-- row -->
	            <div class="row info">
	              <div class="col">
	                <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/expert.svg" alt="logo expert">
	                <p><?php echo esc_html( "Des experts de la survie" )?></p>
	              </div>
	              <div class="col">
	                <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/couteau-suisse.svg" alt="logo expert">
	                <p><?php echo esc_html( "Des thématiques spécifiques" )?></p>
	              </div>
	              <div class="col">
	                <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/cadeau.svg" alt="logo expert">
	                <p><?php echo esc_html( "Offrez nos stages" )?></p>
	              </div>
	            </div><!-- /row -->
	          </form>
	        </div><!-- /search -->
	      </div><!-- /container -->
		  <?php endif; ?>
    </header><!-- /master-header -->
