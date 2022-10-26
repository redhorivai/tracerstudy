<?= $this->extend('layout/main_layout'); ?>

<?= $this->section('content'); ?>
          
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>MANAGED TABLE</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <button onclick="addrow()" class="btn btn-info">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                    data-bs-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin: 10px 0.5px;" id="dv_addrow">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center;"> No Soal </th>
                                                <th style="text-align: center;"> Soal </th>
                                                <th style="text-align: center;"> Class Soal </th>
                                                <th style="text-align: center;"> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <input style="width: 80%; padding: 0 20px;" type="text" name="nosoal" id="nosoal">
                                                </td>
                                                <td style="text-align: center;">
                                                    <textarea style="width: 100%; padding: 0 20px;" name="soaltxt" id="soaltxt"></textarea>
                                                </td>
                                                <td style="text-align: center;width: 30%;">
                                                    <select id="class_soal_id" style="font-weight: bold;" class="form-control select2">
                                                    <option value="">Pilih Klasifikasi Soal</option>
                                                    <?php 
                                                        foreach ($class_soal->getResult() as $key) {
                                                    ?>
                                                    <option value="<?= $key->class_soal_id ?>"><?= $key->class_soal_cd ?>. <?= $key->class_soal_nm ?></option>
                                                            
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </td>
                                                <td style="text-align: center;width: 100px;">
                                                    <button onclick="simpansoal()" class="btn btn-success btn-xs">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                                
                                                </td>
                                            </tr>
                                        </tbody>

                                        </table>
                                    </div>

                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        id="tabelsoal">
                                        <thead>
                                            <tr>
                                               
                                                <th style="text-align: center;"> No Soal </th>
                                                <th style="text-align: center;"> Soal </th>
                                                <!-- <th style="text-align: center;"> Status </th> -->
                                                <th style="text-align: center;"> Class Soal </th>
                                                 <th style="text-align: center;">
                                                   Action
                                                </th>
                                                <!-- <th> Actions </th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($soal->getResult() as $key) {
                                                    
                                            ?>
                                            <tr class="odd gradeX">
                                                <td style="text-align: center;width: 8%;"><?= $key->soal_cd ?> </td>
                                                <td style="text-align: center;"><?= $key->soal_txt ?></td>
                                                <td style="text-align: justify-all;width: 30%;">
                                                    <?= $key->class_soal_cd ?>. <?= $key->class_soal_nm ?>
                                                </td>
                                                 <td style="text-align: center;width: 15%;">
                                                    <button class="btn btn-success btn-xs">
                                                                    <i class="fa fa-check"></i>
                                                                </button>
                                                                <button class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
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
           <script type="text/javascript">
               function addrow() {
                // var closed_dttm = $("#closed_dttm").val();
                    $.ajax({
                      url : "<?= base_url('daftarkuisoner/addrow') ?>",
                      type: "post",
                      // data: {},
                    
                      beforeSend: function () { 
                        $("#loader-wrapper").removeClass("d-none")
                      },
                      success:function(data){
                        $("#loader-wrapper").addClass("d-none");
                        $('#dv_addrow').html(data);

                      },
                      error:function(){
                          alert("error ajax");
                        
                      }
                    });
              }

              function simpansoal() {
                var nosoal = $("#nosoal").val();
                var soaltxt = $("#soaltxt").val();
                var class_soal_id = $("#class_soal_id").val();
                $.ajax({
                      url : "<?= base_url('daftarkuisoner/simpansoal') ?>",
                      type: "post",
                      dataType: 'json',
                      data: {"nosoal":nosoal,"soaltxt":soaltxt,"class_soal_id":class_soal_id},
                    
                      success:function(data){
                        // $('#tabelsoal > tbody:').app(data);
                        $('#tabelsoal tr:first').after(data);
                      },
                      error:function(){
                          alert("error ajax");
                      }
                    });
              }
           </script>
       <?= $this->endSection() ?>