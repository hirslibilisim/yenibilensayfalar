<!DOCTYPE html>
<html lang="en">
<?php wp_head();?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-144x144-precomposed.png">
<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/vendors.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <!-- YOUR CUSTOM CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
	
	<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="<?php echo get_option('home'); ?>">
				<h3 class="logo_normal" style="color:white; font-family: 'Francois One', sans-serif;

" ><?php bloginfo('name'); ?></h3>
				<h3 class="logo_sticky"><?php bloginfo('name'); ?></h3>
			</a>
		</div>
		
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="#0">Anasayfa</a></span>
					
				</li>
				
				
				<li><span><a href="#0">Kategoriler</a></span>
					<ul>
					<?php wp_list_categories('show_count=0&title_li='); ?>
						
					</ul>
				</li>
				<li><span><a href="#0">Bilgilendirici Sayfalar</a></span>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					
					</ul>
				</li>
				<li><span><a href="#0">
<?php if ( is_user_logged_in() ) : ?>
 
Hoşgeldiniz <?php global $current_user; 
      get_currentuserinfo(); 


echo ',' . $current_user->user_login . "\n"; 
    
?>
 
<?php else : ?>
 
<a href="http://localhost/hesabim/">Giriş Yap</a>
 
<?php endif; ?></a></span>
<script>
function mesaj() 
{ 
 
swal("Üye girişi yapınız.", "Tahmini görebilmek için üye girişi yapmanız gerekir.");

 } </script>
 <?php if ( is_user_logged_in() ) : ?>
 
<ul>
                    	<li><a href="http://localhost/hesabim/hesapayarlari">Üye Ayarları</a></li>
                    <li><a  href="<?php echo wp_logout_url( home_url() ); ?>">Güvenli Çıkış</a></li>
					</ul>
 
<?php else : ?>
 

 
<?php endif; ?>
					
				</li>
				
			</ul>
		</nav>

	</header>
	<!-- /header -->