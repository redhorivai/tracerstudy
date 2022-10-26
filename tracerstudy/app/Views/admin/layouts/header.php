<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner">
        <!-- logo start -->
        <div class="page-logo"><a href="#"><img src="<?= base_url(); ?>/assets/img/favicon_poltekpar.ico">
                <span class="logo-default">&nbsp;Poltekpar</span></a>
        </div>
        <!-- <div class="page-logo">
            <a href="index.html">
                <span class="logo-icon material-icons fa-rotate-45">school</span>
                <span class="logo-default">Poltekpar</span> </a>
        </div> -->

        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
            <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>
        </ul>

        <!-- start mobile menu -->
        <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- start notification dropdown -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i data-feather="bell"></i>
                        <span class="badge headerBadgeColor1"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Notifications</span></h3>
                            <span class="notification-label purple-bgcolor">0</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">

                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="javascript:void(0)"> All notifications </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end notification dropdown -->
                <!-- start manage user dropdown -->
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle " src="../assets/img/dp.jpg" />
                        <span class="username username-hide-on-mobile"> Sneha
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
                            <a href="<?= base_url() ?>/login/logout">
                                <i class="icon-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>