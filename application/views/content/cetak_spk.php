<!DOCTYPE html>
<html>
<head>
	<title>Cetak SPK</title>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 text-center"><img src="<?=base_url('assets/img/elseZira.png');?>" style="width: 100px; height: auto;"></div>
            <div class="col-6"></div>
            <div class="col-2 text-center">SPK<br>NGPS</div>
        </div>
        <hr>
    </div>

    <?php $this->view($head); ?>
</body>
</html>
