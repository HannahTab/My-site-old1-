<?php /* Template Name: CONTACTPageTemplateV1 */ ?>

<?php get_header(); ?>


	<main role="main">	
	
	<img src="/wordpress_test/wp-content/themes/My_test_theme/images/IMG_1865crop3.jpg"/>
		<!-- section -->
		<section>
		
			<div class="page_content">

				<h1><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

					<?php endif; ?>
		
			</div>
			
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar('contactpage'); ?>

<div class="footer">
<?php get_footer(); ?>
</div>