            <style>
            	.text-error {
            		color: red;
            	}

            </style>
            <div class="main-content">
            	<div class="section__content section__content--p30">
            		<div class="container-fluid">
            			<div class="row" onclick="editTable(1,false,'')">
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
            												<input type="text" id="id_member" class="form-control">
            												<div class="input-group-append">
            													<button type="button" class="btn btn-group-grey"
            														data-toggle="modal"
            														data-target="#modalMember">...</button>
            												</div>
            											</div>

            											<span class="text-error eid_member"></span>
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
            										<span class="text-error ekode_produk"></span>
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
            										<input type="text" readonly id="satuan" class="form-control">
            									</div>
            								</div>
            								<div class="hr-blue"></div>
            								<div class="row mb-2">
            									<div class="col-4">Ukuran</div>
            									<div class="col-8">
            										<div class="form-inline">
            											<div class="form-group mr-2">P</div>
            											<div class="form-group mr-2"><input type="text"
            													class="form-control" id="u_p" style="width: 60px;">
            											</div>
            											<div class="form-group mr-2" style="padding: 0 7px 0 5px;">X
            											</div>
            											<div class="form-group mr-2">L</div>
            											<div class="form-group mr-2"><input type="text" id="u_l"
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
            										<div class="form-group mr-2">
            											<input type="text" id="qty" class="form-control"
            												style="width: 90px;">
            										</div>
            										<div class="form-group">
            											<input type="text" readonly class="form-control satuan"
            												style="width: 94px;">
            										</div>
            									</div>
            									<div class="col-md-4"></div>
            									<div class="col-md-8">
            										<span class="text-error eqty"></span>
            									</div>

            								</div>
            								<div class="row mb-2">
            									<div class="col-4">Keterangan</div>
            									<div class="col-12">
            										<textarea class="form-control" id="keterangan"></textarea>
            									</div>
            								</div>
            								<div class="row mb-2">
            									<div class="col-12 text-right">
            										<button onclick="chartAdd()" type="button"
            											class="btn btn-greylight"><span class="iconify-inline"
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
            										<div class="form-group mr-2"><input type="text" id=""
            												class="form-control" style="width: 60px;"></div>
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
            										<input type="text" id="harga_produk" class="form-control">
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
            						<tbody class="show-cart">
            							<tr hidden>
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
            						<div class="col-4">
            							<label class="form-check-label">
            								<input type="checkbox" class="form-check-input" value=""> Bayar
            								Tempo</label>
            						</div>
            						<div class="col-6">
            							<input type="date" class="form-control">
            						</div>
            					</div>
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4">
            							<label>DP</label>
            						</div>
            						<div class="col-6">
            							<input type="number" class="form-control">
            						</div>
            					</div>
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4">
            							<label>Bayar</label>
            						</div>
            						<div class="col-6">
            							<input type="number" onkeypress="priceBack()" class="form-control bayar">
										<span class="text-error ebayar"></span>
            						</div>
            					</div>
            					<div class="row form-group" style="margin-bottom: 10px;">
            						<div class="col-4">
            							<label>Kembali</label>
            						</div>
            						<div class="col-6">
            							<input readonly type="number" class="form-control kembali">
            						</div>
            					</div>
            					<div class="hr-blue"></div>
            					<div class="row mb-2">
            						<div class="col-12">
            							<label class="form-check-label">
            								<input type="radio" onclick="enBtnTypePayment(true)" class="form-check-input type-payment" id="tunai" name="jenis"
            									value="Cash">BayarTunai (Cash)
            							</label>
            						</div>
            					</div>
            					<div class="row mb-4">
            						<div class="col-12">
            							<label class="form-check-label">
            								<input type="radio" class="form-check-input type-payment" onclick="enBtnTypePayment(false)"  id="nontunai" name="jenis"
            									value="Non Tunai">Bayar Non Tunai
            							</label>
            						</div>
            						<div class="col-12">
            							<?php echo form_dropdown('id_kategori', $dd_kategori, $id_kategori, ' id="id_kategori" required class="form-control" disabled'); ?>
								<span class="text-error ejenis_pembayaran"></span>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-6"><button type="button" class="btn btn-block btn-terang"
            								style="margin-right: 10px; padding: 7px 20px;"
            								data-dismiss="modal">Batalkan</button></div>
            						<div class="col-6"><button type="button" onclick="processTransaction()"
            								class="btn btn-block btn-simpan"
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
            								<button type="button" onclick="nextDataPending()" class="btn btn-simpan"
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
            								<tr class="row-pending numberRowPending_<?=$dp->faktur?>"
            									onclick="getValueRowPending('<?=$dp->faktur?>')">
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
            						<select class="form-control" id="select-tampilkan" onchange="showProduk(1)">
            							<option value="Semua">Semua</option>
            							<option value="NGPS">NGPS</option>
            							<option value="NKPS">NKPS</option>
            						</select>
            					</div>
            					<div class="col-4">
            						Cari
            						<div class="input-group mb-3">
            							<input type="text" class="form-control" onkeyup="showProduk(1)" id="search-produk" style="border-right: 0;">
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
            				</table>5
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
            <div class="modal fade" id="modal-opsi-harga" style="display: ;" tabindex="-1" role="dialog"
            	aria-labelledby="modelTitleId" aria-hidden="true">
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
            						<tr>
            							<td></td>
            							<td></td>
            							<td></td>
            						</tr>
            					</tbody>
            				</table>
            			</div>
            			<div class="modal-footer">
            				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
            				<button type="button" onclick="movePriceOptionToInput()" class="btn btn-primary btn-xs"
            					style="padding: 7x 30px;">Pilih</button>
            			</div>
            		</div>
            	</div>
            </div>
            <script src="<?=base_url()?>assets/vendor/jquery/jquery-3.6.0.min.js"></script>
            <script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            	let url = "<?=base_url()?>"
            	showProduk(1);
            	showCart();
            	$(document).ready(function () {
            		$(document).on("click", ".pagination li a", function (event) {
            			event.preventDefault();
            			var page = $(this).data("ci-pagination-page");
            			showProduk(page);
            		});
            		localStorage.clear();
            	});
            	// use for show opsi harga produk
            	function showOpsiHarga() {
            		let kode_produk = localStorage.getItem('kode_produk')
            		$.ajax({
            			type: "POST",
            			url: url + "Penjualan/getPriceOption",
            			data: {
            				kode_produk: kode_produk
            			},
            			dataType: "JSON",
            			success: function (response) {
							let html = "";
            					$.each(response.data, function (indexInArray, valueOfElement) {
            						html += `<tr class="rowPriceOption priceOption_${valueOfElement.id}" onclick="priceOptionSelected(${valueOfElement.id})">
										<td>${indexInArray+1}</td>
										<td>${valueOfElement.jenis_member}</td>
										<td>${valueOfElement.harga}</td>
									</tr>`;
            					});
            					$("#show-data-opsi-harga").html(html);
            					$("#modal-opsi-harga").modal("show");
            			},
            			error: function () {
            				swal({
            					title: "Gagal",
            					text: "Gagal mengambil data",
            					icon: "error",
            					button: "Ok",
            				});
            			}
            		});
            	}
            	// change color row price option selected
            	function priceOptionSelected(id) {
            		localStorage.setItem('id_price_option', id);
            		localStorage.setItem('price_option', $(`.priceOption_${id}`).find('td:eq(2)').text());
            		$(".rowPriceOption").removeAttr("style");
            		$(".priceOption_" + id).attr("style", "background: rgb(180, 235, 180);");
            	}
            	// show price option selected to input
            	function movePriceOptionToInput() {
            		if (localStorage.getItem('id_price_option')) {
            			nextProduk();
            			setTimeout(function () {
            				$("#harga_produk").val(localStorage.getItem('price_option'));
            				$("#harga_produk").focus();
            			}, 500);
            			$("#modal-opsi-harga").modal("hide");
            			$("#modalProduk").modal("hide");
            		} else {
            			swal({
            				title: "Opsi Harga Produk",
            				text: "Opsi harga produk belum dipilih",
            				icon: "warning",
            				button: "OK",
            			});
            		}

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
            		localStorage.setItem('faktur', faktur);
            		$(".row-pending").removeAttr("style");
            		$(".numberRowPending_" + faktur).attr("style", "background: rgb(180, 235, 180);");
            	}
            	// use for process data pending
            	function nextDataPending() {
            		let faktur = localStorage.getItem('faktur');
            		$.ajax({
            			type: "POST",
            			url: url + "Penjualan/getDataPending",
            			data: {
            				faktur: faktur
            			},
            			dataType: "JSON",
            			success: function (response) {
            				if (response.data == "not_found") {
            					swal({
            						title: "Data Pending",
            						text: "Data pending tidak ditemukan",
            						icon: "warning",
            						button: "OK",
            					});
            				} else {
            					$("#nama_member").val(response.transaksi_jual_pending.customer_name);
            					$("#hp").val(response.transaksi_jual_pending.hp);
            					$("#email").val(response.transaksi_jual_pending.mail);
            					let html = "";
            					$.each(response.data, function (indexInArray, valueOfElement) {
            						html += `<tr class="row_cart_${valueOfElement.id}"  >
            								<td>${indexInArray+1}</td>
            								<td>${valueOfElement.id}</td>
            								<td>${valueOfElement.nama_brg}</td>
            								<td>${valueOfElement.sat}</td>
            								<td>
            									<span class="editxt_${valueOfElement.id} show-text" onclick="editTable('${valueOfElement.id}',true,'ket')" >${valueOfElement.ket}</span>
            									<textarea type="text" class="form-control edit-text" hidden="true" id="txtedit_${valueOfElement.id}" onkeyup="updateCart('${valueOfElement.id}','pending')" onblur="editTable('${valueOfElement.id}',false)" >${valueOfElement.ket}</textarea>

            								</td>
            								<td class="harga_${valueOfElement.id}">${valueOfElement.harga_brg}</td>
            								<td><span class="editqty_${valueOfElement.id} show-text" onclick="editTable('${valueOfElement.id}',true,'qty')" >${valueOfElement.qty}</span><input type="text" hidden="true" value="${valueOfElement.qty}" onkeyup="updateCart('${valueOfElement.id}','pending')"  class="form-control input-edit-qty edit-text id-edit-qty-${valueOfElement.id}" ></td>
            								<td class="total_harga_${valueOfElement.id}" >${valueOfElement.subtotal}</td>
            								<td><a href="#" onclick="deleteCart(${valueOfElement.id})" class="btn-hapus"><span class="iconify-inline"
            											data-icon="fa6-solid:trash-can"></span></a></td>
            							</tr>`
            					});
            					$(".txtotal").text("RP. " + response.total_harga);
            					$(".show-cart").html(html);
            					$("#modalPending").modal("hide");
            					// use for store total price to localstorage
            					localStorage.setItem('total_harga', response.total_harga);
								localStorage.setItem('jenis','pending');
								// save faktur to local
								localStorage.setItem('faktur',response.transaksi_jual_pending.faktur);
            				}
            			},
            			error: function () {
            				swal({
            					title: "Gagal",
            					text: "Gagal mengambil data",
            					icon: "error",
            					button: "Ok",
            				});
            			}
            		});
            	}
            	// use for make table can edit by click
            	function editTable(kode_brg, status, type) {
            		$(".show-text").removeAttr("hidden");
            		$(".edit-text").attr("hidden", true);
            		console.log(status);
            		if (status == true) {
            			if (type == 'ket') {
            				$("#txtedit_" + kode_brg).removeAttr("hidden");
            				$(".editxt_" + kode_brg).attr("hidden", true);
            			} else if (type == 'qty') {
            				$(".editqty_" + kode_brg).attr("hidden", true);
            				$(".id-edit-qty-" + kode_brg).removeAttr("hidden");
            			}
            		} else {
            			$(".show-text").removeAttr("hidden");
            			$(".edit-text").attr("hidden", true);
            		}
            	}
            	// use for update data when click edit on table
            	function updateCart(kode_brg, jenis_field) {
            		$.ajax({
            			type: "POST",
            			url: url + "penjualan/updateCart",
            			data: {
            				kode_brg: kode_brg,
            				qty: $(".id-edit-qty-" + kode_brg).val(),
            				ket: $("#txtedit_" + kode_brg).val(),
            				jenis_field: jenis_field,
            				total_harga: $(".harga_" + kode_brg).text(),
            			},
            			dataType: "JSON",
            			success: function (response) {
            				if (response.status == 'success') {
            					$(".total_harga_" + response.id_cart).text(response.total_harga);
            					$(".editxt_" + response.id_cart).text(response.keterangan);
            					$(".editqty_" + response.id_cart).text(response.qty);
            					$(".txtotal").text("Rp. " + response.total_keseluruhan);
            				}

            			},
            			error: function () {
            				swal({
            					title: "Gagal",
            					text: "Nilai Tidak Sesuai Kriteria Sistem",
            					icon: "error",
            					button: "Ok",
            				});
            			}
            		});
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
							$("#id_member").val(response.data.id);
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
					let filter=$("#search-produk").val();
					let jenis=$("#select-tampilkan").children("option:selected").val();
            		$.ajax({
            			type: "POST",
            			url: url + "Penjualan/getDataProduk/" + page,
						data:{jenis:jenis,filter:filter},
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
            				$("#harga_produk").val(response.harga);
            				$(".satuan").val(response.satuan);
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
            	// use for add chart
            	function chartAdd() {
            		$(".text-error").text("");
            		let data = {
            			kode_produk: localStorage.getItem('kode_produk'),
            			qty: $("#qty").val(),
            			harga: $("#harga_produk").val(),
            			keterangan: $("#keterangan").val(),
            		}
            		$.ajax({
            			type: "POST",
            			url: url + "penjualan/cartAdd",
            			data: data,
            			dataType: "JSON",
            			success: function (response) {
            				if (response.status == 'validation_failed') {
            					$(".eid_member").text(response.message.id_member);
            					$(".eqty").text(response.message.qty);
            					$(".ekode_produk").text(response.message.kode_produk);
            				} else if (response.status == 'success') {
            					$("#kode_produk").val("");
            					$("#namaproduk").val("");
            					$("#satuan").val("");
            					$("#u_p").val("");
            					$("#u_l").val("");
            					$("#qty").val("");
            					$(".satuan").val("");
            					$("#harga_produk").val("");
            					showCart();
            					swal({
            						title: "Berhasil!",
            						text: "Data berhasil ditambahkan",
            						icon: "success",
            						button: "Ok",
            					});
            				} else if (response.status == 'failed') {
            					swal({
            						title: "Gagal!",
            						text: "Produk sudah ada di chart",
            						icon: "error",
            						button: "Ok",
            					});
            				}
            			},
            			error: function () {
            				swal({
            					title: "Peringatan!",
            					text: "Server Error",
            					icon: "warning",
            					button: "Ok",
            				});
            			}
            		});
            	}
            	// show cart to table
            	function showCart() {
            		$.ajax({
            			type: "POST",
            			url: url + "penjualan/getCartData",
            			data: {
            				id_member: $("#id_member").val(),
            				kode_transaksi: 1,
            			},
            			dataType: "JSON",
            			success: function (response) {
            				if (response.status == 'success') {
            					let html = "";
            					$.each(response.data, function (indexInArray, valueOfElement) {
            						html += `<tr class="row_cart_${valueOfElement.id_cart}" >
            								<td>${indexInArray+1}</td>
            								<td>${valueOfElement.kode_produk}</td>
            								<td>${valueOfElement.nama}</td>
            								<td>${valueOfElement.satuan}</td>
											<td>
            									<span class="editxt_${valueOfElement.id_cart} show-text" onclick="editTable('${valueOfElement.id_cart}',true,'ket')" >${valueOfElement.keterangan}</span>
            									<textarea type="text" class="form-control edit-text" hidden="true" id="txtedit_${valueOfElement.id_cart}" onkeyup="updateCart('${valueOfElement.id_cart}','cart')" onblur="editTable('${valueOfElement.id_cart}',false)" >${valueOfElement.keterangan}</textarea>

            								</td>
            								<td class="harga_${valueOfElement.id_cart}">${valueOfElement.harga}</td>
            								<td><span class="editqty_${valueOfElement.id_cart} show-text" onclick="editTable('${valueOfElement.id_cart}',true,'qty')" >${valueOfElement.qty}</span><input type="text" hidden="true" value="${valueOfElement.qty}"  class="form-control input-edit-qty edit-text id-edit-qty-${valueOfElement.id_cart}"  onkeyup="updateCart('${valueOfElement.id_cart}','cart')" ></td>
            								<td class="total_harga_${valueOfElement.id_cart}" >${valueOfElement.total_harga}</td>
            								<td><a href="#" onclick="deleteCart(${valueOfElement.id_cart})" class="btn-hapus"><span class="iconify-inline"
            											data-icon="fa6-solid:trash-can"></span></a></td>
            							</tr>`
            					});
            					$(".txtotal").text("RP. " + response.total_harga);
            					$(".show-cart").html(html);
            					// use for add total to localstorage
            					localStorage.setItem('total_harga', response.total_harga);
								// use for add type of chart
								localStorage.setItem('jenis','cart');
            				}
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
            	//  function delete cart
            	function deleteCart(id_cart) {
            		$.ajax({
            			type: "POST",
            			url: url + "penjualan/deleteCart",
            			data: {
            				id_cart: id_cart
            			},
            			dataType: "JSON",
            			success: function (response) {
            				if (response.status == 'success') {
            					swal({
            						title: "Berhasil!",
            						text: "Data berhasil dihapus",
            						icon: "success",
            						button: "Ok",
            					});
            					showCart();
            				}

            			},
            			error: function () {
            				swal({
            					title: "Peringatan!",
            					text: "Server Error",
            					icon: "warning",
            					button: "Ok",
            				});
            			}
            		});
            	}
            	// use for enable and disable btn slect category
				function enBtnTypePayment(status) {
					if (status==true) {
						console.log('disab;ed');
						$("#id_kategori").attr("disabled",true);
					} else{
						$("#id_kategori").removeAttr("disabled");
					}
				 }
            	// process transaction
            	function processTransaction() {
					$(".text-error").text("");
            		let bayar = $(".bayar").val();
            		let kembali = $(".kembali").val();
            		let bayar_non_tunai = $("#kategori").children("option:selected").val();
					let jenis_pembayaran=$(".type-payment:checked").val();
					let id_member=$("#id_member").val();
            		let total_harga = localStorage.getItem('total_harga');
					let no_hp=$("#hp").val();
            		$.ajax({
            			type: "POST",
            			url: url + "penjualan/transactionProcess",
            			data: {
							jenis:localStorage.getItem('jenis'),
							faktur:localStorage.getItem('faktur'),
            				bayar: bayar,
            				kembali: kembali,
            				bayar_non_tunai: bayar_non_tunai,
            				total_harga: total_harga,
							jenis_pembayaran:jenis_pembayaran,
							costumer_id:id_member,
							no_hp:no_hp,
            				costumer_name: $("#nama_member").val()
            			},
            			dataType: "JSON",
            			success: function (response) {
            				if (response.status == 'success') {
            					swal({
            						title: "Berhasil!",
            						text: "Transaksi Berhasil",
            						icon: "success",
            						button: "Ok",
            					});
            					$("#modalBayar").modal("hide");
            					$(".show-cart").html('');
            					$(".txtotal").text("RP. 0");
								window.open(url+"nota/index/"+response.faktur);
								resetBuyerForm();
            				} else if (response.status == 'validation_failed') {
								$(".ebayar").text(response.message.bayar);
								$(".ejenis_pembayaran").text(response.message.jenis_pembayaran);
            				} else if(response.status=='chart emty'){
								swal({
									title:"Maaf !!",
									text:response.msg,
									icon:"warning",
								});
							}

            			},
            			error: function () {
            				swal({
            					title: "Peringatan!",
            					text: "Server Error",
            					icon: "warning",
            					button: "Ok",
            				});
            			}
            		});
            	}
            	//  count price back after pay
            	function priceBack() {
            		let bayar = $(".bayar").val();
            		let total_harga = localStorage.getItem('total_harga');
            		let backPrice = parseInt(bayar) - parseInt(total_harga);
            		$(".kembali").val(backPrice)
            	}

            </script>
