            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" style="padding-left: 10px;">
                            <div class="col-12 card" style="filter: drop-shadow(0px 12px 26px rgba(16, 30, 115, 0.06));">
                                <div id="filter">                                    
                                    <table class="table-vertical">
                                        <tbody class="tbody">
                                            <tr role="row" class="tr">
                                                <td role="cell" class="td">
                                                    Dari <input type="date"> Sampai <input type="date">
                                                </td>
                                                <td role="cell" class="td">
                                                    <input type="text" id="keyword" name="keyword" placeholder="Search">
                                                    <button type="button" class="btn btn-primary" id="btn-cari">Search</button>
                                                </td>
                                                <td role="cell" class="td" style="padding: 0 10px 10px 0;">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-filter" data-toggle="dropdown">
                                                            <span class="iconify-inline" data-icon="system-uicons:filtering"></span> Filter
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <h5 class="dropdown-header">Status</h5>
                                                            <a class="dropdown-item" href="#">Semua</a>
                                                            <a class="dropdown-item" href="#">Lunas</a>
                                                            <a class="dropdown-item" href="#">Belum Lunas</a>
                                                            <a class="dropdown-item" href="#">Diterima</a>
                                                            <a class="dropdown-item" href="#">Dikerjakan</a>
                                                            <a class="dropdown-item" href="#">Selesai</a>
                                                            <a class="dropdown-item" href="#">Diambil</a>
                                                            <div class="dropdown-divider"></div>
                                                            <h5 class="dropdown-header">Urutkan</h5>
                                                            <a class="dropdown-item" href="#">Terbaru</a>
                                                            <a class="dropdown-item" href="#">Terlama</a>
                                                        </div>
                                                    </div>   
                                                </td>
                                                <td role="cell" class="td" style="padding-bottom: 10px;">
                                                    <button class="btn btn-filter"><span class="iconify-inline" data-icon="bi:file-earmark-text"></span> Rekap</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="view">
                                    <?php $this->load->view('content/status_order_table', array('order' => $order)); ?>
                                </div>
                                <br>
                                <?php echo $links; ?>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>