<?php
/**
 * The template for displaying all pages
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
		<div id="content" role="main">
      <div class="main-page">
        <div class="error-icon">
        	<img class="expand" src="http://localhost/accelerate/wp-content/uploads/2017/07/error-img.png" alt="404-img">
        </div>
      	<div class="error-message">
        	<h2>Oops! We're Sorry!</h2>
        	<p>This page does not exist or has been moved.  Sorry about that!</p>
        	<p>Feel free to check out our <a href="http://localhost/accelerate/blog"><span>blog</span></a> or some of our featured <a href="http://localhost/accelerate/case-studies"><span>work!</span></a></p>
      	</div>
			</div>
		</div><!-- #content -->
</div><!-- .site-content -->


<?php get_footer(); ?>
