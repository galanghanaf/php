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

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/visitor/style.css">
    <!-- CSS -->

</head>

<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>