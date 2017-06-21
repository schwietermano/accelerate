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

<section class="about-page">
	<div class="site-content" role="main"> <!--	// class="about-page,site-content" -->
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->

		<section class="our-services">
				<div class="site-content">
						<h4>Our Services</h4>
						<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
				  <ul class="about-page-services">

					 <?php query_posts('posts_per_page=4&post_type=services'); ?>
					   <?php while( have_posts() ) : the_post();
					   	$icon1 = get_field('icon_1');
							$icon2 = get_field('icon_2');
							$icon3 = get_field('icon_3');
							$icon4 = get_field('icon_4');
					  	$size = "thumbnail";
					?>
					<li class="individual-services">
						<figure class="individual-image">
							<?php echo wp_get_attachment_image($icon1, $size); ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php $content_strategy = get_field('content_strategy');
								echo $content_strategy;
								?>
							<?php echo wp_get_attachment_image($icon2, $size); ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php $influencer_mapping = get_field('influencer_mapping');
								echo $influencer_mapping;
								?>
							<?php echo wp_get_attachment_image($icon3, $size); ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php $social_media_strategy = get_field('social_media_strategy');
								echo $social_media_strategy;
								?>
							<?php echo wp_get_attachment_image($icon4, $size); ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php $design_and_development = get_field('design_and_development');
								echo $design_and_development;
								?>
						</figure>
					</li>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
</section>

<section class="cta">  <!--call to action-->
			<h3>Interested in working with Us?
					<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></h3>
</section>



<?php get_footer(); ?>
