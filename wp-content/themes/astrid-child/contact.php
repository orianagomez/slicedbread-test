<?php

/*

Template Name: Contact

*/
	get_header();
?>



	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h2>Address</h2>
					<p><?php echo CFS()->get('address'); ?></p>
					<h2>Phone Number</h2>
					<p><?php echo CFS()->get('phone_number'); ?></p>
					<h2>Email Address</h2>
					<p><?php echo CFS()->get('email'); ?></p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]'); ?>
				</div>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>