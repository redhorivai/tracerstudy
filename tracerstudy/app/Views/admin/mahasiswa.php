<?= $this->extend('layout/main_layout'); ?>

<?= $this->section('content'); ?>
          
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">

                     <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Data Alumni</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Alumni</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header></header>
                                    
                                </div>
                                <div class="card-body ">
                                    
                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        id="example4">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th style="text-align: center;"> NIM </th>
                                                <th style="text-align: center;"> Mahasiswa </th>
                                                <th style="text-align: center;"> Prodi </th>
                                                <th style="text-align: center;"> Status </th>
                                                <th style="text-align: center;"> No. SK </th>
                                                <th style="text-align: center;"> Perta </th>
                                                <!-- <th> Status </th> -->
                                                <th style="text-align: center;"> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($mhs->getResultArray() as $key) {
                                                    
                                            ?>
                                            <tr class="odd gradeX">
                                                <td style="text-align: center;">
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td style="text-align: center;"> <?= $key['nim'] ?> </td>
                                                <td style="text-align: center;"><?= $key['nama'] ?></td>
                                                <td style="text-align: center;"><?= $key['idprogstudi'] ?></td>
                                                <td style="text-align: center;"><?= $key['statusmhs'] ?></td>
                                                <td style="text-align: center;"><?= $key['nosk'] ?></td>
                                                <td style="text-align: center;"><?= $key['perta'] ?></td>
                                                <td class="valigntop" style="text-align: center;">
                                                    <div class="btn-group">
                                                        <button
                                                            class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                            
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- end page content -->
           
       <?= $this->endSection() ?>