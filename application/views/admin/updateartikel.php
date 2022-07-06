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
					<h1 class="page-name">Update Artikel</h1><!-- 
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">checkout</li>
					</ol> -->
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="block billing-details">
                  <h4 class="widget-title">Isi Informasi Artikel</h4>
                  <?php foreach($loop_artikel as $artikel){?>
                  <form class="checkout-form" action="<?php echo base_url('Admin/List_artikel/update_artikel_aksi') ?>" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id" value="<?php echo $artikel->id?>">
                     <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?php echo $artikel->judul?>">
                     </div>
                     <div class="form-group">
                        <textarea name="konten" id="summernote-editor"><?php echo $artikel->konten?></textarea>
                     </div>  
                     <button class="btn btn-main" type="submit">Simpan</button>
                  </form>
                  <?php }?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <?php $this->load->view('tmp/footer.php')?>
   <!-- 
   Essential Scripts
   =====================================-->
   <?php $this->load->view('tmp/javascript.php')?>
    


  </body>
  </html>