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

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <img src="<?php echo base_url('assets/images/logo.png')?>" alt="">
          </a>
          <h2 class="text-center">Silahkan Login</h2>
          <?php echo $this->session->flashdata('notif')?>
          <form class="text-left clearfix" action="<?php echo base_url('Login/proses_login') ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group ">
              <div class="right-inner-addon">
                <i class="fa fa-eye" onclick="showpw()"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center">Submit</button>
            </div>
          </form>
        </div>
      </div><!-- col-md-6 -->
    </div>
  </div>
</section>

    <?php $this->load->view('tmp/javascript.php')?>
    <!-- Page Specific JS File -->
    <script type="text/javascript">
      function showpw() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>


  </body>
  </html>