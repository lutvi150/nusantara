<!DOCTYPE html>
<html>
<head>
	<title>Nota</title>
    <?php
$this->view($head);
if ($lokasi == 'CABANG 3') {echo '
            <link rel="apple-touch-icon" sizes="76x76" href="' . base_url('assets/img/Zira.png') . '">
            <link rel="icon" type="image/png" href="' . base_url('assets/img/Zira.png') . '">';
} else {echo '
            <link rel="apple-touch-icon" sizes="76x76" href="' . base_url('assets/img/elseZira.png') . '">
            <link rel="icon" type="image/png" href="' . base_url('assets/img/elseZira.png') . '">';
}
?>
</head>
<body>
	<div class="container mt-3">
        <div class="row">
            <div style="width: 140px; vertical-align: middle;" class="text-center"><img src="<?=base_url('assets/img/elseZira.png');?>" style="width: 130px; height: auto;"></div>
            <div class="col-6">
            	<div style="font-size: 18px; font-weight: 600;"><?=$cabang['nama'];?></div>
                <div style="font-size: 14px;">
                	<?=$cabang['slogan'];?><br>
                    <?=$cabang['alamat'];?><br>
                	<?=$cabang['telp'];?><br>
                </div>
                Nomor Nota&emsp;:&emsp;<b><?=$faktur;?></b>
            </div>
            <div class="col-4">
                <table border="0" style="font-size: 14px;">
                    <tr>
                        <td><?=$tgl;?></td>
                        <td style="padding: 0 12px;">:</td>
                        <td><?=$jam;?></td>
                    </tr>
                    <tr>
                        <td>Kepada Yth.</td>
                        <td></td>
                        <td><b><?=$customer_name;?></b></td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td>Telp/HP</td>
                        <td>:</td>
                        <td><?=$hp;?></td>
                    </tr>
                    <tr>
                        <td>Tgl Temp</td>
                        <td>:</td>
                        <td><?=$tgl_tempo;?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-2">
        	<table class="table table-cetak">
        		<tr>
        			<th class="text-center">No.</th>
        			<th>Nama Barang</th>
        			<th class="text-center">Satuan</th>
                    <th class="text-center">Jumlah</th>
        			<th class="text-center">Harga</th>
                    <th class="text-right">Total Harga</th>
        		</tr>
<?php $no = 1;foreach ($data as $d) {?>
        		<tr>
        			<td class="text-center"><?=$no++;?></td>
        			<td><?=$d->nama_brg;?><br>Ket :<br><?=$d->ket;?></td>
        			<td class="text-center"><?=$d->sat;?></td>
        			<td class="text-center"><?=$d->qty;?></td>
        			<td class="text-center"><?=number_format($d->harga_brg, '0', ',', '.');?></td>
        			<td class="text-right"><b><?=number_format($d->subtotal, '0', ',', '.');?></b></td>
        		</tr>
<?php }?>
        	</table>
        </div>
        <div class="row mt-3" style="border-top: 2px solid #000;">
        	<div class="col-4" style="font-weight: 600;">
                No. Rek Toko <?=$cabang['nama'];?><br>
                Atas Nama<br>
                BCA<br>
                Mandiri<br>
            </div>
            <div class="col-3" style="border: 1px solid #5F5F5F; margin: 10px 10px 0 0">
                Yang Menerima<br>
            </div>
            <div class="col-3" style="border: 1px solid #5F5F5F; margin: 10px 10px 0 0">
                Pembayaran Ke <br> Belum Lunas
            </div>
            <div class="col-1" style="border: 1px solid #5F5F5F; margin: 10px 10px 0 0">
                Petugas<br> Irma
            </div>
        </div>
    </div>
	<?php $this->view($head);?>
</body>
</html>
