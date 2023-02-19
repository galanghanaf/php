<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data['title']; ?></title>

    <!-- Start DataTables -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/asset/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/asset/datatables/css/buttons.dataTables.min.css">
    <script src="<?= BASEURL; ?>/asset/datatables/js/jquery-3.5.1.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/jszip.min.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/pdfmake.min.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/vfs_fonts.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/buttons.html5.min.js"></script>
    <script src="<?= BASEURL; ?>/asset/datatables/js/buttons.print.min.js"></script>
    <!-- End DataTables -->

    <!-- Start sweetalert -->
    <script src="<?= BASEURL; ?>/asset/sweetalert2-11.7.0/sweetalert2.all.min.js"></script>
    <!-- End sweetalert -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/asset/bootstrap-5.2.3/css/bootstrap.css">
    <script src="<?= BASEURL; ?>/asset/bootstrap-5.2.3/js/bootstrap.js"></script>
    <!-- Bootstrap -->

    <!-- Start FontAwesome -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/asset/fontawesome-v4/css/all.min.css">
    <!-- End FontAwesome -->

    <!-- Start CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <!-- End CSS -->

    <!-- Start Script JS -->
    <script src="<?= BASEURL; ?>/js/script.js"></script>
    <!-- Start Script JS -->

    <!-- Start CSS Cpanel -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/cpanel.css">
    <!-- End CSS Cpanel-->
</head>

<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-5 pt-4 pb-3 d-flex justify-content-between">
                <h1 class="fs-4"><span class="bg-white text-black rounded shadow px-2 me-2 py-0"><i class="fas fa-user-secret"></i></span> <span class="text-white">cPanel</span></h1>
                <button class="btn d-md-none d-block close-btn px-2 py-0 text-black mb-1 bg-white rounded shadow"><i class="fas fa-outdent"></i></button>
            </div>
            <ul class="list-unstyled px-2">
                <li class=""><a href="<?= BASEURL; ?>/cpanel" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-home"></i> Home</a></li>
                <li class=""><a href="<?= BASEURL; ?>/cpanel/datavisitor" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-users"></i> Data Visitor</a></li>
                <li class=""><a href="<?= BASEURL; ?>/cpanel/datakaryawan" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-briefcase"></i> Data Karyawan</a></li>
                <li class=""><a href="<?= BASEURL; ?>/cpanel/datauser" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-user-plus"></i> Data User</a></li>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-cog"></i> Settings</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">
                        <i class="fa fa-times-circle" aria-hidden="true"></i> Logout
                    </a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md bg-black">
                <div class="container-fluid">
                    <div class="d flex justify-content-between d-md-none d-block">
                        <button class="btn px-2 py-1 open-btn bg-black text-white rounded shadow"><i class="fas fa-indent"></i></button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <div class="text-end">

                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block text-decoration-none text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            Selamat Datang, Budi Sutanto <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle ms-2 mb-1 mt-1">
                        </a>
                    </div>
                </div>
            </nav>