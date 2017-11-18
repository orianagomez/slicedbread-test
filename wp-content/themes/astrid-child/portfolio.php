<?php

/*

Template Name: Portfolio

*/
	get_header();

	$args = array(
    'post_type'     => 'project',
    'orderby'       => 'rand',
    'post_status'   => 'publish',
    'post_per_page' => 4,
	);

	$featured_projects = new WP_Query( $args );
?>

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">

				<h1>Our Work</h1>
				<div class="portfolio-box">
				<?php if($featured_projects->have_posts()): ?>
					<?php while ( $featured_projects->have_posts() ) : $featured_projects->the_post(); ?>
	    				<?php $project_id = get_the_ID (); ?>
	    				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 project-wrapper">
							<a href="<?php echo get_permalink($project_id); ?>">
		    					<?php the_post_thumbnail('astrid-large-thumb'); ?>
								<div class="overlay text-center">
			    					<?php the_title( '<h3 class="overlay-text">', '</h3>' ); ?>
								</div>
							</a>
	    				</div>
					<?php endwhile; ?>
    			<?php endif; ?>
    			</div>
    			<?php wp_reset_query(); ?>
				</div>
				<div class="row">
					<h1>Our Clients</h1>
					<?php get_template_part( 'template-parts/clients', '' ); ?>
				</div>
			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>