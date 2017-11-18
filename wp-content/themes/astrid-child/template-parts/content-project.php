<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>
	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'featured_image' ) != 1 ) ) : ?>
		
		<div class="single-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('astrid-large-thumb'); ?></a>
		</div>	
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->	

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<img src="<?php echo CFS()->get('image_1'); ?>" alt="image_1">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<img src="<?php echo CFS()->get('image_2'); ?>" alt="image_2">
		</div>
	</div>

	<div class="entry-content feature">
		<h2>Our Process</h2>
		<?php echo CFS()->get('features'); ?>
	</div>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'astrid' ),
			'after'  => '</div>',
		) );
	?>
		
	<footer class="entry-footer">
		<?php astrid_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
