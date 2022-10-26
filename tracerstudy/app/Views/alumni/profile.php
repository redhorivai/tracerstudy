<?php
                            $session = \Config\Services::session();
                        
                            ?>
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
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../assets/css/material_style.css">
    <!-- Theme Styles -->
    <link href="../assets/css/theme/full/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="../assets/css/theme/full/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/full/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/favicon_poltekpar.ico" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo"><a href="<?= base_url(); ?>/alumni/kuisoner"><img src="<?= base_url(); ?>/assets/img/favicon_poltekpar.ico">
                        <span class="logo-default">&nbsp;Poltekpar</span></a>
                </div>
                <!-- logo end -->
               
                <!-- start mobile menu -->
               
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                       
                      
                    
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown"
                                data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-gear"></i>
                                <span class="username username-hide-on-mobile"> 
                                    <?php
                                    $session = \Config\Services::session();
                                    echo   $session->get('nama');
                                    ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                           
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        <!-- end header -->
       
        <!-- start page container -->
        <div class="page-container">
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar" style="margin: 0px !important;">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title" style="margin: 0px !important;">Student Profile</div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <div class="card">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img src="../image/nopic.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <?= $session->get('nama'); ?>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>NIM</b> <a class="pull-right"><?= $session->get('nim'); ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>PRODI</b> <a class="pull-right"><?= $session->get('idprogstudi'); ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>STATUS</b> <a class="pull-right"><?= $session->get('statusmhs'); ?></a>
                                            </li>
                                        </ul>
                                        <!-- END SIDEBAR USER TITLE -->
                                       
                                    </div>
                                </div>
                               
                                <div class="card">
                                    <div class="card-head">
                                        <header>Address</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row text-center m-t-10">
                                            <div class="col-md-12">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                             <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="card">
                                        <div class="white-box">
                                            <!-- Nav tabs -->
                                            <div class="p-rl-20">
                                                <ul class="nav customtab nav-tabs" role="tablist">
                                                    <li class="nav-item"><a style="margin-bottom: 20px;" href="#tab1" class="nav-link active" data-bs-toggle="tab">About Me</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active fontawesome-demo" id="tab1">
                                                    <div id="biography">
                                                        <div class="row">
                                                            <?php
                                                            $nim = $session->get('nim');
                                                                $db = db_connect("plmdb");
                                                                $query = $db->query("SELECT * FROM dbsiswa WHERE nim ='$nim'");
                                                                // $query->getResult();

                                                                foreach ($query->getResult() as $key) {
                                                                    
                                                                
                                                            ?>
                                                            <div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
                                                                <br>
                                                                <p class="text-muted"><?= $key->nama ?></p>
                                                            </div>
                                                            <div class="col-md-3 col-6 b-r"> <strong>Mobile</strong>
                                                                <br>
                                                                <p class="text-muted"><?= $key->nohp ?></p>
                                                            </div>
                                                            <div class="col-md-3 col-6 b-r"> <strong>Email</strong>
                                                                <br>
                                                                <p class="text-muted"><?= $key->nemail ?></p>
                                                            </div>
                                                            <div class="col-md-3 col-6"> <strong>Location</strong>
                                                                <br>
                                                                <p class="text-muted"><?= $key->tempatlahir     ?></p>
                                                            </div>
                                                            <?php 
                                                                }
                                                            ?>
                                                        </div>
                                                        <hr>
                                                        
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                                
                        </div>
                    </div>
                </div>
                <!-- end page content -->
                <!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
                                        class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
                                        class="material-icons">settings</i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Start User Chat -->
                            <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                                id="quick_sidebar_tab_1">
                                <div class="chat-sidebar-list">
                                    <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                        data-wrapper-class="chat-sidebar-list">
                                        <div class="chat-header">
                                            <h5 class="list-heading">Online</h5>
                                        </div>
                                        <ul class="media-list list-items">
                                            <li class="media"><img class="media-object"
                                                    src="../assets/img/user/user3.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">John Deo</h5>
                                                    <div class="media-heading-sub">Spine Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">5</span>
                                                </div> <img class="media-object" src="../assets/img/user/user1.jpg"
                                                    width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Rajesh</h5>
                                                    <div class="media-heading-sub">Director</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object"
                                                    src="../assets/img/user/user5.jpg" width="35" height="35" alt="...">
                                                <i class="away dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jacob Ryan</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-danger">8</span>
                                                </div> <img class="media-object" src="../assets/img/user/user4.jpg"
                                                    width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Kehn Anderson</h5>
                                                    <div class="media-heading-sub">CEO</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object"
                                                    src="../assets/img/user/user2.jpg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Sarah Smith</h5>
                                                    <div class="media-heading-sub">Anaesthetics</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object"
                                                    src="../assets/img/user/user7.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Vlad Cardella</h5>
                                                    <div class="media-heading-sub">Cardiologist</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="chat-header">
                                            <h5 class="list-heading">Offline</h5>
                                        </div>
                                        <ul class="media-list list-items">
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-warning">4</span>
                                                </div> <img class="media-object" src="../assets/img/user/user6.jpg"
                                                    width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jennifer Maklen</h5>
                                                    <div class="media-heading-sub">Nurse</div>
                                                    <div class="media-heading-small">Last seen 01:20 AM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object"
                                                    src="../assets/img/user/user8.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Lina Smith</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                    <div class="media-heading-small">Last seen 11:14 PM</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">9</span>
                                                </div> <img class="media-object" src="../assets/img/user/user9.jpg"
                                                    width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jeff Adam</h5>
                                                    <div class="media-heading-sub">Compounder</div>
                                                    <div class="media-heading-small">Last seen 3:31 PM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object"
                                                    src="../assets/img/user/user10.jpg" width="35" height="35"
                                                    alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Anjelina Cardella</h5>
                                                    <div class="media-heading-sub">Physiotherapist</div>
                                                    <div class="media-heading-small">Last seen 7:45 PM</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Chat -->
                            <!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header">
                                        <h5 class="list-heading">Layout Settings</h5>
                                    </div>
                                    <div class="chatpane inner-content ">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Header</div>
                                                <div class="setting-set">
                                                    <select
                                                        class="page-header-option form-control input-inline input-sm input-small ">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Footer</div>
                                                <div class="setting-set">
                                                    <select
                                                        class="page-footer-option form-control input-inline input-sm input-small ">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">Account Settings</h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Notifications</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-1">
                                                            <input type="checkbox" id="switch-1"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Show Online</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-7">
                                                            <input type="checkbox" id="switch-7"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Status</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-2">
                                                            <input type="checkbox" id="switch-2"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">2 Steps Verification</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-3">
                                                            <input type="checkbox" id="switch-3"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">General Settings</h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Location</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-4">
                                                            <input type="checkbox" id="switch-4"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Save Histry</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-5">
                                                            <input type="checkbox" id="switch-5"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Auto Updates</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                            for="switch-6">
                                                            <input type="checkbox" id="switch-6"
                                                                class="mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chat sidebar -->
            </div>
            <!-- end page container -->
            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 &copy; Smart University Theme By
                    <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>
    </div>
    <!-- start js include path -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/popper/popper.js"></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/plugins/feather/feather.min.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- Common js-->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/layout.js"></script>
    <script src="../assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="../assets/plugins/material/material.min.js"></script>
    <!-- end js include path -->
</body>

</html>