<div class="m-t-25">
                            <!-- <div class="col-md-12"> -->                                
                                <div class="au-card" style="width: 100%; padding: 15px; font-size: 12px;">                                    
                                    <div class="text-right" style="margin: 0 15px 10px 0;">
                                        <a href="<?php echo base_url('admin/pesanan/cetak/'.$id_pemesanan);?>" target="_blank" class="btn btn-sm tambah" style="border-radius: 3px;"><span class="iconify" data-icon="fluent:print-24-regular"></span> Cetak</a>
                                    </div>

                                    <div style="margin: 0 30px;">
                                        <div class="row"><div class="col-12 detail-title">ID#<?php echo $id_pemesanan.' - '.$nama_acara;?></div></div>
                                        <div class="row">
                                            <div class="col-6 col-md-3 detail-isi">Tanggal Pemesanan</div>
                                            <div class="col-6 col-md-3 detail-isi"><?php echo $tgl_pemesanan;?></div>
                                            <div class="col-6 col-md-3 detail-isi">Tanggal Acara</div>
                                            <div class="col-6 col-md-3 detail-isi"><?php echo $tgl_acara;?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-3 detail-isi">Tanggal Pengiriman</div>
                                            <div class="col-6 col-md-3 detail-isi"><?php echo $tgl_dikirim;?></div>
                                            <div class="col-6 col-md-3 detail-isi">Tanggal Pengambilan</div>
                                            <div class="col-6 col-md-3 detail-isi"><?php echo $tgl_ambil;?></div>
                                        </div>
                                        <div class="row"><div class="col-12 detail-title">Profil Pemesan</div></div>
                                        <div class="row">
                                            <div class="col-12 col-md-3 text-center detail-isi"><img src="<?php echo base_url('uploads/customer/'.$foto_customer);?>" style="height: 50px;"></div>
                                            <div class="col-12 col-md-5">
                                                <div class="row">
                                                    <div class="col-5 detail-isi">Nama Pemesan</div>
                                                    <div class="col-7 detail-isi"><?php echo $nama_customer;?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5 detail-isi">Email</div>
                                                    <div class="col-7 detail-isi"><?php echo $email_customer;?></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="row">
                                                    <div class="col-5 detail-isi">No. Telepon</div>
                                                    <div class="col-7 detail-isi">+62<?php echo $telp_customer;?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5 detail-isi">Jenis Kelamin</div>
                                                    <div class="col-7 detail-isi"><?php echo $jkel;?></div>
                                                </div>
                                            </div>                                        
                                        </div>

                                        <div class="row"><div class="col-12 detail-title">Data Pesanan</div></div>
                                        <div class="row">
                                            <div class="col-4 detail-isi">Nama Item</div>
                                            <div class="col-2 detail-isi">quantity</div>
                                            <div class="col-3 detail-isi">Harga</div>
                                            <div class="col-3 detail-isi">Jumlah</div>
                                        </div>
