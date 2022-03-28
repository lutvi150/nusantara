<!DOCTYPE html>
<html>
<head>
	<title>Login | Nusantara Kertas FR</title>
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/img/logo.png');?>">
  <link rel="icon" type="image/png" href="<?=base_url('assets/img/logo.png');?>">
	<?php $this->view($head); ?>
  
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
          <div class="row" style="height: 100%;">
            <div class="col-md-4" style="background-color: #fff; padding-top: 50px;">
              <div class="container" style="padding-top: 50px;">
                <div align="center"><img src="<?php echo base_url('assets/img/logo.png'); ?>" style="width: 120px;"></div>
                <form method="post" action="<?php echo base_url(); ?>login/login_akses" style="padding: 30px; margin-left: 10px;">
                  <?php echo $this->session->flashdata("msg");?>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" style="padding: 5px 12px;">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" style="padding: 5px 12px;">
                  </div>
                  <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="remember">Selalu Masuk
                    </label>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-block" style="background-color: #58A5FE; color: white;">MASUK</button>
                </form>
              </div>
            </div>
            <div class="col-md-8" style="background-image: url('assets/img/login-bg.png'); vertical-align: middle;"></div>
          </div>
        </div>
    </div>

    <?php $this->view($foot); ?>
</body>

</html>