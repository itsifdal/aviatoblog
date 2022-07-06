<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('tmp/head.php')?>

<body id="body">

<!-- Start Top Header Bar -->
<?php $this->load->view('tmp/top_header.php')?>
<!-- End Top Header Bar -->


<!-- Main Menu Section -->
<?php $this->load->view('tmp/navbar.php')?>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Blog</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">blog</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<?php foreach($loop_artikel as $artikel){?>
			<div class="col-md-12">
				<div class="post post-single">
					<a href="<?php echo base_url('Artikel'); ?>"><button class="btn btn-main">Kembali</button></a><br><hr>
					<div class="post-thumb">
						<img class="img-responsive" src="<?php echo base_url('uploadcover/'.$artikel->cover); ?>" alt="">
					</div>
					<h2 class="post-title"><?php echo $artikel->judul; ?></h2>
					<div class="post-meta">
						<ul>
							<li>
								<i class="tf-ion-ios-calendar"></i> <?php echo $artikel->createdat; ?>
							</li>
							<li>
								<a href="#!"><i class="tf-ion-ios-pricetags"></i><?php echo $artikel->kategori; ?></a>
							</li>
						</ul>
					</div>
					<div class="post-content post-excerpt">
						<p><?php echo $artikel->konten; ?>.</p>
				    </div>
				</div>
			<?php }?>

			</div>
		</div>
	</div>
</div>

<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
					<li>
						<a href="shop.html">SHOP</a>
					</li>
					<li>
						<a href="pricing.html">Pricing</a>
					</li>
					<li>
						<a href="contact.html">PRIVACY POLICY</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <?php $this->load->view('tmp/javascript.php')?>
    


  </body>
  </html>