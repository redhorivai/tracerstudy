<?= $this->extend('layout/main_layout'); ?>

<?= $this->section('content'); ?>

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-green">
                        <span class="info-box-icon push-bottom"><i data-feather="users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Alumni Terdaftar</span>

                            <?php
                            $db = db_connect();
                            $sql = $db->query("SELECT COUNT(mahasiswa_id) as ttlalumni FROM mahasiswa WHERE status_cd='alumni'");
                            $result = $sql->getResultArray();
                            foreach ($result as $key) {
                            ?>
                                <span class="info-box-number"><?= $key['ttlalumni'] ?></span>
                            <?php
                            }
                            ?>
                            <div class="progress">
                                <div class="progress-bar" style="width: 45%"></div>
                            </div>
                            <span class="progress-description">
                                45% Increase in 28 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-yellow">
                        <span class="info-box-icon push-bottom"><i data-feather="user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Alumni Sudah Bekerja</span>
                            <span class="info-box-number">155</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">
                                40% Increase in 28 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-blue">
                        <span class="info-box-icon push-bottom"><i data-feather="book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Alumni Melanjutkan Study</span>
                            <span class="info-box-number">52</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                            <span class="progress-description">
                                85% Increase in 28 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-pink">
                        <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Alumni Telah Mengisi Kuisioner</span>
                            <span class="info-box-number">13,921</span><span>$</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                                50% Increase in 28 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- end widget -->
        <!-- chart start -->
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Poliktenik Pariwisata Palembang</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Poliktenik Pariwisata Palembang</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
<!-- start chat sidebar -->

<!-- end chat sidebar -->

<?= $this->endSection() ?>