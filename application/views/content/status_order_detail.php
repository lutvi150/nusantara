            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">                        
                        <!-- <div class="m-t-25"> -->
                            <!-- <div class="col-md-12"> -->                                
                                <div class="au-card" style="width: 100%; padding: 15px; font-size: 12px;">  
                                    <div style="margin: 0 30px;">
                                        <div class="row">
                                            <div class="col-6 col-md-3 detail-isi">No. Faktur</div>
                                            <div class="col-6 col-md-3 detail-isi"><?=$faktur;?></div>
                                            <div class="col-6 col-md-3 detail-isi">Tgl Faktur</div>
                                            <div class="col-6 col-md-3 detail-isi"><?=$tanggal;?></div>
                                        </div>
                                        <div class="row"><div class="col-12 detail-title">Informasi Pemesan</div></div>
                                        <div class="row">
                                            <div class="col-6 col-md-3 detail-isi">Nama</div>
                                            <div class="col-6 col-md-3 detail-isi"><?=$customer_name;?></div>
                                            <div class="col-6 col-md-3 detail-isi">No. HP</div>
                                            <div class="col-6 col-md-3 detail-isi"><?=$hp;?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-3 detail-isi">Alamat</div>
                                            <div class="col-6 col-md-3 detail-isi"><?=$alamat;?></div>
                                            <div class="col-6 col-md-3 detail-isi">Keterangan</div>
                                            <div class="col-6 col-md-3 detail-isi"><?=$keterangan;?></div>
                                        </div>
                                        <div class="row"><div class="col-12 detail-title">Data Pesanan</div></div>
                                        <div class="row">
                                            <div class="col-4 detail-isi"><b>Nama Produk</b></div>
                                            <div class="col-1 detail-isi text-center"><b>Qty</b></div>
                                            <div class="col-1 detail-isi text-center"><b>Satuan</b></div>
                                            <div class="col-3 detail-isi text-right"><b>Harga</b></div>
                                            <div class="col-3 detail-isi text-right"><b>Jumlah</b></div>
                                        </div>
<?php foreach($data as $d) { ?>
                                        <div class="row">
                                            <div class="col-4 detail-isi"><?=$d->nama_brg;?></div>
                                            <div class="col-1 detail-isi text-center"><?=$d->qty;?></div>
                                            <div class="col-1 detail-isi text-center"><?=$d->sat;?></div>
                                            <div class="col-3 detail-isi text-right"><?=number_format($d->harga_brg,'0',',','.');?></div>
                                            <div class="col-3 detail-isi text-right"><?=number_format($d->subtotal,'0',',','.');?></div>
                                        </div>
<?php } ?>
                                        <div class="row">
                                            <div class="col-9 detail-isi text-right"><b>Subtotal</b></div>
                                            <div class="col-3 detail-isi text-right"><?php echo number_format($total_harga,'0',',','.');?></div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-8 col-md-6 btn-detail">
                                                <ul>
                                                    <li>
                                                        <button type="button" class="btn btn-ubah"><span class="iconify-inline icon" data-icon="akar-icons:edit"></span> Ubah Pesanan</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-ulang"><span class="iconify-inline icon" data-icon="nimbus:invoice"></span> Nota Ulang</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-ulang" data-toggle="modal" data-target="#modalSurat"><span class="iconify-inline icon" data-icon="akar-icons:edit"></span> Surat Jalan</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-ulang" data-toggle="modal" data-target="#modalKategori"><span class="iconify-inline icon" data-icon="akar-icons:edit"></span> SPK Per Kategori</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-status" data-toggle="modal" data-target="#modalStatus"><span class="iconify-inline icon" data-icon="akar-icons:edit"></span> Ubah Status</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-lunasi">Lunasi Order</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div><br><br>

                                                <!-- modal status -->
                                                <div class="modal fade" id="modalStatus" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="false">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="smallmodalLabel">Ubah Status</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form">
                                                                    <select class="form-control" style="border-radius: 8px;">
                                                                        <option value="Diterima">Diterima</option>
                                                                        <option value="Dikerjakan">Dikerjakan</option>
                                                                        <option value="Selesai">Selesai</option>
                                                                        <option value="Diambil">Diambil</option>
                                                                    </select>
                                                                    <button class="btn btn-block btn-simpan">Simpan</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal -->

                                                <!-- modal kategori -->
                                                <div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="false">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="smallmodalLabel">Pilih Kategori</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form">
                                                                    <select class="form-control" style="border-radius: 8px;">
                                                                        <option value="Nusantara Grafis">Nusantara Grafis</option>
                                                                        <option value="Nusantara Kertas KL">Nusantara Kertas KL</option>
                                                                    </select>
                                                                    <button class="btn btn-block btn-simpan"><span class="iconify icon" data-icon="bytesize:print"></span> Cetak SPK</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal -->

                                                <!-- modal surat -->
                                                <div class="modal fade" id="modalSurat" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="false">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="title-modal" id="smallmodalLabel"><span class="iconify-inline icon" data-icon="bi:truck"></span> Pengiriman</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form">
                                                                    <div class="row fonm-group" style="margin-bottom: 10px;">
                                                                        <div class="col-4"><label>Faktur</label></div>
                                                                        <div class="col-6"><input type="text" class="form-control"></div>
                                                                    </div>
                                                                    <div class="row fonm-group" style="margin-bottom: 10px;">
                                                                        <div class="col-4"><label>Dikirim Dengan</label></div>
                                                                        <div class="col-6"><input type="text" class="form-control"></div>
                                                                    </div>
                                                                    <div class="row fonm-group" style="margin-bottom: 10px;">
                                                                        <div class="col-4"><label>Nomor Kendaraan</label></div>
                                                                        <div class="col-6"><input type="text" class="form-control"></div>
                                                                    </div>
                                                                    <div class="row fonm-group" style="margin-bottom: 10px;">
                                                                        <div class="col-4"><label>Tanggal Kirim</label></div>
                                                                        <div class="col-6"><input type="date" class="form-control"></div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="button" class="btn btn-terang" style="margin-right: 10px; padding: 7px 20px;" data-dismiss="modal">Batalkan</button>
                                                                        <button type="button" class="btn btn-simpan" style="padding: 7px 30px;">Cetak</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal -->