<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Réservez vos stages de survie parmi nos offres sélectionnées par YakayGo. Réveillez votre instinct de survie !">
  <meta name="author" content="Christopher Navas">
  <meta name="keywords" content="Survie, Stage, Stages, Stage de survie, Instinct de survie, Survivant, Expert en survie, Débutant en survie, Bivoik, Bivouak, YakayGo, Comparateur, Journée découverte, Moniteurs de survie, Forêts, Allumer un feu, Bushcraft, Plein air, Outdoor, Reserver stage">
  <link rel="icon" href="<?php echo get_template_directory_uri() ;?>/dist/img/logos/bivoik.png" />
  <title>Bivoik - Réservation de stages de survie partout en France</title>
	<?php wp_head() ?>
</head>

<body>
  <div class="wrapper">
    <header class="container-fluid" id="master-header">
      <div class="container">
        <div class="site-branding">

          <!-- navigation -->
          <nav class="site-navigation navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
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
            <div class="collapse navbar-collapse mainNav" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Les stages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Les survivants</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Deposez une offre</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown show">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-fr"></span> FR
                          </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-gb"></span> EN</a>
                    </div>
                  </div><!-- /dropdown -->
                </li>
              </ul>
            </div>
          </nav><!-- /navigation -->
					<?php
					// wp_nav_menu( array(
					// 	'theme_location' => 'menu-1',
					// 	'menu_id'        => 'primary-menu',
					// ) );
					 ?>
        </div><!-- /site-branding -->

        <div class="site-title">
          <h1>Reveillez votre instinct de survie</h1>
          <p>Réservez votre stage sélectionné par YAKAYGO, l'expert des activités de plein air</p>
          <img class="animate-arrow" src="<?php echo get_template_directory_uri() ;?>/dist/img/bg/line-with-arrow.png" alt="fleche de separation">
        </div>

        <div class="search">
          <form class="search-form" action="test.html" method="get">

            <div class="row">
              <div class="col-md i-group">
                <input class="form-control" placeholder="Entrez un lieu" type="search" name="place">
                <div class="i">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
              </div>
              <div class="col-md i-group">
                <select class="form-control" name="number">
                  <option value="" selected="selected">Nombre</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
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
                  <option value="" selected="selected">Niveau</option>
                  <option value="debutant">Débutant</option>
                  <option value="confirme">Confirmé</option>
                  <option value="expert">Expert</option>
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
                  <option value="" selected="selected">Thème</option>
                  <option value="bushcraft">Bushcraft</option>
                  <option value="peche">Pêche ceuillete</option>
                  <option value="decouverte">Journée découverte</option>
                  <option value="nature">Intensif nature</option>
                  <option value="urbain">Intensif urbain</option>
                  <option value="froid">Grand froid</option>
                  <option value="jungle">Jungle</option>
                  <option value="desert">Desert</option>
                </select>
                <div class="i">
                  <i class="fas fa-tag"></i>
                </div>
                <div class="angle-down">
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
              <button type="submit" class="col-md-2 btn btn-danger">
                <i class="fas fa-search"></i> <span>Chercher</span>
              </button>

            </div><!-- row -->

            <div class="row info">
              <div class="col">
                <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/expert.svg" alt="logo expert">
                <p>Des experts de la survie</p>
              </div>
              <div class="col">
                <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/couteau-suisse.svg" alt="logo expert">
                <p>Des thématiques spécifiques</p>
              </div>
              <div class="col">
                <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/cadeau.svg" alt="logo expert">
                <p>Offrez nos stages</p>
              </div>
            </div>
          </form>
        </div><!-- /search -->
      </div><!-- /container -->
    </header><!-- /master-header -->

    <section class="concept container">
        <h1 class="text-center">Concept</h1>
        <p>Bivoik sélectionne pour vous les meilleurs stages de survie. Vous serez amené à traverser des zones enneigées, des déserts, des forêts. Vos priorités seront de préparer un endroit où passer la nuit et de trouver à manger. Avant de partir, il est important de savoir dans quelle catégorie vous vous situez.</p>
      </section><!-- /concept -->

    <section class="niveaux container">
      <h1>Niveaux</h1>
      <div class="row">
        <div class="col-12 col-lg-4 decouverte">
          <div class="lvl-title text-center">
            <div class="lvl-img">
              <img src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/lvl.png" class="img-fluid" alt="logo-niveau" title="Niveau découverte">
              <img class="griffe img-fluid" src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/griffe-lvl-1.png" alt="griffe-lvl-1">
            </div>
              <h2><small>niveau</small> <p>découverte</p></h2>
          </div>
          <p>C'est votre premier stage de survie, vous n'avez jamais allumé un feu et l'idée de dormir à la belle étoile ne vous a jamais traversé l'esprit jusqu'à maintenant.</p>
        </div><!-- /decouverte -->
        <div class="col-12 col-lg-4 confirme">
          <div class="lvl-title text-center">
            <div class="lvl-img">
              <img src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/lvl.png" class="img-fluid" alt="logo-niveau" title="Niveau confirmé">
              <img class="griffe img-fluid" src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/griffe-lvl-2.png" alt="griffe-lvl-2">
            </div>
              <h2><small>niveau</small> <p>confirmé</p></h2>
          </div>
          <p>La survie, vous en avez déjà entendu parlé, peut être même que vous êtes renseigné sur le sujet. Vous êtes un randonneur aguerri et si vous chercher à repousser vos limites, vous êtes au bon endroit.</p>
        </div><!-- /confirme -->
        <div class="col-12 col-lg-4 expert">
          <div class="lvl-title text-center">
            <div class="lvl-img">
              <img src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/lvl.png" class="img-fluid" alt="logo-niveau" title="Niveau expert">
              <img class="griffe img-fluid" src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/griffe-lvl-3.png" alt="griffe-lvl-3">
            </div>
              <h2><small>niveau</small> <p>expert</p></h2>
          </div>
          <p>Vous êtes ici par passion, vous connaissez la survie sur le bout des doigts. Pas besoin d'en dire d'avantage, votre sac est déjà prêt.</p>
        </div><!-- /expert -->
      </div>
    </section><!-- /niveau -->

    <section class="themes container">
      <h1>Themes</h1>
      <div class="row">
				<?php if( null !== (get_terms('genre'))) : ?>
				<?php foreach (get_terms('genre') as $cat) : ?>
					<div class="col-6 col-lg-3">
						<a href="<?php echo get_term_link($cat->name , 'genre') ?>">
							<figure class="figure">
								<img src="<?php echo z_taxonomy_image_url($cat->term_id)?>" class="figure-img img-fluid" alt="Bushcraft">
								<figcaption class="figure-caption">
									<img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/<?php echo $cat->slug ?>.svg"/>
									<p><?php echo $cat->name ?></p>
								</figcaption>
								<div class="show">
									<a href="" class="btn btn-danger">Voir plus</a>
								</div>
							</figure>
						</a>
					</div>
				<?php endforeach; ?>
				<?php else: ?>
					<p>Aucun genre</p>
			  <?php endif; ?>


      </div><!-- /row -->
    </section><!-- themes -->

    <section class="top-stages container">
      <h1 class="top-stages-title" >Top stages</h1>
      <div class="row">
				<?php
				// The Query
				$args = array(
											'post_type' => 'stage',
											'post_status' => 'publish',
											'posts_per_page'=>3,
											'orderby'=>'ID',
											'order'=>'ASC',
											);

				$the_query = new WP_Query( $args );
				?>

				<?php if ($the_query->have_posts()) : ?>

					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="col-12 col-md-6 m-auto col-lg pb-5">
		          <article class="card">
		            <a href="<?php the_permalink()?>">
		              <div class="card-img">

										<?php
										$image = get_field('img-stage');

										if( !empty($image) ): ?>

											<img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										<?php endif; ?>

		                <div class="description-card-top">
		                  <div class="description-card-top-category">
		                    <div>
		                      <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/hachette.svg">
		                    </div>
		                    <div>
		                      <p>
		                        <span>intensif</span>
		                        <span>nature</span>
		                      </p>
		                    </div>
		                  </div>
		                  <div class="price-per-person">
		                    <p>
		                      <span class="price">
														<?php $price = get_field_object("price") ?>
														<?php echo $price['value'] .' ' . $price['append'] ?>
													</span>
		                      <span class="person">/ personne</span>
		                    </p>
		                  </div>
		                </div>
		                <div class="card-survivant">

		                  <figure class="figure">
		                    <img src="<?php echo get_template_directory_uri() ;?>/dist/img/stages/denis.png" class="figure-img img-fluid" alt="Prestataire">
		                    <figcaption class="figure-caption">Denis</figcaption>
		                  </figure>
		                </div>
		              </div>
		              <div class="card-body">
		                <h1 class="card-title"><?php the_title() ?></h1>
		                <div class="rating">
		                    <ul>
		                      <li><i class="fas fa-star"></i></li>
		                      <li><i class="fas fa-star"></i></li>
		                      <li><i class="fas fa-star"></i></li>
		                      <li><i class="fas fa-star"></i></li>
		                      <li><i class="far fa-star"></i></li>
		                    </ul>
		                    <span class="text-muted"> 43 avis</span>
		                </div>
		                <div class="card-text">
		                  <div class="row">
		                    <div class="col">
		                      <span>
														<i class="fas fa-map-marker-alt"></i>
														<?php $location = get_field('place');  ?>
														<?php echo $location['address']; ?>
													</span>
		                    </div>
		                  </div>
		                  <div class="row">
		                    <div class="col">
		                      <span>
														<i class="fas fa-stopwatch"></i>
														<?php $duration = get_field_object("duration") ?>
														<?php echo $duration['value'] .' ' . $duration['append'] ?>
													 </span>
		                    </div>
		                  </div>
		                  <div class="row">
		                    <div class="col">
		                      <span>
														<i class="fas fa-users"></i>
														<?php $numberPerson = get_field_object("number-person") ?>
														<?php echo $numberPerson['value'] .' ' . 				  			  		 ucfirst($numberPerson['append']) ?>
													</span>
		                    </div>
		                  </div>
		                  <div class="row">
		                    <div class="col">
		                      <span>
														<i class="fas fa-signal"></i>
														 <?php echo ucfirst(get_field('lvl')) ?>
													 </span>
		                    </div>
		                  </div>
		                </div>
		              </div>
		              <footer class="card-footer">
		                <small>Voir le stage</small>
		              </footer>
		            </a>
		          </article><!-- /card -->
		        </div>

					<?php endwhile; ?>
					<?php else : ?>
						<p>Aucun stage trouver</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

      </div><!-- /card-group -->
    </section><!-- /top-stages -->

    <section class="blog container">
      <h1><?php echo get_the_title(get_page_by_title( 'Blog' )); ?></h1>
			<?php
			// The Query
			$args = array(
										'post_type' => 'post',
										'post_status' => 'publish',
										'posts_per_page'=>1,
										'orderby'=>'ID',
										'order'=>'DESC',
										);

			$the_query = new WP_Query( $args );
			?>

				<!-- the loop -->
				<?php if ($the_query->have_posts()) : ?>

					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<?php // Individual Post Styling ?>
						<article class="row">
							<div class="col-12 order-12 col-md order-md-1">
								<h1><?php the_title() ?></h1>
								<p><?php the_excerpt()?></p>
								<div class="link">
									<a href="<?php echo get_permalink( get_page_by_title( 'Blog' ) ) ?>" class="btn btn-danger">Consulter le blog</a>
								</div>
							</div>
							<div class="blog-img col-12 order-1 col-md order-md-12 text-center">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-fluid")); ?>
								</a>
							</div>
						</article>

					<?php endwhile; ?>
					<?php else : ?>
						<p>Aucun article trouver</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

    </section><!-- /blog -->

    <div class="bg-feu">
      <div class="filter-footer container-fluid"></div>

      <!-- ancre haut de page -->
      <div class="cRetour">
        <a href="#" title="Retour haut de page">
          <i class="fas fa-caret-square-up"></i>
        </a>
      </div>

    </div>

    <footer class="container-fluid" id="master-footer">
      <nav class="container footer-navigation">

        <div class="row">
          <div class="col-12 col-md bivoik">
            <div class="bivoik-logo">
              <a href=""><img src="<?php echo get_template_directory_uri() ;?>/dist/img/logos/bivoik-black.svg" alt="Logo Bivoik" title="Bivoik"></a>
           </div>
           <ul>
             <li><a href="#">Le blog</a></li>
             <li><a href="#">Les moniteurs</a></li>
             <li><a href="#">Notre équipe</a></li>
             <li><a href="#">Devenez partenaire</a></li>
             <li><a href="#">Plan du site</a></li>
           </ul>
         </div> <!-- /col -->

         <div class="col-md-1 by">
           <p>BY</p>
         </div>

         <div class="col-12 col-md yakaygo">
           <div class="yakaygo-logo">
             <a href=""><img src="<?php echo get_template_directory_uri() ;?>/dist/img/logos/yakaygo-black.svg" alt="Logo Yakaygo" title="Yakaygo"></a>
          </div>
          <ul>
            <li><a href="#">Le site</a></li>
            <li><a href="#">Qui sommes-nous ?</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Nous contacter</a></li>
            <li><a href="#">Les garanties</a></li>
            <li><a href="#">Conditions générales</a></li>
            <li><a href="#">Service entreprise et CE</a></li>
          </ul>
        </div><!-- /col -->

          <div class="col col-md reseaux">
            <ul>
              <li><a href="https://www.facebook.com/Yakaygo/" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/YakayGo" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/yakaygo/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCgKZK7mSAnh8V8kXMoOjNJg" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
              <li><a href="https://plus.google.com/u/0/113498570641769538903" target="_blank" title="Google plus"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="https://www.linkedin.com/company/11088923/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div><!-- /col -->
        </div><!-- /row -->
      </nav> <!-- /footer-navigation -->
    </footer> <!-- /master-footer -->
  </div><!-- /wrapper -->


	<?php wp_footer() ?>
 </body>
</html>
