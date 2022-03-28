            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
<?php if ($akun != 'CS') { ?>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-white" style="margin-bottom: 20px; padding: 25px 20px 10px 25px; background: linear-gradient(264.12deg, #5AA7FF 0%, #4496F4 100%); box-shadow: 0px 12px 26px rgba(35, 81, 134, 0.18); border-radius: 25px;">
                                    <span style="font-size: 22px; font-weight: 600; line-height: 29.26px;"><?=$jml_transaksi_today;?></span><br>
                                    <span style="font-size: 16px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Transaksi Hari ini</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span class="iconify" data-icon="uil:transaction" style="font-size: 58px; font-weight: 800; line-height: 37px; margin-top: -17px;"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="text-white" style="margin-bottom: 20px; padding: 25px 20px 10px 25px; background: linear-gradient(264.12deg, #5AFFB0 0%, #44F495 100%); box-shadow: 0px 12px 26px rgba(35, 81, 134, 0.18); border-radius: 25px;">
                                    <span style="font-size: 22px; font-weight: 600; line-height: 29.26px;">Rp <?=number_format($jml_penjualan_today,'0',',','.');?></span><br>
                                    <span style="font-size: 16px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Penjualan Hari ini</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span class="iconify" data-icon="akar-icons:file" style="font-size: 58px; font-weight: 800; line-height: 37px; margin-top: -17px;"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="text-white" style="margin-bottom: 20px; padding: 25px 20px 10px 25px; background: linear-gradient(264.12deg, #FFE55A 0%, #FFCE4F 100%); box-shadow: 0px 12px 26px rgba(35, 81, 134, 0.18); border-radius: 25px;">
                                    <span style="font-size: 22px; font-weight: 600; line-height: 29.26px;">Rp <?=number_format($jml_piutang,'0',',','.');?></span><br>
                                    <span style="font-size: 16px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Piutang</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span class="iconify" data-icon="mdi:badge-account-horizontal-outline" style="font-size: 58px; font-weight: 800; line-height: 37px; margin-top: -17px;"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="text-white" style="margin-bottom: 20px; padding: 25px 20px 10px 25px; background: linear-gradient(264.12deg, #FF5A5A 0%, #F44444 100%); box-shadow: 0px 12px 26px rgba(35, 81, 134, 0.18); border-radius: 25px;">
                                    <span style="font-size: 22px; font-weight: 600; line-height: 29.26px;">Rp 10.104.000.000</span><br>
                                    <span style="font-size: 16px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Pelunasan</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span class="iconify" data-icon="uil:file-check-alt" style="font-size: 58px; font-weight: 800; line-height: 37px; margin-top: -17px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php } ?>

                        <div class="row m-t-25">
                            <div class="col-12 add-transaksi"><a href="<?=base_url('penjualan');?>" class="btn"><span class="iconify-inline icon" data-icon="akar-icons:circle-plus-fill"></span>Tambah Transaksi</a></div>
                        </div>

                        <div class="row" style="padding-left: 10px;">
                            <div style="font-size: 17px; font-weight: 600; margin-bottom: 7px; padding-left: 20px; letter-spacing: 0.7px;">Transaksi Terakhir</div>
                            <div class="col-12 card table-responsive" style="border-radius: 17px; border: 0; filter: drop-shadow(0px 12px 26px rgba(16, 30, 115, 0.06));">
                                <table class="table">
                                    <thead style="font-size: 14px;">
                                        <tr>
                                            <th>#</th>
                                            <th>Faktur</th>
                                            <th>Nama</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal Ambil</th>
                                            <th>Prioritas</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 12px;">
<?php if(!empty($data)) { 
    $no=1; foreach ($data as $d) { echo '
                                        <tr>
                                            <td>'.$no++.'</td>
                                            <td>'.$d->faktur.'</td>
                                            <td>'.$d->customer_name.'</td>
                                            <td>'.$d->total_harga.'</td>
                                            <td>'.$d->tgl_ambil.'</td>
                                            <td>'.$d->prioritas.'</td>
                                            <td>'.$d->keterangan.'</td>
                                            <td><button type="button" class="btn-hapus" data-toggle="modal" data-target="#hapusTransaksi"><span class="iconify-inline" data-icon="fa6-solid:trash-can"></span></buntton></td>
                                        </tr>
        '; } 
    } else { echo '
                                        <tr>
                                            <td colspan="8" class="text-center">Belum ada transaksi.</td>
                                        </tr>
    '; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                                                <!-- modal hapus transaksi -->
                                                <div class="modal fade" id="hapusTransaksi" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="false">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="smallmodalLabel">Hapus Transaksi</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form" action="<?=base_url('dashboard/hapus');?>">
                                                                    <div class="form-group">
                                                                        <label>Username</label>
                                                                        <input type="text" class="form-control" id="username" name="username">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Password</label>
                                                                        <input type="password" class="form-control" id="password" name="password">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6"><button class="btn btn-block btn-terang">Batal</button></div>
                                                                        <div class="col-6"><button class="btn btn-block btn-delete">Hapus</button></div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal -->