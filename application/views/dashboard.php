<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Modal</title>

    <!-- Fontfaces CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <!-- <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all"> -->
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <!-- <link href="vendor/slick/slick.css" rel="stylesheet" media="all"> -->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="chart.html">
                                <span class="iconify-inline icon" data-icon="ic:baseline-dashboard"></span>Dashboard</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <span class="iconify-inline icon" data-icon="el:tag"></span>Penjualan</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <span class="iconify-inline icon" data-icon="mdi:calendar-account-outline"></span>Status Order</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="form-header">
                                <a href=""><button class="btn">
                                    <span class="iconify" data-icon="iconoir:menu-scale" style="color: #fff; font-size: 20px;"></span>
                                </button></a>
                                <span class="title-page">Dashboard</span>
                            </div>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-white" style="padding: 30px 25px 10px 25px; border-radius: 10px; background: linear-gradient(257.2deg, #3E6990 1.99%, #6392BD 99.56%);">
                                    <span style="font-size: 22px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Total</span><br>
                                    <span style="font-size: 28px; font-weight: 600; line-height: 29.26px;">Pendaftar</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span style="font-size: 78px; font-weight: 800; line-height: 37px;"><?php echo $jml_pendaftar;?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="text-white" style="padding: 30px 25px 10px 25px; border-radius: 16px; background: linear-gradient(256.6deg, #9B7702 0%, #D0AA2E 100.95%);">
                                    <span style="font-size: 22px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Total</span><br>
                                    <span style="font-size: 28px; font-weight: 600; line-height: 29.26px;">Artikel</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span style="font-size: 78px; font-weight: 800; line-height: 37px;"><?php echo $jml_artikel;?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="text-white" style="padding: 30px 25px 10px 25px; border-radius: 16px; background: linear-gradient(256.81deg, #A5402D -1.04%, #CB6957 100.86%);">
                                    <span style="font-size: 22px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Total</span><br>
                                    <span style="font-size: 28px; font-weight: 600; line-height: 29.26px;">Video</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span style="font-size: 78px; font-weight: 800; line-height: 37px;"><?php echo $jml_video;?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="text-white" style="padding: 30px 25px 10px 25px; border-radius: 16px; background: linear-gradient(256.81deg, #A5402D -1.04%, #CB6957 100.86%);">
                                    <span style="font-size: 22px; font-weight: bold; line-height: 29.26px; letter-spacing: 0.4px;">Total</span><br>
                                    <span style="font-size: 28px; font-weight: 600; line-height: 29.26px;">Video</span>
                                    <div class="text-right" style="bottom: 0;">
                                        <span style="font-size: 78px; font-weight: 800; line-height: 37px;"><?php echo $jml_video;?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-25">
                            <div class="card col-12">
                                <table class="table">
                                    <thead>
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
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS-->
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
