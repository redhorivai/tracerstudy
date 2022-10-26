<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <?php
            $session = \Config\Services::session();
            if ($session->get('status_cd') == "alumni") {
                echo "<ul class='sidemenu  page-header-fixed slimscroll-style' data-keep-expanded='false' data-auto-scroll='true' data-slide-speed='200' style='padding-top: 20px'>
                <li class='sidebar-toggler-wrapper hide'>
                    <div class='sidebar-toggler'>
                        <span></span>
                    </div>
                </li>
                <li class='sidebar-user-panel'>
                    <div class='sidebar-user'>
                        <div class='sidebar-user-picture'>
                            <img alt='image' src='../assets/img/dp.jpg'>
                        </div>
                        <div class='sidebar-user-details'>
                            <div class='user-name'>" . $session->get('username') . "</div>
                            <div class='user-role'>Admin</div>
                        </div>
                    </div>
                </li>
                <li class='nav-item start active open'>
                    <a href='#' class='nav-link nav-toggle'>
                        <i data-feather='airplay'></i>
                        <span class='title'>Dashboard</span>
                    </a>
                </li>
              
                <li class='nav-item'>
                    <a href='#' class='nav-link nav-toggle'> <i data-feather='book-open'></i>
                        <span class='title'>Kuisioner</span> <span class='arrow'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li class='nav-item'>
                            <a href='" . base_url() . "/alumni/kuisoner' class='nav-link '> <span class='title'>- Daftar Kuisioner</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='" . base_url() . "/alumni/laporankuisoner' class='nav-link '> <span class='title'>- Laporan Kuisioner</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class='nav-item'>
                    <a href='event.html' class='nav-link nav-toggle'> <i data-feather='calendar'></i>
                        <span class='title'>Laporan</span>
                    </a>
                </li>
            </ul>";
            } else {
                echo "
<ul class='sidemenu  page-header-fixed slimscroll-style' data-keep-expanded='false' data-auto-scroll='true' data-slide-speed='200' style='padding-top: 20px'>
                <li class='sidebar-toggler-wrapper hide'>
                    <div class='sidebar-toggler'>
                        <span></span>
                    </div>
                </li>
                <li class='sidebar-user-panel'>
                    <div class='sidebar-user'>
                        <div class='sidebar-user-picture'>
                            <img alt='image' src='../assets/img/dp.jpg'>
                        </div>
                        <div class='sidebar-user-details'>
                            <div class='user-name'>Sneha Patel</div>
                            <div class='user-role'>Administrator</div>
                        </div>
                    </div>
                </li>
                <li class='nav-item start active open'>
                    <a href='#' class='nav-link nav-toggle'>
                        <i data-feather='airplay'></i>
                        <span class='title'>Dashboard</span>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link nav-toggle'> <i data-feather='briefcase'></i>
                        <span class='title'>Data Master</span> <span class='arrow'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li class='nav-item'>
                            <a href='<?= base_url(); ?>/mahasiswa' class='nav-link '> <span class='title'>- Data Mahasiswa</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='<?= base_url(); ?>/dftalumni' class='nav-link '> <span class='title'>- Alumni</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='edit_department.html' class='nav-link '> <span class='title'>- Data Kuisioner</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='#' class='nav-link nav-toggle'> <i data-feather='book-open'></i>
                        <span class='title'>Kuisioner</span> <span class='arrow'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li class='nav-item'>
                            <a href='<?= base_url(); ?>/daftarkuisoner' class='nav-link '> <span class='title'>- Daftar Kuisioner</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='add_library.html' class='nav-link '> <span class='title'>- Laporan Kuisioner</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class='nav-item'>
                    <a href='event.html' class='nav-link nav-toggle'> <i data-feather='calendar'></i>
                        <span class='title'>Laporan</span>
                    </a>
                </li>
            </ul>";
            }

            ?>
        </div>
    </div>
</div>