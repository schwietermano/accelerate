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

<div id="primary" class="site-content">
	<!-- <div id="content" role="main"> -->
	<div class="about-header">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero' id="banner">
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div> <!-- .about-header -->

		<section class="our-services">
				<div class="about-services">
						<h6>Our Services</h6>
						<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
				</div>
				  <ul class="about-page-services">

					   <?php while( have_posts() ) : the_post();
					  	$size = "thumbnail";
							$content_strategy = get_field('content_strategy');
							$influencer_mapping = get_field('influencer_mapping');
							$social_media_strategy = get_field('social_media_strategy');
							$design_and_development = get_field('design_and_development');
							$image1 = get_field('image1');
							$image2 = get_field('image2');
							$image3 = get_field('image3');
							$image4 = get_field('image4');
					?>

				<!--	<section class= "individual-services">-->
							<div class="about-servies-main">
						<!--	<div class="listed-services">-->

								<?php if($image1) { ?>
									<div class="service-1">
										<div class="content-strategy">
											<h3> Content Strategy</h3><p><?php echo $content_strategy; ?></p>
										</div>
										<figure class="img-1">
											<?php echo wp_get_attachment_image( $image1, $size ); ?>
										</figure>
									</div>
								<?php } ?>

								<?php if($image2) { ?>
									<div class="service-2">
										<div class="influencer-mapping">
											<h3> Influencer Mapping</h3><p><?php echo $influencer_mapping; ?></p>
										</div>
										<figure class="img-2">
											<?php echo wp_get_attachment_image( $image2, $size ); ?> <!--echo wp_get_attachment_image( $image_2, $size ); -->
										</figure>
									</div>
								<?php } ?>

								<?php if($image3) { ?>
									<div class="service-3">
										<div class="social-media">
											<h3> Social Media Strategy</h3><p><?php echo $social_media_strategy; ?></p>
										</div>
										<figure class="img-3">
											<?php echo wp_get_attachment_image( $image3, $size ); ?> <!-- echo wp_get_attachment_image( $image_3, $size ); -->
										</figure>
									</div>
								<?php } ?>

								<?php if($image4) { ?>
									<div class="service-4">
										<div class="design-dev">
											<h3> Design & Development</h3><p><?php echo $design_and_development; ?></p>
										</div>
										<figure class="img-4">
											<?php echo wp_get_attachment_image( $image4, $size ); ?> <!-- echo wp_get_attachment_image( $image_3, $size ); -->
										</figure>
									</div>
								<?php } ?>

							</div>
					<!-- </section>-->

				<?php endwhile; ?>
			</ul>
</section>

<section class="cta">  <!--call to action-->
			<h3>Interested in working with us?
					<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></h3>
</section>



<?php get_footer(); ?>

</div>





<!--

// line 14 <section class="home-page-about">
 <div class="site-content">
				 <?php while ( have_posts() ) : the_post(); ?>
					 <div class='homepage-about-tag'>
						 <?php the_content(); ?>
					 </div>
		 <?php endwhile; // end of the loop/content ?>
 </div>  <!--.site-content -->
<!--</section><!-- .home-page dpulicate for About page-->

<!--
// line 81 <li class="individual-services">
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
			</li> -->
