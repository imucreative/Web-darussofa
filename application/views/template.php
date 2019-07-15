<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Pesantren Tahfizh Al-Quran Darussofa">
		<meta name="author" content="Pesantren Tahfizh Al-Quran Darussofa">
		<title>Pesantren Tahfizh Al-Quran Darussofa</title>
		<link rel="shortcut icon" href="<?php echo base_url()."uploads/logo_aja.png";?>"/>
		
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/font-awesome.min.css" >
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/animate.min.css" >
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/prettyPhoto.css" >
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/main.css" >
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/responsive.css">
		<link rel="stylesheet" href="<?php echo base_url()?>theme/front/css/datatables/dataTables.bootstrap.css">
		<?php
		/*
		<!--[if lt IE 9]>
		<script src="<?php echo base_url()?>theme/front/js/html5shiv.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/respond.min.js"></script>
		<![endif]-->
		*/
		?>
		
		<!--
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
		-->
	</head>
	<body class="homepage">
		<header id="header">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<div class="top-number"><p><i class="fa fa-phone-square"></i> 0857-7241-3422</p></div>
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="social">
								<!--
								<ul class="social-share">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
								-->
								<!--
								<div class="search">
									<form role="form">
									<input type="text" class="search-form" autocomplete="off" placeholder="Search">
									<i class="fa fa-search"></i>
									</form>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-inverse" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url()?>uploads/logo.png" alt="logo"></a>
					</div>
					<div class="collapse navbar-collapse navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bookmark"></i> Profil <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url();?>latar_belakang"><i class="fa fa-angle-right"></i> Latar Belakang</a></li>
									<li><a href="<?php echo base_url();?>sejarah"><i class="fa fa-angle-right"></i> Sejarah</a></li>
									<li><a href="<?php echo base_url();?>visi_misi"><i class="fa fa-angle-right"></i> Visi & Misi</a></li>
									<li><a href="<?php echo base_url();?>struktur_organisasi"><i class="fa fa-angle-right"></i> Struktur Organisasi</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> Program <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url();?>program_tahfizh_quran"><i class="fa fa-angle-right"></i> Program Tahfizh Al-Qur'an</a></li>
									<li><a href="<?php echo base_url();?>program_tahfizh_quran/smp"><i class="fa fa-angle-right"></i> Program SMP Tahfizh Al-Qur'an Darussofa</a></li>
									<li><a href="<?php echo base_url();?>program_tahfizh_quran/sma"><i class="fa fa-angle-right"></i> Program SMA Tahfizh Al-Qur'an Darussofa</a></li>
									<li class='active'><a href="<?php echo base_url();?>program_tahfizh_quran/dauroh_quran_14_hari_hafal_2_juz"><i class="fa fa-angle-right"></i> Dauroh Al-Qur'an 14 Hari Hafal 2 Juz</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url();?>ppdb"><i class="fa fa-sign-in"></i> PPDB</a></li>
							<li><a href="<?php echo base_url();?>gallery"><i class="fa fa-picture-o"></i> Gallery</a></li>
							<li><a href="<?php echo base_url();?>contact"><i class="fa fa-phone"></i> Contact</a></li>
							<li class="active"><a href="<?php echo base_url();?>donasi"><i class="fa fa-money"></i> Donasi</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
		</header>
		<div class="flying-robot">
			<a href="<?php echo base_url();?>donasi"><img width="50%" src="<?php echo base_url();?>uploads/donasi/donasi.png" alt="Donasi Pesantren Tahfizh Al-Quran Darussofa" title="Donasi Pesantren Tahfizh Al-Quran Darussofa"/></a>
		</div>
		<!-- start: MAIN CONTAINER -->
			<?php echo $contents; ?>	<!--================================================================================================-->
		<!-- end: MAIN CONTAINER -->
		
		<!--
		<section id="bottom">
			<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
			<div class="row">
			<div class="col-md-3 col-sm-6">
			<div class="widget">
			<h3>Information</h3>
			<ul>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			</ul>
			</div>
			</div>
			<div class="col-md-3 col-sm-6">
			<div class="widget">
			<h3>Events</h3>
			<ul>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			</ul>
			</div>
			</div>
			<div class="col-md-3 col-sm-6">
			<div class="widget">
			<h3>Volunteer</h3>
			<ul>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			</ul>
			</div>
			</div>
			<div class="col-md-3 col-sm-6">
			<div class="widget">
			<h3>Recommended Links</h3>
			<ul>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			</ul>
			</div>
			</div>
			</div>
			</div>
		</section>
		-->
		
		<footer id="footer" class="midnight-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						&copy; 2017 <a href="<?php echo base_url();?>" title="Yayasan Darussofa Ciburayut Bogor - Pesantren Tahfizh Al-Qur'an">Yayasan Darussofa Ciburayut Bogor - Pesantren Tahfizh Al-Qur'an.</a>
					</div>
					<div class="col-sm-6">
						<ul class="pull-right">
							<div align='center'><a href='http://darussofa.org/'><img src='http://www.hit-counts.com/counter.php?t=MTQyMjU5MQ==' border='0' alt="Darussofa Ciburayut Pesantren Tahfizh Al-Qur'an"></a></div>
							<!--
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							-->
						</ul>
					</div>
					<!--
					<div class="col-sm-6">
						<ul class="pull-right">
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="prayers.html">Prayers</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact-us.html">Contact</a></li>
						</ul>
					</div>
					-->
				</div>
			</div>
		</footer>
		
		<script src="<?php echo base_url()?>theme/front/js/jquery.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/jquery.prettyPhoto.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/main.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/wow.min.js"></script>
		<script src="<?php echo base_url()?>theme/front/js/datatables/dataTables.bootstrap.js"></script>
		<script id="dsq-count-scr" src="//pesantren-darussofa-ciburayut.disqus.com/count.js" async></script>
	</body>
</html>