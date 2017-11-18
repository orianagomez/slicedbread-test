<?php

/*

Template Name: About

*/
	get_header();
?>



	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php echo CFS()->get('header_about'); ?></h1>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p><?php the_content(); ?></p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p><?php echo CFS()->get('subcontent_about'); ?></p>
				</div>

				

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>