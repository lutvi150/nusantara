<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title><?=$title;?> | <?=$nama_cabang;?></title>    
    <?php 
        $this->view($head);
        if ($lokasi == 'CABANG 3') { echo '
            <link rel="apple-touch-icon" sizes="76x76" href="'.base_url('assets/img/Zira.png').'">
            <link rel="icon" type="image/png" href="'.base_url('assets/img/Zira.png').'">'; 
        } else { echo '
            <link rel="apple-touch-icon" sizes="76x76" href="'.base_url('assets/img/elseZira.png').'">
            <link rel="icon" type="image/png" href="'.base_url('assets/img/elseZira.png').'">'; 
        } 
    ?>
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER-->
        <?php $this->view($menu); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="form-header">
                                <!-- <a href=""> -->
                                    <button class="btn"><span class="iconify" data-icon="iconoir:menu-scale" style="color: #fff; font-size: 20px;"></span></button>
                                <!-- </a> -->
                                <span class="title-page"><?=$title;?></span>
                            </div>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?=$nama_akun;?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="<?=base_url('login/logout');?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="title-mobile">
                <span><?=$title;?></span>
            </div>

            <?php $this->view($body); ?>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

    <?php $this->view($foot); ?>
</body>
</html>