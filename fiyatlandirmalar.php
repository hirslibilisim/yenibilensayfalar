<?php get_header(); ?>
<?php
/*
Template Name: Fiyatlandırmalar
*/
?>
<main><?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<section class="hero_in general" style="background:url(<?php echo $thumb['0'];?>);">
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
			<div class="col-md-6">
			<p><?php the_content();?></p>
			</div>
			
			</div>
			</div>
			</div>
	<div class="bg_color_1">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>İade sistemi varmıdır ?</h4>
						<p>Yıllık alımlarda aldığınız üyelik kadar yıl içerisinde kazanç sağlayamazsanız paranızın %50'si iade edilecektir.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Kuponları kim sunuyor?</h4>
<p>Kuponları bilenabi sunuyor.</p>					</div>
				</div>
			</div>
			<!-- /row  -->
			<div class="row">
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Kuponlar kesin tutuyormu?</h4>
						<p>Hayır,kesin tutma gibi bir şey söz konusu değildir.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Nasıl üye olabilirim ?</h4>
<p>Başvur kısmında ki linklerden üye olabilirsiniz.</p>					</div>
				</div>
			</div>
			<!-- /row  -->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->
	</main>
	<?php get_footer(); ?>