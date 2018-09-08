<?php get_header(); ?>
<?php
/*
Template Name: Fiyatlandırmalar
*/
?>
<main><?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<section class="hero_in general" >
		<div class="wrapper">
		<div class="container"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="fadeInUp"><span></span><?php the_title();?></h1>
		</div>
		</div>
	</section>
	<!--/hero_in-->

	
	<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<div class="bg_color_1">
		<div class="container margin_60_35">
			<div class="row">
			<div class="col-md-12">
			<p><?php the_content();?></p>
			</div>
			
			</div>
			</div>
			</div>
	
	<!--/bg_color_1-->
	</main>
	<?php get_footer(); ?>