<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bivouak
 */

?>

<div class="bg-feu">
	<div class="filter-footer container-fluid"></div>
</div>

	<!-- ancre haut de page -->
	<div class="cRetour">
		<a href="#" title="Retour haut de page">
			<i class="fas fa-caret-square-up"></i>
		</a>
	</div>

<footer class="container-fluid" id="master-footer">
	<nav class="container footer-navigation">
		<div class="row">
			<div class="col-12 col-md bivoik">
				<div class="bivoik-logo">
					<a href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri() ;?>/dist/img/logos/bivoik-black.svg" alt="Logo Bivoik" title="Bivoik"></a>
			 </div>
			 <?php
			 wp_nav_menu(array(
				 'theme_location' => 'menu-footer-bivouak',
			 ));
			 ?>
		 </div> <!-- /col -->



		 <div class="col-md-1 by">
			 <p><?php echo esc_html("BY") ?></p>
		 </div>

		 <div class="col-12 col-md yakaygo">
			 <div class="yakaygo-logo">
				 <a href="<?php echo esc_url("https://www.yakaygo.com/fr/") ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ;?>/dist/img/logos/yakaygo-black.svg" alt="Logo Yakaygo" title="Yakaygo"></a>
			</div>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-footer-yakaygo',
			));
			?>
		</div><!-- /col -->

			<div class="col col-md reseaux">
				<ul>
					<li><a href="<?php echo esc_url("https://www.facebook.com/Yakaygo/")?>" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
					<li><a href="<?php echo esc_url("https://twitter.com/YakayGo")?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
					<li><a href="<?php echo esc_url("https://www.instagram.com/yakaygo/")?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
					<li><a href="<?php echo esc_url("https://www.youtube.com/channel/UCgKZK7mSAnh8V8kXMoOjNJg")?>" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
					<li><a href="<?php echo esc_url("https://plus.google.com/u/0/113498570641769538903")?>" target="_blank" title="Google plus"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="<?php echo esc_url("https://www.linkedin.com/company/11088923/")?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
				</ul>
				<div class="newsletter">
					<p><?php echo esc_html("Inscrivez vous à notre Newsletter")?></p>
					<div class="newsletter-content">
						<?php get_sidebar() ?>
					</div>
				</div>
			</div><!-- /col -->
		</div><!-- /row -->
	</nav> <!-- /footer-navigation -->
</footer> <!-- /master-footer -->
</div><!-- /wrapper -->

	<?php wp_footer() ?>
	</body>
</html>
