<?= $this->extend('layout/main_layout'); ?>

<?= $this->section('content'); ?>

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">DATA SEBARAN ALUMNI PERIODE KELULUSAN 2022</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">laporan</li>
                </ol>
            </div>
        </div>

        <div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-sm-6">
									<div class="card card-topline-green">
										<div class="card-head">
											<header>Sebaran Alumnus : 2022</header>
											<div class="tools">
												<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
												<a class="t-collapse btn-color fa fa-chevron-down"
													href="javascript:;"></a>
												<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
											</div>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr>
															<th>No.</th>
															<th>Kriteria</th>
															<th>Jml</th>
															<th>%</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														$ttlpersen = 0;
															foreach ($sebaranalumnuspersen as $key) {
																$persen = ($key->jml / $ttljml[0]->ttljml) * 100;
																$ttlpersen = $ttlpersen + $persen;
														?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $key->jawaban_nm ?></td>
															<td><?= $key->jml ?></td>
															<td><?= ceil($persen) ?>%</td>
														</tr>
														<?php
															}
														?>
														<tr>
															<td></td>
															<td style="font-weight: bold;">Total</td>
															<td style="font-weight: bold;"><?= $ttljml[0]->ttljml ?></td>
															<td style="font-weight: bold;"><?= $ttlpersen ?>%</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>

	<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-sm-6">
									<div class="card card-topline-green">
										<div class="card-head">
											<header>Sebaran Alumnus : Responden</header>
											<div class="tools">
												<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
												<a class="t-collapse btn-color fa fa-chevron-down"
													href="javascript:;"></a>
												<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
											</div>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table">
													<thead>
														<tr>
															<th>No.</th>
															<th>Prodi</th>
															<th>Mengisi</th>
															<th>Belum</th>
															<th>Jml</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														$ttlpersen = 0;
															foreach ($mengisibelum as $key) {
																// $persen = ($key->jml / $ttljml[0]->ttljml) * 100;
																// $ttlpersen = $ttlpersen + $persen;
														?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $key->idprogstudi ?></td>
															<td><?= $key->ttlalumni ?></td>
															<td><?= $key->ttlalumni ?></td>
															<td><?= $key->ttlalumni ?></td>
														</tr>
														<?php
															}
														?>
														<tr>
															<td></td>
															<td style="font-weight: bold;">Total</td>
															<td style="font-weight: bold;"><?= $ttljml[0]->ttljml ?></td>
															<td style="font-weight: bold;"><?= $ttlpersen ?>%</td>
															<td style="font-weight: bold;"><?= $ttlpersen ?>%</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
        

<!-- end chat sidebar -->

<?= $this->endSection() ?>