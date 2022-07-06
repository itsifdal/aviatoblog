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
					<h1 class="page-name">Published Article</h1><!-- 
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">checkout</li>
					</ol> -->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="user-dashboard page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <ul class="list-inline dashboard-menu text-center">
          <li><a class="active" href="#">Manage Artikel</a></li>
        </ul>
        <a href="<?php echo base_url("Admin/List_artikel/tambah_artikel")?>"><button class="btn btn-main">Tambah Artikel</button></a>

        <div class="dashboard-wrapper user-dashboard">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Create At</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Edit|Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($loop_artikel as $artikel){?>
                <tr>
                  <td><?= $artikel->createdat?></td>
                  <td><?= $artikel->judul?></td>
                  <td><?= $artikel->kategori?></td>
                  <td>
                    <div class="btn-group" role="group">
                      <form action="<?php echo base_url("Admin/List_artikel/update_artikel")?>" method="post" >
                        <input type="hidden" name="id" value="<?=$artikel->id?>">
                        <button class="btn btn-default btn-sm">
                          <i class="tf-pencil2"></i>
                        </button>
                      </form>
                      
                        <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $artikel->id?>">
                          <i class="tf-ion-close"></i>
                        </button>
                    </div>
                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   
<?php $this->load->view('tmp/footer.php')?>
    <!-- 
    Essential Scripts
    =====================================-->
    <?php $this->load->view('tmp/javascript.php')?>
    <?php foreach($loop_artikel as $artikel){?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $artikel->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin ingin hapus <?=$artikel->judul?> ?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <form method="post" action="<?php echo base_url('Admin/List_artikel/hapus_artikel')?>">
              <input type="hidden" name="id" value="<?php echo $artikel->id?>">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button class="btn btn-primary" type="submit">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php }?>


  </body>
  </html>