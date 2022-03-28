        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <?php if ($lokasi == 'CABANG 3') { echo '<img src="'.base_url('assets/img/Zira.png').'" alt="Nusantara" style="margin-right: 5px; width: 40px; height: auto;" />'; }
                            else { echo '<img src="'.base_url('assets/img/elseZira.png').'" alt="Nusantara" style="margin-right: 5px; width: 40px; height: auto;" />'; } ?>
                        </a>
                        <?=$nama_cabang;?>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?=base_url('dashboard');?>">
                                <span class="iconify-inline icon" data-icon="ic:baseline-dashboard"></span>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?=base_url('penjualan');?>">
                                <span class="iconify-inline icon" data-icon="el:tag"></span>Penjualan</a>
                        </li>
                        <li>
                            <a href="<?=base_url('status_order');?>">
                                <span class="iconify-inline icon" data-icon="mdi:calendar-account-outline"></span>Status Order</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="iconify-inline icon" data-icon="clarity:logout-line"></span>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <?php if ($lokasi == 'CABANG 3') { echo '<img src="'.base_url('assets/img/Zira.png').'" alt="Nusantara" style="margin-right: 5px; width: 40px; height: auto;" />'; }
                    else { echo '<img src="'.base_url('assets/img/elseZira.png').'" alt="Nusantara" style="margin-right: 5px; width: 40px; height: auto;" />'; } ?>
                <?=$nama_cabang;?>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="">
                            <a href="<?=base_url('dashboard');?>">
                                <span class="iconify-inline icon" data-icon="ic:baseline-dashboard"></span>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?=base_url('penjualan');?>">
                                <span class="iconify-inline icon" data-icon="el:tag"></span>Penjualan</a>
                        </li>
                        <li>
                            <a href="<?=base_url('status_order');?>">
                                <span class="iconify-inline icon" data-icon="mdi:calendar-account-outline"></span>Status Order</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->