<?php $item = $this->M_app->data_keranjang_detail($id_keranjang);
    foreach ($item as $it) { echo '
                                        <div class="row">
                                            <div class="col-4 detail-isi">'.$it->nama_item.'</div>
                                            <div class="col-2 detail-isi">'.$it->kuantitas.'</div>
                                            <div class="col-3 detail-isi">'.number_format($it->harga,'0',',','.').'</div>
                                            <div class="col-3 detail-isi">'.number_format($it->total_harga,'0',',','.').'</div>
                                        </div>
'; } ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Subtotal</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($subtotal,'0',',','.');?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Lama Sewa</div>
                                            <div class="col-3 detail-isi"><?php echo $hari;?> hari</div>
                                        </div>
<?php if (!empty($biaya_pengiriman)) { ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Biaya Pengiriman</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($biaya_pengiriman,'0',',','.');?></div>
                                        </div>
<?php } 
    if (!empty($denda)) { ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Denda</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($denda,'0',',','.');?></div>
                                        </div>
<?php }  ?>

                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">TOTAL</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($total_biaya,'0',',','.');?></div>
                                        </div>
                                        
<?php
    if (!empty($diskon)) { ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Diskon</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($diskon,'0',',','.');?></div>
                                        </div>
                                        <?php $grand_total = $total_biaya - $diskon; ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">GRAND TOTAL</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($grand_total,'0',',','.');?></div>
                                        </div>
<?php } ?>
                                        
<?php
    if (!empty($dp)) {
        if ($dp != $grand_total) { 
            $sisa_pembayaran = $total_biaya - $dp - $diskon; ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Down Payment</div>
                                            <div class="col-3 detail-isi"><?php echo number_format($dp,'0',',','.'); ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right">Sisa Pembayaran</div>
                                            <div class="col-3 detail-isi">
                                                <?php echo number_format($sisa_pembayaran,'0',',','.'); ?>
                                                <div class="text-right"><a href="https://api.whatsapp.com/send?phone=62<?=$telp_customer;?>&text=*Yth. <?=$nama_customer;?>*%0A%0ATanpa mengurangi rasa hormat, kami menyampaikan kekurangan pembayaran Anda pada Nomor Pesanan *<?=$id_pemesanan;?>* dengan nominal *Rp <?=number_format($sisa_pembayaran,'0',',','.');?>*%0A%0ASekian dan terima kasih untuk kerjasamanya.%0ASehat selalu."><span class="iconify" data-icon="bi:whatsapp"></span> Kirim Tagihan</a></div>
                                            </div>
                                        </div>
<?php   }
    }
?>
                                        <div class="row"><div class="col-12 detail-title">Pembayaran</div></div>
                                        <div class="row">
                                            <div class="col-6 col-md-3 detail-isi">Status Pembayaran</div>
                                            <div class="col-6 col-md-3 detail-isi">
                                                <?php if ($status_pembayaran == 0) { echo '<a href="'.base_url('admin/pesanan/upload_bukti/'.$id_pemesanan).'" class="btn btn-sm btn-secondary">Belum Bayar</a>'; }
                                                    elseif ($status_pembayaran == 2) { echo '<a href="'.base_url('admin/pesanan/upload_bukti/'.$id_pemesanan).'" class="btn btn-sm btn-secondary">Belum Lunas</a>'; }
                                                    elseif ($status_pembayaran == 1) { echo 'Lunas'; }
                                                ?>
                                            </div>
                                            <div class="col-6 col-md-3 detail-isi">Status Pesanan</div>
                                            <div class="col-6 col-md-3 detail-isi">
                                                <?php 
                                                    if ($status_pesanan == 1) { echo '<a href="'.base_url('admin/pesanan/konfirmasi/'.$id_pemesanan).'" class="btn btn-sm btn-secondary">Menunggu Konfirmasi</a>'; }
                                                    elseif ($status_pesanan == 2) { echo 'Terkonfirmasi, Menunggu Pengiriman'; }
                                                    elseif ($status_pesanan == 3) { echo 'Pesanan Dikirim'; }
                                                    elseif ($status_pesanan == 4) { echo 'Pesanan Diterima'; }
                                                    elseif ($status_pesanan == 5) { echo 'Pesanan Diambil'; }
                                                    elseif ($status_pesanan == 6) { echo 'Pesanan Selesai'; }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-3 detail-isi">Bukti Pembayaran</div>
                                            <div class="col-12 col-md-9 detail-isi">
                                                <div class="row">
<?php $bukti_bayar = $this->M_app->data_pesanan_pembayaran_detail($id_pemesanan);
    if (!empty($bukti_bayar)) { 
        foreach ($bukti_bayar as $b) { echo '
                                                    <div class="col-6 col-md-3">
                                                        <div class="card">
                                                            <button type="button" data-toggle="modal" data-target="#buktiPembayaran'.$b->id.'"><img src="'.base_url('uploads/bukti/'.$b->bukti_pembayaran).'" style="padding: 10px;"></button>
            '; if ($b->konfirmasi == 0) { echo '
                                                            <div class="text-center" style="color: #fff; background-color: red; padding: 5px 0;">Konfirmasi</div>
            '; } echo '
                                                        </div>
                                                    </div>

                                                <div class="modal fade" id="buktiPembayaran'.$b->id.'" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="false">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="smallmodalLabel">Bukti Pembayaran '.$b->deskripsi.'</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="'.base_url('uploads/bukti/'.$b->bukti_pembayaran).'"><br><br>
                                                                <h4><b>Nominal Rp '.number_format($b->total_pembayaran,'0',',','.').'</b></h4>
                                                                <h5>'.$b->ket.'</h5><br><br>';
            if ($b->konfirmasi == 0) { echo '
                                                                <a href="'.base_url('admin/pesanan/konfirmasi_pembayaran/'.$b->id).'" class="btn btn-block btn-warning" style="color: #fff;">Konfirmasi</a>
            '; } echo '                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
            
        '; }
    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                        <br><br>
                            <!-- </div> -->
                        </div>