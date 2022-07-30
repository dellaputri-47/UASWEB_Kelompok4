<?php $url = base_url() . "Assets/" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Transaksi</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?= $url ?>css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= $url ?>css/feather.css">
    <link rel="stylesheet" href="<?= $url ?>css/select2.css">
    <link rel="stylesheet" href="<?= $url ?>css/dropzone.css">
    <link rel="stylesheet" href="<?= $url ?>css/uppy.min.css">
    <link rel="stylesheet" href="<?= $url ?>css/jquery.steps.css">
    <link rel="stylesheet" href="<?= $url ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= $url ?>css/quill.snow.css">
    <!-- <link rel="stylesheet" href="<?= $url ?>css/bootstrap.min.css"> -->
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= $url ?>css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= $url ?>css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="<?= $url ?>css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a>
                </div>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Menu</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/Dashboard/index">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Barang</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Barang/KategoriBarang"><span class="ml-1 item-text">Kategori Barang</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Barang/DataBarang"><span class="ml-1 item-text">Data Barang</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Barang/BarangMasuk"><span class="ml-1 item-text">Barang Masuk</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Barang/BarangKeluar"><span class="ml-1 item-text">Barang Keluar</span></a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-user fe-16"></i>
                            <span class="ml-3 item-text">Pengguna</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Profile/Profil"><span class="ml-1 item-text">Profil</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Profile/TambahPengguna"><span class="ml-1 item-text">Tambah Pengguna</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/Profile/ResetPassword"><span class="ml-1 item-text">Reset Password</span></a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/Transaksi/index">
                            <i class="fe fe-credit-card fe-16"></i>
                            <span class="ml-3 item-text">Transaksi </span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/Laporan/index">
                            <i class="fe fe-printer fe-16"></i>
                            <span class="ml-3 item-text">Laporan </span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Documentation</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="../docs/index.html">
                            <i class="fe fe-help-circle fe-16"></i>
                            <span class="ml-3 item-text">Getting Start</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <section class=" content-header" style="margin-left: 7cm;">
            <h1>Sales
                <small>Penjualan</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="#" class="fa fa-dashboard"></a></li>
                <li>Transaction</li>
                <li class="active">Sales</li>

            </ol>
        </section>

        <section class="content" style="margin-left: 7.5cm; margin-top:1cm;">
            <div class="row">
                <div class="col-lg-5">
                    <div class="box box-widget">
                        <div class="box-body">
                            <form action="<?= site_url('Transaksi/add') ?>" method="post">
                                <div class="form-group">
                                    <label for="Product_name" class="font-weight-bold">Nama Produk <span class="text-danger">*</span></label>
                                    <select name="product_id" id="mySelect" class="select2 form-control">
                                        <option value=""></option>
                                        <?php foreach ($barang as $row_barang) { ?>
                                            <option value="<?= $row_barang->id_barang ?>"><?= $row_barang->nama_barang ?> </option>
                                        <?php }  ?>
                                    </select>
                                    <small>Sisa <span id="mySpan"></span></small>
                                </div>
                                <label for="jumlah" class="font-weight-bold">Jumlah <span class="text-danger">*</span></label>
                                <input type="number" name="qty" value="1" min="0.01" step="0.01" class="form-control">
                                <button type="submit" name="submit" class="btn btn-success mt-3 text-white"><i class="fas fa-cart-plus "></i> Tambah</button>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#Modalkeranjang">
                                    Hapus
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="Modalkeranjang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Keranjang Belanja</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="<?= $url ?>img/Seru.jpg" alt="Gambar" height="100px" style="margin-left:180px;">
                                                <p style="text-align: center;">Hapus akan menghilangkan semua barang didalam keranjang belanja</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-warning"><a style="color: #fff;" href="<?= base_url() . "Transaksi/hapusCart" ?>">Hapus</a> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="box box-widget">
                        <div class="box-body">
                            <div align="right" style="margin-right: 1cm;">
                                <h4>Invoice <b> <span id="invoice"><?= $invoice ?></span></b></h4>
                                <?php $total = 0;
                                foreach ($temp->result() as $index => $row) {

                                    $total += $row->total;
                                } ?>
                                <h1><b><span id="grand_total" style="font-size: 50pt;">Rp. <?= $total ?></b></h1>
                                <button type="button" class="btn btn-warning  mt-3" data-toggle="modal" data-target="#form-bayar">Bayar</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="form-bayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="<?= base_url() . "Transaksi/bayar/" ?>" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Bayar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="invoice">Invoice No</label>
                                                <input type="text" name="invoice" value="<?= $invoice ?>" class="form-control" readonly>
                                                <label for="total">Total</label>
                                                <input type="number" id="total" name="total" value="<?= $total ?>" name="total" class="form-control" readonly>
                                                <label for="bayar">Bayar</label>
                                                <input type="number" id="bayar" value="" name="bayar" min="1000" class="form-control" onkeyup="sum();">
                                                <label for="kembalian">Kembalian</label>
                                                <input type="number" id="kembalian" name="kembalian" value="<?= $total ?>" name="total" class="form-control" readonly>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-warning">Bayar</button>
                                            </div>
                                        </form>
                                        <script>
                                            function sum() {
                                                var txtFirstNumberValue = document.getElementById('total').value;
                                                var txtSecondNumberValue = document.getElementById('bayar').value;
                                                var result = parseInt(-txtFirstNumberValue) + parseInt(txtSecondNumberValue);
                                                if (!isNaN(result)) {
                                                    document.getElementById('kembalian').value = result;
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="box box-widget">
                        <div class="box-body table-responsive">
                            <table class="table-bordered table-stripped table">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Product Items</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th width="15%">Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="cart_table">
                                    <tr>
                                        <?php error_reporting(0);
                                        foreach ($temp->result() as $index => $row) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $row->nama_barang ?></td>
                                        <td><?= $row->harga_barang ?></td>
                                        <td><?= $row->jumlah_barang ?></td>
                                        <td><?= $row->total ?></td>
                                        <td class="text-center">
                                            <!-- <a href="<?= base_url() ?>index.php/crud/update_form/<?= $row->id_mahasiswa ?>">Edit</a>-->
                                            <!-- <button type="button" class="btn btn-warning mt-3"><a href="<?= base_url() . "Transaksi/editId/" . $row->id_barang ?>" class="text-white">Edit</a> </button> -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning  mt-3" data-toggle="modal" data-target="#ModalEdit-<?= $row->id_barang ?>">Edit</button>
                                            <button type="button" class="btn btn-danger mt-3"><a href="<?= base_url() . "Transaksi/hapusId/" . $row->id_barang ?>" class="text-white">Hapus</a></button>

                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tr>
                                </tbody>
                            </table>

                            <!-- Modal -->
                            <div class="modal fade" id="ModalEdit-<?= $row->id_barang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="<?= base_url() . "Transaksi/editId/" . $row->id_barang ?>" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="<?= $row->id_barang ?>" class="form-control" readonly>
                                                <label for="input">Jumlah</label>
                                                <input type="number" name="jumlah" value="1" min="0.01" step="0.01" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-warning">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
        </section>
        <!-- <select id="mySelect" style="margin-left: 300px;">
            <option value="1">Monkey</option>
            <option value="2">Bear</option>
            <option value="3">Squirrel</option>
            <option value="4">Elephant</option>
        </select>
        <span id="mySpan">dd</span> -->
        <!-- <script>
            $(document).ready(function() {
                $("#mySelect").change(function() {
                    $('#mySpan').html($(this).val());
                }).change();
            });
        </script> -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded successfull</strong></small>
                                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated successfull</strong></small>
                                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been sent</strong></small>
                                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to menu</strong></small>
                                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="<?= $url ?>js/jquery.min.js"></script>
    <script src="<?= $url ?>js/popper.min.js"></script>
    <script src="<?= $url ?>js/moment.min.js"></script>
    <script src="<?= $url ?>js/bootstrap.min.js"></script>
    <script src="<?= $url ?>js/simplebar.min.js"></script>
    <script src='<?= $url ?>js/daterangepicker.js'></script>
    <script src='<?= $url ?>js/jquery.stickOnScroll.js'></script>
    <script src="<?= $url ?>js/tinycolor-min.js"></script>
    <script src="<?= $url ?>js/config.js"></script>
    <script src="<?= $url ?>js/d3.min.js"></script>
    <script src="<?= $url ?>js/topojson.min.js"></script>
    <script src="<?= $url ?>js/datamaps.all.min.js"></script>
    <script src="<?= $url ?>js/datamaps-zoomto.js"></script>
    <script src="<?= $url ?>js/datamaps.custom.js"></script>
    <script src="<?= $url ?>js/Chart.min.js"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="<?= $url ?>js/gauge.min.js"></script>
    <script src="<?= $url ?>js/jquery.sparkline.min.js"></script>
    <script src="<?= $url ?>js/apexcharts.min.js"></script>
    <script src="<?= $url ?>js/apexcharts.custom.js"></script>
    <script src='<?= $url ?>js/jquery.mask.min.js'></script>
    <script src='<?= $url ?>js/select2.min.js'></script>
    <script src='<?= $url ?>js/jquery.steps.min.js'></script>
    <script src='<?= $url ?>js/jquery.validate.min.js'></script>
    <script src='<?= $url ?>js/jquery.timepicker.js'></script>
    <script src='<?= $url ?>js/dropzone.min.js'></script>
    <script src='<?= $url ?>js/uppy.min.js'></script>
    <script src='<?= $url ?>js/quill.min.js'></script>
    <script src="<?= $url ?>js/transaksi.min.js"></script>
    <script src="<?= $url ?>js/canvasjs.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#mySelect").change(function() {
                var id = $(this).val();
                var jumlah = "<?php $this->db->select('jumlah_barang');
                                $this->db->where('id_barang', $_COOKIE['id']);
                                $this->db->limit(1);
                                $this->db->get('tb_barang'); ?>"
                $('#mySpan').html(jumlah);
            }).change();
        });
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
        $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
        $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
        /** date range picker */
        if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        }
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
        $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
        });
        $('.input-money').mask("#.##0,00", {
            reverse: true
        });
        $('.input-phoneus').mask('(000) 000-0000');
        $('.input-mixed').mask('AAA 000-S0S');
        $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            },
            placeholder: "___.___.___.___"
        });
        // editor
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{
                        'header': 1
                    },
                    {
                        'header': 2
                    }
                ],
                [{
                        'list': 'ordered'
                    },
                    {
                        'list': 'bullet'
                    }
                ],
                [{
                        'script': 'sub'
                    },
                    {
                        'script': 'super'
                    }
                ],
                [{
                        'indent': '-1'
                    },
                    {
                        'indent': '+1'
                    }
                ], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction
                [{
                        'color': []
                    },
                    {
                        'background': []
                    }
                ], // dropdown with defaults from theme
                [{
                    'align': []
                }],
                ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>


</body>

</html>