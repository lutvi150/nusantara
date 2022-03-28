                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="font-size: 14px;">
                                            <tr>
                                                <th colspan="2">#</th>
                                                <th>Tanggal</th>
                                                <th>Faktur</th>
                                                <th>Nama</th>
                                                <th>Total Harga</th>
                                                <th>Keterangan</th>
                                                <th>Byr Terakhir</th>
                                                <th>Byr Ke</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Tempo Bayar</th>
                                                <th>Tanggal Ambil</th>
                                                <th>Kasir</th>
                                                <th>Telp/HP</th>
                                                <th>Status</th>
                                                <th>Prioritas</th>
                                                <th>Deadline</th>
                                                <th>Mesin</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;">
<?php $no=1; foreach ($order as $d) { echo '
                                            <tr>
                                                <td>'.$no++.'</td>
                                                <td>
                                                    <a href="'.base_url('status_order/d/'.$d->faktur).'" class="btn-edit" style="margin-right: 5px; margin-bottom: 5px;"><span class="iconify-inline" data-icon="akar-icons:edit"></span></a>
                                                </td>
                                                <td>'.$d->tgl.'</td>
                                                <td>'.$d->faktur.'</td>
                                                <td>'.$d->customer_name.'</td>
                                                <td>'.$d->total_harga.'</td>
                                                <td>'.$d->keterangan.'</td>
                                                <td>'.$d->bayar.'</td>
                                                <td>'.$d->angsuran.'</td>
                                                <td>'.$d->tgl_bayar.'</td>
                                                <td>'.$d->tgl_tempo.'</td>
                                                <td>'.$d->tgl_ambil.'</td>
                                                <td>'.$d->kasir.'</td>
                                                <td>'.$d->customer_id.'</td>
                                                <td>'.$d->status.'</td>
                                                <td>'.$d->prioritas.'</td>
                                                <td>'.$d->tgl_kirim.'</td>
                                                <td>'.$d->kasir.'</td>
                                            </tr>
'; } ?>
                                        </tbody>
                                    </table>
                                </div>