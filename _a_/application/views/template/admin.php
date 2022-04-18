<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="Krishna K Tiwari">
        <title>CG WEB NEWS ADMIN</title>
        <link href="<?= base_url('public/theme/admin/css/styles.css') ?>" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <!--
        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        -->
        <link rel="stylesheet" href="<?= base_url('public/theme/richtext/richtext.min.css') ?>">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url('admin/') ?>">CG WEB NEWS</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <?php  if ($this->session->userdata('isAdminLoggedIn') == TRUE): ?>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url() ?>admin/dashboard/">Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url() ?>admin/logout/">Logout</a>
                    </div>
                </li>
            </ul>
            <?php endif ?>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <?php  if ($this->session->userdata('isAdminLoggedIn') == TRUE): ?>
                            <a class="nav-link" href="<?php echo base_url() ?>admin/dashboard/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">News</div>
                            <a class="nav-link" href="<?php echo base_url() ?>admin/category/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Category
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navPost" aria-expanded="false" aria-controls="navPost">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Post
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="navPost" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo base_url() ?>admin/post/add/">Add Post</a><a class="nav-link" href="<?php echo base_url() ?>admin/post/">View Post</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navAds" aria-expanded="false" aria-controls="navAds">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Advertisement
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="navAds" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url() ?>admin/advertisement/add/">Add Advertisement</a>
                                    <a class="nav-link" href="<?php echo base_url() ?>admin/advertisement/">Published</a>
                                    <a class="nav-link" href="<?php echo base_url() ?>admin/advertisement/onhold/">On Hold</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?php echo base_url() ?>admin/comment/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Comment
                            </a>
                            <a class="nav-link" href="<?php echo base_url() ?>admin/settings/sparsh/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Sparsh Update
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">My Profile</div>
                            <a class="nav-link" href="<?php echo base_url() ?>admin/logout/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Logout
                            </a>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata('admin')->name; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?= $content ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('public/theme/admin/js/scripts.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('public/theme/admin/assets/demo/chart-area-demo.js') ?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('public/theme/admin/assets/demo/datatables-demo.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('public/theme/richtext/jquery.richtext.js')  ?>"></script>
        <script src="<?= base_url('public/theme/shubhkamna/js/app.js') ?>"></script>
    </body>
</html>