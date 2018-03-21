<?php
/**
 * Template part for the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bivouak
 */

?>

<section class="concept container">
    <h1 class="text-center"><?php echo esc_html( "Concept" ) ?></h1>
    <p><?php echo esc_html( "Bivoik sélectionne pour vous les meilleurs stages de survie. Vous serez amené à traverser des zones enneigées, des déserts, des forêts. Vos priorités seront de préparer un endroit où passer la nuit et de trouver à manger. Avant de partir, il est important de savoir dans quelle catégorie vous vous situez." ) ?></p>
  </section><!-- /concept -->

<section class="niveaux container">
  <h1><?php echo esc_html( "Niveaux" ) ?></h1>
  <div class="row">
    <div class="col-12 col-lg-4 decouverte">
      <div class="lvl-title text-center">
        <div class="lvl-img">
          <img src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/lvl.png" class="img-fluid" alt="logo-niveau" title="Niveau découverte">
          <img class="griffe img-fluid" src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/griffe-lvl-1.png" alt="griffe-lvl-1">
        </div>
          <h2><small><?php echo esc_html("niveau")?></small> <p><?php echo esc_html( "découverte" ) ?></p></h2>
      </div>
      <p><?php echo esc_html( "C'est votre premier stage de survie, vous n'avez jamais allumé un feu et l'idée de dormir à la belle étoile ne vous a jamais traversé l'esprit jusqu'à maintenant.")?></p>
    </div><!-- /decouverte -->
    <div class="col-12 col-lg-4 confirme">
      <div class="lvl-title text-center">
        <div class="lvl-img">
          <img src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/lvl.png" class="img-fluid" alt="logo-niveau" title="Niveau confirmé">
          <img class="griffe img-fluid" src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/griffe-lvl-2.png" alt="griffe-lvl-2">
        </div>
          <h2><small><?php echo esc_html("niveau")?></small> <p><?php echo esc_html("confirmé")?></p></h2>
      </div>
      <p><?php echo esc_html( "La survie, vous en avez déjà entendu parlé, peut être même que vous êtes renseigné sur le sujet. Vous êtes un randonneur aguerri et si vous chercher à repousser vos limites, vous êtes au bon endroit." )?></p>
    </div><!-- /confirme -->
    <div class="col-12 col-lg-4 expert">
      <div class="lvl-title text-center">
        <div class="lvl-img">
          <img src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/lvl.png" class="img-fluid" alt="logo-niveau" title="Niveau expert">
          <img class="griffe img-fluid" src="<?php echo get_template_directory_uri() ;?>/dist/img/niveaux/griffe-lvl-3.png" alt="griffe-lvl-3">
        </div>
          <h2><small><?php echo esc_html("niveau")?></small> <p><?php echo esc_html( "expert" ) ?></p></h2>
      </div>
      <p><?php echo esc_html( "Vous êtes ici par passion, vous connaissez la survie sur le bout des doigts. Pas besoin d'en dire d'avantage, votre sac est déjà prêt." ) ?></p>
    </div><!-- /expert -->
  </div>
</section><!-- /niveau -->

<section class="themes container">
  <h1><?php echo esc_html( "Themes" ) ?></h1>
  <div class="row">
    <?php if (null !== (get_terms('genre'))) : ?>
    <?php foreach (get_terms('genre') as $cat) : ?>
      <div class="col-6 col-lg-3">
          <figure class="figure figure-theme">
            <img src="<?php echo z_taxonomy_image_url($cat->term_id)?>" class="figure-img img-fluid" alt="Bushcraft">
            <figcaption class="figure-caption">
              <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/<?php echo $cat->slug ?>.svg"/>
              <p><?php echo $cat->name ?></p>
            </figcaption>
            <div class="show">
              <a href="<?php echo get_term_link($cat->name, 'genre') ?>" class="btn btn-danger"><?php echo esc_html( "Voir plus" ) ?></a>
            </div>
          </figure>
      </div>
    <?php endforeach; ?>
    <?php else: ?>
      <p><?php echo esc_html( "Aucun genre" ) ?></p>
    <?php endif; ?>


  </div><!-- /row -->
</section><!-- themes -->

<section class="top-stages container">
  <h1 class="top-stages-title" ><?php echo esc_html( "Top stages" ) ?></h1>
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

            $the_query = new WP_Query($args);
            ?>

    <?php if ($the_query->have_posts()) : ?>

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php $id_post_origine = get_the_ID(); //For reset the post object ?>

        <div class="col-12 col-md-6 m-auto col-lg pb-5">
          <article class="card">
            <a href="<?php the_permalink()?>">
              <div class="card-img">
                <?php
                                    $image = get_field('img-stage');
                                    if (!empty($image)): ?>
                  <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                <div class="description-card-top">
                  <div class="description-card-top-category">
                    <div>
                      <img src="<?php echo get_template_directory_uri() ;?>/dist/img/pictos/<?php $term = wp_get_post_terms($post->ID, 'genre'); ?><?php echo($term[0]->slug) ?>.svg">
                    </div>
                    <div>
                      <p>
                        <span>
                          <?php $term = wp_get_post_terms($post->ID, 'genre'); ?>
                          <?php echo($term[0]->name) ?>
                       </span>
                      </p>
                    </div>
                  </div>
                  <div class="price-per-person">
                    <p>
                      <span class="price">
                        <?php $price = get_field_object("price") ?>
                        <?php echo $price['value'] .' ' . $price['append'] ?>
                      </span>
                      <span class="person"><?php echo esc_html( "/ personne" ) ?></span>
                    </p>
                  </div>
                </div>
                <div class="card-survivant">
                  <?php
                  $post_object = get_field('monitor');
                  if( $post_object ):
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post );
                    ?>
                    <figure class="figure">
                      <?php $image = get_field('img_monitor');  ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <figcaption class="figure-caption"><?php the_title() ?></figcaption>
                    </figure>

                  <?php $post = $id_post_origine; setup_postdata( $post ); //reset post object ?>
                  <?php endif; ?>
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
                    <span class="text-muted"><?php echo esc_html( " 43 avis" ) ?></span>
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
                <small><?php echo esc_html( "Voir le stage" ) ?></small>
              </footer>
            </a>
          </article><!-- /card -->
        </div>

      <?php endwhile; ?>
      <?php else : ?>
        <p><?php echo esc_html( "Aucun stage trouver" ) ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

  </div><!-- /card-group -->
</section><!-- /top-stages -->

<section class="blog container">
  <h1><?php echo get_the_title(get_page_by_title('Blog')); ?></h1>
  <?php
        // The Query
        $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page'=>1,
                                    'orderby'=>'ID',
                                    'order'=>'DESC',
                                    );

        $the_query = new WP_Query($args);
        ?>

    <!-- the loop -->
    <?php if ($the_query->have_posts()) : ?>

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php // Individual Post Styling?>
        <article class="row">
          <div class="col-12 order-12 col-md order-md-1">
            <h1><?php the_title() ?></h1>
            <p><?php the_excerpt()?></p>
            <div class="link">
              <a href="<?php echo get_permalink(get_page_by_title('Blog')) ?>" class="btn btn-danger"><?php echo esc_html( "Consulter le blog" ) ?></a>
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
        <p><?php echo esc_html( "Aucun article trouver" ) ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

</section><!-- /blog -->
