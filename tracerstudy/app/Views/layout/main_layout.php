<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>POLTEKPAR PALEMBANG</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="<?= base_url(); ?>/assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="<?= base_url(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/material_style.css">
    <!-- inbox style -->
    <link href="<?= base_url(); ?>/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="<?= base_url(); ?>/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <!--select2-->
    <link href="<?= base_url(); ?>/assets/plugins/select2/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/favicon_poltekpar.ico" />
</head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-blue">
    <!-- SIDEBAR MENU -->
    <?= $this->include('layout/menu') ?>
    <!-- HEADER -->
    <?= $this->include('layout/header') ?>
    <!-- CONTENT -->
    <?= $this->renderSection('content') ?>
    <!-- FOOTER -->
    <?= $this->include('layout/footer') ?>
    <!-- LIBRARIES JS -->
    <?= $this->include('layout/js') ?>
</body>