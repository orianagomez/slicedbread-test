<?php

/*

Template Name: Home

*/
	get_header();
?>



	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<p><?php the_content(); ?></p>
				<!--testimonials-->
				<div class="row quote">
					<img src="<?php echo CFS()->get('testimonial_image'); ?>">
					<div class="quote-overlay">
						<h2><i class="fa fa-quote-left" aria-hidden="true"></i><?php echo CFS()->get('testimonial'); ?><i class="fa fa-quote-right" aria-hidden="true"></i></h2>
						<h3><?php echo CFS()->get('testimonial_author'); ?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2><?php echo CFS()->get('feature_title'); ?></h2>
						<?php echo CFS()->get('feature_content'); ?>
					</div>
					<div class="col-md-8">
						<?php $list = CFS()->get('feature_icons'); ?>
						<div class="grid">
							<?php $i=0; 
							foreach($list as $icon) {
								$i++; ?>
								<div class="grid-elem col-sm-3 col-xs-6">
									<h4><?php echo $icon['caption']?></h4>
									<p><?php echo $icon['text']?></p>
								</div>
								<?php if($i % 4 == 0) { ?>
									</div><div class="grid">
								<?php }
							} ?>
						</div>
					</div>
				</div>
				

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>