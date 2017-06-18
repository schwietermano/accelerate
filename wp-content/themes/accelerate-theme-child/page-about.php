<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- <section class="home-page-about">
	<div class="site-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class='homepage-about-tag'>
							<?php the_content(); ?>
						</div>
			<?php endwhile; // end of the loop/content ?>
	</div> <!--.site-content -->
<!-- </section><!-- .home-page dpulicate for About page-->

<section id="primary" class="about-page">
	<div id="content" class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero'>
				<?php the_content(); ?>
				<h2><span class="main-color">Accelerate</span> is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> businesses by making our clients visible and<br> making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</section><!-- about-page -->


<!-- <section class="our-services">
		<div class="services-header">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>

			<ul class="about-services"> -->
				<?php query_posts('posts_per_page=4&post_type=services'); ?>
					<?php while( have_posts() ) : the_post();
						$icon = get_field('icon');
						$size = "thumbnail";
					?>
					<li class="individual-services">
						<figure class="individual-image">
							<?php echo wp_get_attachment_image($icon, $size); ?>
						</figure>

						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<!-- <h4><?php the_title(); ?></h4>
						<p><?php the_content(); ?></p> -->
					</li>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>


		<div class="cta">  <!--call to action-->
				<h3>Interested in working with Us?
					<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></h3>
		</div>
</section>

<?php get_footer(); ?>
