<?php get_header(); ?>
	
	<main>
		 
		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php the_category(', ') ?></h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60_35">
			
		<div class="wrapper-grid">
			<div class="row">
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a><?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							

<?php if ( is_user_logged_in() ) : ?>
 
							<a href="<?php the_permalink() ?>"><img src="<?php echo $thumb['0'];?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Devamını oku</span></div></a>
 
<?php else : ?>
 
							<a onclick="mesaj()"><img src="<?php echo $thumb['0'];?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Devamını oku</span></div></a>

 
<?php endif; ?>
							<small><?php the_category(', ') ?></small>
						</figure>
						<div class="wrapper">
							<h3><a href="hotel-detail.html"><?php the_title(); ?></a></h3>
							
						</div>
						<ul>
							<li><i class="ti-eye"></i> <?php the_time('j F Y') ?></li>
							<li><div class="score"><span>Vip<em>üyeler görebilir</em></span></div></li>
						</ul>
					</div>
				</div><?php endwhile; ?> 
				
				<!-- /box_grid -->
			</div>
			<!-- /row -->
			</div>
			<!-- /wrapper-grid -->
			
		
			
		</div>
		<!-- /container -->
		
		
		<!-- /bg_color_1 -->
		
	</main>
	<!--/main-->
	
	<?php get_footer(); ?>

  
</body>
</html>