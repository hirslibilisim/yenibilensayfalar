<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3><?php bloginfo('name'); ?> kazandırıyor</h3>
					<p>İstediğin tahminler uzmanından yayınlanıyor! Bilen abi çok kazandırıyor.</p>
					
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="container-fluid margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2><?php bloginfo('name'); ?> sitesinde herşey var!</h2>
				<p>Bilenabi'nin efsanevi tahminlerini görmek için sadece üye olman yeterlidir!</p>
			</div>
			
			<div id="reccomended" class="owl-carousel owl-theme">
			<?php query_posts('showposts=6'); ?><?php while (have_posts()) : the_post(); ?>
				<div class="item">
					<div class="box_grid">
						<figure><?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<a href="#0" class="wish_bt"></a>
							<?php if ( is_user_logged_in() ) : ?>
 
							<a href="<?php the_permalink() ?>" ><img src="<?php echo $thumb['0'];?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Devamını oku</span></div></a>

 
<?php else : ?>
 
							<a  onclick="mesaj()"><img src="<?php echo $thumb['0'];?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Devamını oku</span></div></a>

 
<?php endif; ?>
							<small>VİP Üyeler Görebilir</small>
						</figure>
						<div class="wrapper">
						<?php if ( is_user_logged_in() ) : ?>
 
<h3><a ><?php the_title(); ?></a></h3>
 
<?php else : ?>
 
<h3><a onclick="mesaj()" ><?php the_title(); ?></a></h3>
 
<?php endif; ?>
							
							
							
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> <?php the_time('j F Y') ?></li>
							<li><div class="score"><strong style="color:white;"><?php the_category(', ') ?></strong></div></li>
						</ul>
					</div>
				</div><?php endwhile;?>
				<!-- /item -->
				
				<!-- /item -->
				
				<!-- /item -->
			
				<!-- /item -->
				
				<!-- /item -->
				
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<div class="container">
				<p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">Tüm diğer tahminlere göz at</a></p>
			</div>
			<!-- /container -->
			<hr class="large">
		</div>
		<!-- /container -->
		
		<div class="container-fluid margin_30_95 pl-lg-5 pr-lg-5">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2><?php bloginfo('name'); ?> öğretici videolarına göz at</h2>
					
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="https://www.youtube.com/watch?v=FighW8ywQ3k" target="_blank" class="grid_item">
							<figure>
								<div class="score"><strong>youtube.com'da izle</strong></div>
								<img src="data:image/jpeg;base64,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" class="img-fluid" alt="">
								<div class="info">
									
									<h3>AT YARIŞI ( ALTILI GANYAN ) NASIL OYNANIR ? NEDİR ?</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="hotel-detail.html" class="grid_item">
							<figure>
								<div class="score"><strong>youtube.com'da izle</strong></div>
								<img src="https://3.bp.blogspot.com/-k0aWeDIFDuY/WOS6_5yi34I/AAAAAAAAHxg/gxjMWUVUIA8V-ZGiSboVDM4ipp2T4fncACLcB/s1600/at-yarisi-tahminleri.jpg" class="img-fluid" alt="">
								<div class="info">
									
									<h3>AT YARIŞI ( BEŞLİ GANYAN - 4'LÜ VE 3'LÜ GANYAN ) NASIL OYNANIR ? NEDİR ? </h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
				
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="https://www.youtube.com/watch?v=JAfkO_HuEO0" target="_blank" class="grid_item">
							<figure>
								<div class="score"><strong>youtube.com'da izle</strong></div>
								<img src="data:image/jpeg;base64,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" class="img-fluid" alt="">
								<div class="info">
									
									<h3>AT YARIŞI ( YEDİLİ PLASE ) NASIL OYNANIR ? NEDİR ?</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /row -->
				
			</section>
			<!-- /section -->
			
	
			<!-- /section -->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h3><?php bloginfo('name'); ?> tanıtım videomuza göz at</h3>
					
				</div>
				<div class="row">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JDWRhhVbJo0" allowfullscreen></iframe>
</div>

					<!-- /box_news -->
				</div>
				<!-- /row -->
				
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3><?php bloginfo('name'); ?> sitesine üye olmak için whatsapp'dan ulaş</h3>
							<a href="#0" class="btn_1 rounded">(+90)5324878163</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->