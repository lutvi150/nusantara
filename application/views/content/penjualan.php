            <div class="main-content">
            	<div class="section__content section__content--p30">
            		<div class="container-fluid">
            			<div class="row">
            				<div class="col-12"
            					style="font-size: 12px; padding: 15px 15px; background: #FFFFFF; box-shadow: 0px 12px 26px rgba(16, 30, 115, 0.06); border-radius: 20px;">
            					<form>
            						<div class="row">
            							<div class="col-12 col-md-4 col-lg-4"
            								style="border-right: 1px solid #eee; padding: 5px 25px;">
            								<h5 class="title-modal mb-2">Data Pembeli</h5>
            								<form action="#" id="buyerForm">
            									<div class="row mb-2">
            										<div class="col-4">ID Member</div>
            										<div class="col-8">
            											<div class="input-group">
            												<input type="text" class="form-control">
            												<div class="input-group-append">
            													<button type="button" class="btn btn-group-grey"
            														data-toggle="modal"
            														data-target="#modalMember">...</button>
            												</div>
            											</div>
            										</div>

            									</div>
            									<div class="row mb-2">
            										<div class="col-4">Nama</div>
            										<div class="col-8">
            											<input id="nama_member" type="text" class="form-control">
            										</div>
            									</div>
            									<div class="row mb-2">
            										<div class="col-4">Alamat</div>
            										<div class="col-8">
            											<input type="text" id="alamat" class="form-control">
            										</div>
            									</div>
            									<div class="row mb-2">
            										<div class="col-4">No. HP</div>
            										<div class="col-8">
            											<input type="text" id="hp" class="form-control">
            										</div>
            									</div>
            									<div class="row mb-2">
            										<div class="col-4">Email</div>
            										<div class="col-8">
            											<input type="text" id="email" class="form-control">
            										</div>
            									</div>
            								</form>
            								<div class="hr-blue"></div>
            								<div class="row mb-2">
            									<div class="col-4">Catatan</div>
            									<div class="col-8">
            										<textarea class="form-control"></textarea>
            									</div>
            								</div>
            								<div class="title-modal">Tanggal Pengambilan</div>
            								<div class="row mb-2">
            									<div class="col-4">Tanggal</div>
            									<div class="col-8">
            										<input type="date" class="form-control">
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Prioritas</div>
            									<div class="col-8">
            										<select class="form-control">
            											<option value=""></option>
            										</select>
            									</div>
            								</div>
            							</div>
            							<div class="col-12 col-md-4 col-lg-4"
            								style="border-right: 1px solid #eee; padding: 10px 25px;">
            								<h5 class="title-modal mb-2">Produk</h5>
            								<div class="row mb-2">
            									<div class="col-4">Kode Produk</div>
            									<div class="col-8">
            										<div class="input-group">
            											<input type="text" onchange="searchProduk()"
            												class="form-control" name="kode_produk" id="kode_produk">
            											<div class="input-group-append">
            												<button type="button" class="btn btn-group-grey"
            													data-toggle="modal"
            													data-target="#modalProduk">...</button>
            											</div>
            										</div>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">
            										<div class="form-inline">
            											<div class="form-group" style="width: 80%;">Nama</div>
            											<div class="form-group text-rigt"><label
            													class="form-check-label"><input type="checkbox"
            														id="checknama" class="form-check-input"
            														value=""></label></div>
            										</div>
            										<div class="form-inline">
            											<div class="form-group" style="width: 80%;">Auto Scan</div>
            											<div class="form-group"><label class="form-check-label"><input
            														type="checkbox" class="form-check-input"
            														value=""></label></div>
            										</div>
            									</div>
            									<div class="col-8">
            										<textarea class="form-control" id="namaproduk" disabled></textarea>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Satuan</div>
            									<div class="col-8">
            										<input type="text" id="satuan" class="form-control">
            									</div>
            								</div>
            								<div class="hr-blue"></div>
            								<div class="row mb-2">
            									<div class="col-4">Ukuran</div>
            									<div class="col-8">
            										<div class="form-inline">
            											<div class="form-group mr-2">P</div>
            											<div class="form-group mr-2"><input type="text"
            													class="form-control" style="width: 60px;"></div>
            											<div class="form-group mr-2" style="padding: 0 7px 0 5px;">X
            											</div>
            											<div class="form-group mr-2">L</div>
            											<div class="form-group mr-2"><input type="text"
            													class="form-control" style="width: 60px;"></div>
            										</div>
            										<div class="form-check-inline">
            											<label class="form-check-label" for="radio2">
            												<input type="radio" class="form-check-input" id="radio2"
            													name="optradio" value="m">Meter
            											</label>
            										</div>
            										<div class="form-check-inline">
            											<label class="form-check-label">
            												<input type="radio" class="form-check-input" id="radio2"
            													name="optradio" value="cm">Centimeter
            											</label>
            										</div>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Qty</div>
            									<div class="col-8 form-inline">
            										<div class="form-group mr-2"><input type="text" class="form-control"
            												style="width: 90px;"></div>
            										<div class="form-group"><input type="text" class="form-control"
            												style="width: 94px;"></div>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Keterangan</div>
            									<div class="col-12">
            										<textarea class="form-control"></textarea>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-12 text-right">
            										<button class="btn btn-greylight"><span class="iconify-inline"
            												data-icon="fluent:cart-16-regular"
            												style="color: #2196F3; font-weight: 500; margin-right: 5px;">
            											</span>Tambah Ke Keranjang</button>
            									</div>
            								</div>
            							</div>
            							<div class="col-12 col-md-4 col-lg-4" style="padding: 10px 25px 10px 30px;">
            								<h5 class="title-modal">Total</h5>
            								<div class="txtotal text-right">Rp 1.353.000</div>
            								<div class="row mb-2">
            									<div class="col-4">PPN</div>
            									<div class="col-8 form-inline">
            										<div class="form-group mr-2"><input type="text" class="form-control"
            												style="width: 60px;"></div>
            										<div class="form-group"><input type="text" class="form-control"
            												style="width: 127px;"></div>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Diskon Umum</div>
            									<div class="col-8 form-inline">
            										<div class="form-group mr-2"><input type="text" class="form-control"
            												style="width: 60px;"></div>
            										<div class="form-group"><input type="text" class="form-control"
            												style="width: 127px;"></div>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4"><label class="form-check-label"><input
            												type="checkbox" class="form-check-input" value=""> Harga
            											Produk</label></div>
            									<div class="col-8">
            										<input type="text" class="form-control">
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Diskon Promo</div>
            									<div class="col-8 form-inline">
            										<div class="form-group mr-2"><input type="text" class="form-control"
            												style="width: 60px;"></div>
            										<div class="form-group">%</div>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-4"><label class="form-check-label"><input
            												type="checkbox" class="form-check-input" value=""> Diskon
            											Total (Rp)</label></div>
            									<div class="col-8">
            										<input type="text" class="form-control">
            									</div>
            								</div>
            								<div class="row mt-4">
            									<div class="col-6"><button class="btn btn-greylight"
            											style="width: 100%;"><span class="iconify-inline mr-1"
            												data-icon="akar-icons:check" style="color: #FF2727;"></span>
            											Pending Trx</button></div>
            									<div class="col-6"><button type="button" class="btn btn-bayar"
            											style="width: 100%;" data-toggle="modal"
            											data-target="#modalBayar">Pembayaran <span
            												class="iconify-inline ml-1"
            												data-icon="akar-icons:arrow-right"></span></button></div>
            									<div class="col-12 mt-3"><button type="button" class="btn btn-pending"
            											style="width: 100%;" data-toggle="modal"
            											data-target="#modalPending"><span class="iconify-inline mr-1"
            												data-icon="system-uicons:side-menu"></span> Daftar
            											Pending</button></div>
            								</div>
            							</div>
            						</div>
            					</form>
            				</div>
            			</div>

            			<div class="row mt-3">
            				<div class="col-12 card" style="padding: 0;">
            					<table class="table" style="font-size: 14px;">
            						<thead style="background: #E8E8E8;">
            							<tr>
            								<th>No</th>
            								<th>Kode</th>
            								<th>Nama Produk</th>
            								<th>Satuan</th>
            								<th>Keterangan</th>
            								<th>Harga</th>
            								<th>Qty</th>
            								<th>Subtotal</th>
            								<th></th>
            							</tr>
            						</thead>
            						<tbody>
            							<tr>
            								<td>No</td>
            								<td>Kode</td>
            								<td>Nama Produk</td>
            								<td>Satuan</td>
            								<td>
            									<span class="editxt">Keterangan</span>
            									<input type="text" class="txtedit" data-id="1" data-field="email"
            										id="kettxt_1" value="Keterangan">
            								</td>
            								<td>Harga</td>
            								<td>Qty</td>
            								<td>Subtotal</td>
            								<td><a href="" class="btn-hapus"><span class="iconify-inline"
            											data-icon="fa6-solid:trash-can"></span></a></td>
            							</tr>
            							<tr>
            								<td>No</td>
            								<td>Kode</td>
            								<td>Nama Produk</td>
            								<td>Satuan</td>
            								<td>Keterangan</td>
            								<td>Harga</td>
            								<td>Qty</td>
            								<td>Subtotal</td>
            								<td><a href="" class="btn-hapus"><span class="iconify-inline"
            											data-icon="fa6-solid:trash-can"></span></a></td>
            							</tr>
            						</tbody>
            					</table>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>

            <!-- modal pembayaran -->
            <div class="modal fade" id="modalBayar" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel"
            	aria-hidden="true" data-backdrop="false">
            	<div class="modal-dialog" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="title-modal" id="smallmodalLabel">Pembayaran</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body">
            				<form class="form" style="padding-left: 20px; padding-right: 20px;">
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4"><label class="form-check-label"><input type="checkbox"
            									class="form-check-input" value=""> Bayar Tempo</label></div>
            						<div class="col-6"><input type="date" class="form-control"></div>
            					</div>
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4"><label>DP</label></div>
            						<div class="col-6"><input type="number" class="form-control"></div>
            					</div>
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4"><label>Bayar</label></div>
            						<div class="col-6"><input type="number" class="form-control"></div>
            					</div>
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4"><label>Kembali</label></div>
            						<div class="col-6"><input type="number" class="form-control"></div>
            					</div>
            					<div class="hr-blue"></div>
            					<div class="row mb-2">
            						<div class="col-12"><label class="form-check-label"><input type="radio"
            									class="form-check-input" id="tunai" name="jenis" value="Cash">Bayar
            								Tunai (Cash)</label></div>
            					</div>
            					<div class="row mb-4">
            						<div class="col-12"><label class="form-check-label"><input type="radio"
            									class="form-check-input" id="nontunai" name="jenis"
            									value="Non Tunai">Bayar Non Tunai</label></div>
            						<div class="col-12">
            							<?php echo form_dropdown('id_kategori', $dd_kategori, $id_kategori, ' id="id_kategori" required class="form-control" disabled'); ?>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-6"><button type="button" class="btn btn-block btn-terang"
            								style="margin-right: 10px; padding: 7px 20px;"
            								data-dismiss="modal">Batalkan</button></div>
            						<div class="col-6"><button type="button" class="btn btn-block btn-simpan"
            								style="padding: 7px 30px;">Lanjutkan</button></div>
            					</div>
            				</form>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- end modal -->

            <!-- modal pending -->
            <div class="modal fade" id="modalPending" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
            	aria-hidden="true" data-backdrop="false">
            	<div class="modal-dialog modal-lg" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="title-modal" id="scrollmodalLabel">Daftar Pending</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body" style="font-size: 14px;">
            				<form class="form">
            					<div class="row form-group">
            						<div class="col-4">
            							Cari
            							<div class="input-group mb-3">
            								<input type="text" class="form-control" style="border-right: 0;">
            								<div class="input-group-append">
            									<button class="btn btn-sm btn-search"><span class="iconify-inline"
            											data-icon="akar-icons:search"></span></button>
            								</div>
            							</div>
            						</div>
            						<div class="col-8">
            							<div class="text-right">
            								<button type="button" class="btn btn-batal"
            									style="margin-right: 10px; padding: 7px 20px;"
            									data-dismiss="modal">Batal</button>
            								<button type="button" class="btn btn-simpan"
            									style="padding: 7px 30px;">Lanjutkan <span class="iconify-inline ml-1"
            										data-icon="akar-icons:arrow-right"></span></button>
            							</div>
            						</div>
            					</div>
            					<div class="row">
            						<table class="table" style="font-size: 12px;">
            							<thead>
            								<tr>
            									<th>No</th>
            									<th>Faktur</th>

            									<th>Nama Pemesan</th>
            									<th>HP</th>
            									<th>Jumlah</th>
            									<th>Keterangan</th>
            									<th>Kasir</th>
            								</tr>
            							</thead>
            							<tbody>
            								<?php $no = 1;foreach ($data_pending as $dp) {?>
            								<tr class="row-pending numberRowPending_<?=$dp->faktur?>" onclick="getValueRowPending('<?=$dp->faktur?>')">
            									<td><?=$no++;?></td>
            									<td><?=$dp->faktur;?></td>
            									<td><?=$dp->customer_name;?></td>
            									<td><?=$dp->customer_id;?></td>
            									<td><?=$dp->j_produk;?></td>
            									<td><?=$dp->keterangan;?></td>
            									<td><?=$dp->kasir;?></td>
            								</tr>
            								<?php }?>
            							</tbody>
            						</table>
            					</div>
            				</form>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- end modal -->

            <!-- modal member -->
            <div class="modal fade" id="modalMember" tabindex="-1" role="dialog" aria-labelledby="largemodalLabel"
            	aria-hidden="true" data-backdrop="false">
            	<div class="modal-dialog modal-lg" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="title-modal" id="largemodalLabel">Data Member</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body" style="font-size: 14px;">
            				<!-- <form class="form"> -->
            				<table class="table" id="dataTable" style="font-size: 12px;">
            					<thead>
            						<tr>
            							<th>No</th>
            							<th>Nama</th>
            							<th>Alamat</th>
            							<th>HP</th>
            							<th>Email</th>
            							<th>Jenis</th>
            						</tr>
            					</thead>
            					<tbody>
            						<?php $no = 1;foreach ($data_member as $dm) {?>
            						<tr class="table-row" id="namerow_<?php
$replace = [" ", "+", "-"];
    echo str_replace($replace, "", $dm->id);?>" onclick="getValue('<?=$dm->id?>')">
            							<td><?=$no++;?></td>
            							<td><?=$dm->nama;?></td>
            							<td><?=$dm->alamat;?></td>
            							<td><?=$dm->hp;?></td>
            							<td><?=$dm->mail;?></td>
            							<td><?=$dm->jenis;?></td>
            						</tr>
            						<?php }?>
            					</tbody>
            				</table>
            				<br>
            				<hr>
            				<div class="text-right">
            					<button type="button" class="btn btn-danger btn-xs"
            						style="margin-right: 10px; padding: 7px 20px;" data-dismiss="modal"
            						onclick="resetBuyerForm()"><i class="fa fa-times"></i> Batalkan</button>
            					<button type="button" onclick="nextBuyerForm()"
            						class="btn btn-success btn-xs btn-selanjutnya" style="padding: 7px 30px;"><i
            							class="fa fa-send"></i> Selanjutnya</button>
            				</div>
            				<!-- </form> -->
            			</div>
            		</div>
            	</div>
            </div>
            <!-- end modal -->

            <!-- modal produk -->
            <div class="modal fade" id="modalProduk" tabindex="-1" role="dialog" aria-labelledby="largemodalLabel"
            	aria-hidden="true" data-backdrop="false">
            	<div class="modal-dialog modal-lg" style="width: 1000px;" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="title-modal" id="largemodalLabel">Data Produk</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body" style="font-size: 14px;">
            				<div class="row form-group">
            					<div class="col-2">
            						Tampilkan
            						<select class="form-control">
            							<option value="Semua">Semua</option>
            							<option value="NGPS">NGPS</option>
            							<option value="NKPS">NKPS</option>
            						</select>
            					</div>
            					<div class="col-4">
            						Cari
            						<div class="input-group mb-3">
            							<input type="text" class="form-control" style="border-right: 0;">
            							<div class="input-group-append">
            								<button class="btn btn-sm btn-search"><span class="iconify-inline"
            										data-icon="akar-icons:search"></span></button>
            							</div>
            						</div>
            					</div>
            					<div class="col-6">
            						<div class="text-right">
            							<button type="button" class="btn btn-batal"
            								style="margin-right: 10px; padding: 7px 20px;"
            								data-dismiss="modal">Batal</button>
            							<button type="button" class="btn"
            								style="margin-right: 10px; padding: 7px 20px; background: #F4F4F4; color: #9C9C9C; border: 1px solid #ccc; border-radius: 4px;"
            								onclick="showOpsiHarga()">Opsi Harga</button>
            							<button type="button" onclick="nextProduk()" class="btn btn-simpan"
            								style="padding: 7px 30px;">Lanjutkan <span class="iconify-inline ml-1"
            									data-icon="akar-icons:arrow-right"></span></button>
            						</div>
            					</div>
            				</div>
            				<!-- <form class="form"> -->
            				<table class="table" id="dataTable" style="font-size: 12px;">
            					<thead>
            						<tr>
            							<th>No</th>
            							<th>Kategori</th>
            							<th>Kode</th>
            							<th>Nama</th>
            							<th>Stok</th>
            							<th>Harga</th>
            							<th>Grosir 1</th>
            							<th>Grosir 2</th>
            							<th>Grosir 3</th>
            							<th>Grosir 2(1)</th>
            							<th>Grosir 2(2)</th>
            							<th>Grosir 2(3)</th>
            						</tr>
            					</thead>
            					<tbody id="show-data-produk">
            					</tbody>
            				</table>
            				<div class="row">
            					<div class="col-md-6 produk-result-count">
            					</div>
            					<div class="col-md-6 produk-pagination-links dataTables_paginate paging_simple_numbers">
            					</div>
            				</div>
            				<!-- <div class="text-right">
                                                                        <button type="button" class="btn btn-terang" style="margin-right: 10px; padding: 7px 20px;" data-dismiss="modal">Batalkan</button>
                                                                        <button type="button" class="btn btn-simpan" style="padding: 7px 30px;">Cetak</button>
                                                                    </div> -->
            				<!-- </form> -->
            			</div>
            		</div>
            	</div>
            </div>
            <!-- end modal -->

            <!-- Modal modal opsi harga -->
            <div class="modal fade" id="modal-opsi-harga" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            	aria-hidden="true">
            	<div class="modal-dialog" role="document">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="title-modal">Opsi Harga Produk</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body">
            				<table class="table">
            					<thead>
            						<th>No</th>
            						<th>Nama</th>
            						<th>Harga</th>
            					</thead>
            					<tbody id="show-data-opsi-harga">
            					</tbody>
            				</table>
            			</div>
            			<div class="modal-footer">
            				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
            				<button type="button" class="btn btn-primary btn-xs" style="padding: 7x 30px;">Pilih</button>
            			</div>
            		</div>
            	</div>
            </div>
            <script src="<?=base_url()?>assets/vendor/jquery/jquery-3.6.0.min.js"></script>
            <script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            	let url = "<?=base_url()?>"
            	showProduk(1);
            	$(document).ready(function () {
            		$(document).on("click", ".pagination li a", function (event) {
            			event.preventDefault();
            			var page = $(this).data("ci-pagination-page");
            			showProduk(page);
            		});
            		localStorage.setItem('phone_number', null)
            		localStorage.setItem('kode_produk', null)
            	});
            	// use for show opsi harga produk
            	function showOpsiHarga() {
            		$("#modal-opsi-harga").modal("show");
            	}

            	function getValue(id) {
            		let newId = id;
            		let result = newId.replace(/-/g, "");
            		result = result.replace(/\+/, "");
            		result = result.replace(" ", "");
            		$(".table-row").removeAttr("style");
            		$("#namerow_" + result).attr("style", "background: rgb(180, 235, 180);");
            		checkData(id)
            	}
				// use for change color row pending
				function getValueRowPending(faktur) {
					$(".row-pending").removeAttr("style");
					$(".numberRowPending_" + faktur).attr("style", "background: rgb(180, 235, 180);");
				 }
            	// use for reset buyer form
            	function resetBuyerForm() {
            		$("#buyerForm")[0].reset();
            	}

            	function checkData(id) {
            		localStorage.setItem("phone_number", id)
            		$.ajax({
            			type: "POST",
            			url: url + "Penjualan/getDataMember",
            			data: {
            				phone_number: id
            			},
            			dataType: "JSON",
            			success: function (response) {
            				$("#nama_member").val(response.data.nama);
            				$("#alamat").val(response.data.alamat);
            				$("#hp").val(response.data.hp);
            				$("#mail").val(response.data.mail);
            			}
            		});
            	}
            	// use for next buyer form
            	function nextBuyerForm() {
            		phone_number = localStorage.getItem("phone_number")
            		console.log(phone_number);
            		if (phone_number == "null") {
            			swal({
            				title: "Peringatan!",
            				text: "Silahkan pilih data member terlebih dahulu",
            				icon: "warning",
            				button: "Ok",
            			});
            		} else {
            			$("#modalMember").modal("hide");

            		}
            	}
            	//   use for show data produk to modal
            	function showProduk(page) {
            		$.ajax({
            			type: "GET",
            			url: url + "Penjualan/getDataProduk/" + page,
            			dataType: "JSON",
            			success: function (response) {
            				let table = "";
            				$.each(response.pagination_results, function (indexInArray, valueOfElement) {
            					table += `<tr class=" table-row-produk rowProdukname_${valueOfElement.kode}" onclick="produkSelected('${valueOfElement.kode}')">
            							<td>${indexInArray+1}</td>
            							<td>${valueOfElement.kategori}</td>
            							<td>${valueOfElement.kode}</td>
            							<td>${valueOfElement.nama}</td>
            							<td>${valueOfElement.stok}</td>
            							<td>${valueOfElement.harga}</td>
            							<td>${valueOfElement.grosir_1}</td>
            							<td>Grosir 2</td>
            							<td>Grosir 3</td>
            							<tdp>Grosir 2(1)</tdp>
            							<td>Grosir 2(2)</td>
            							<td>Grosir 2(3)</td>
            						</tr>`;
            				});
            				$(".produk-pagination-links").html(response.pagination_links);
            				$(".produk-result-count").html(response.result_count);
            				$("#show-data-produk").html(table);
            			}
            		});
            	}
            	// change color row produk
            	function produkSelected(kode) {
            		localStorage.setItem('kode_produk', kode);
            		$(".table-row-produk").removeAttr("style");
            		$(".rowProdukname_" + kode).attr("style", "background: rgb(180, 235, 180);");
            	}
            	//  next product after selected on data product
            	function nextProduk() {
            		let kode_produk = localStorage.getItem('kode_produk');
            		if (kode_produk == "null") {
            			swal({
            				title: "Peringatan!",
            				text: "Silahkan pilih data produk terlebih dahulu",
            				icon: "warning",
            				button: "Ok",
            			});
            		} else {
            			findProduk(kode_produk)
            		}
            	}
            	// find product by scanner tool
            	function findProductByScanner() {
            		let code = $("#kode_produk").val();
            		findProduk(code)
            	}
            	// use for find product
            	function findProduk(code) {
            		$.ajax({
            			type: "POST",
            			url: url + "Penjualan/findSpecificProductByCode",
            			data: {
            				code: localStorage.getItem('kode_produk')
            			},
            			dataType: "JSON",
            			success: function (response) {
            				$("#modalProduk").modal("hide");
            				$("#kode_produk").val(response.kode);
            				$("#namaproduk").val(response.nama);
            				$("#satuan").val(response.satuan);
            			},
            			error: function () {
            				swal({
            					title: "Peringatan!",
            					text: "Data produk tidak ditemukan",
            					icon: "warning",
            					button: "Ok",
            				});
            			}
            		});
            	}

            </script>