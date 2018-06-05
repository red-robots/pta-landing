<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			if ( have_posts() ) : the_post(); 


			// Fields
			$title = get_field('title');
			$subtitle = get_field('subtitle');
			$text_second = get_field('text_second');
			// $what_you_get = get_field('what_you_get');
			$pricing = get_field('pricing');
			$pricing_disclaimer = get_field('pricing_disclaimer');
			$form = get_field('form');

			// echo '<pre>';
			// print_r($form);
			// echo '</pre>';
			?>


			<section class="hero">
				<div class="wrapper">
					<h1><?php echo $title; ?></h1>
					<h2><?php echo $subtitle; ?></h2>
					<p class="ayr">Are you Ready?</p>
					<div class="button">
						<a href="<?php echo '#signup'; ?>">CONTACT US</a>
					</div>
				</div>
			</section>

			<section class="second  section">
				<div class="wrapper">
					<div class="icon">
						<i class="fas fa-pencil-alt fa-10x" ></i>
					</div>
					<div class="description">
						<?php echo $text_second; ?>
					</div>
				</div>
			</section>

			<section class="what-you-get section">
				<div class="wrapper">
				<h2>WHAT YOU GET</h2>
				<?php if( have_rows('what_you_get') ) : ?>
					<div class="flexwrap">
					<?php while( have_rows('what_you_get') ) : the_row(); 
						$rtitle = get_sub_field('title');
						$description = get_sub_field('description');
				?>
						<div class="card">
							<div class="icon fa-3x">
								<i class="fas fa-check-circle"></i>
							</div>
							<h3><?php echo $rtitle; ?></h3>
							<div class="desc">
								<?php echo $description; ?>
							</div>
						</div>

					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				</div>
			</section>

			<section class="pricing  section">
				<div class="wrapper">
					<h2>PRICING</h2>
					<div class="card">
						<?php echo $pricing; ?>
						<div class="disclaimer">
							<?php echo 	$pricing_disclaimer;  ?>
						</div>
					</div>
				</div>
			</section>

			<section class="signup section">
				<div class="wrapper">
					<h2 id="signup">CONTACT</h2>
					<?php //echo do_shortcode('[gravityform id="' . $form . '" title="false" description="false"]'); ?>
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				</div>
			</section>


				
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
