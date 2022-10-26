<?= $this->extend('layout/main_layout'); ?>

<?= $this->section('content'); ?>
<!-- start page content -->
<style>
    .inp_radio_range {
        margin: 5px 5px;
        display: none;
    }

    .lb_radio_square {
        display: inline-block;
        padding: 5px 10px;
        cursor: pointer;
    }

    .sp_radio_square {
        position: relative;
        line-height: 22px;
    }

    .sp_radio_square:before,
    .sp_radio_square:after {
        content: '';
    }

    .sp_radio_square:before {
        border: 1px solid #222021;
        width: 20px;
        height: 20px;
        margin-right: 10px;
        display: inline-block;
        vertical-align: top;
    }

    .sp_radio_square:after {
        background: #222021;
        width: 14px;
        height: 14px;
        position: absolute;
        top: 2px;
        left: 4px;
        transition: 300ms;
        opacity: 0;
    }

    .inp_radio_range:checked+.sp_radio_square:after {
        opacity: 1;
    }
</style>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar" style="margin: 35px -20px 0px;">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Kuisoner</div>
                </div>
                <ol style="padding: 5px 10px;" class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Toggles</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header> </header>
                    </div>
                    <div class="card-body" id="dv_cardbody">
                        <?php
                        echo $alumni;
                        ?>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end page content -->
<script type="text/javascript">
    function startkuisoner() {
        $.ajax({
            url: "<?= base_url('alumni/kuisoner/startkuisoner') ?>",
            type: "post",
            dataType: "json",

            success: function(data) {
                $("#dv_cardbody").html(data);
                $("#tb_button").css('display', 'none');

            },
            error: function() {
                alert("error ajax");
            }
        });
    }

    function simpanrespon() {
        var nilai = "";
        var inp = [];
        inp = $("#kuisfrm input[name='inp_jawaban_id[]'").each(function() {
            return {
                id: "jawaban_id",
                value: $(this).val(),
                nilai: $(this).data("nilai"),
                sub_soal_id: $(this).data("sub_soal_id"),
                soal_id: $(this).data("soal_id")
            };
        });
        var myArray = $('#kuisfrm input:radio:checked').map(function() {
            if (this.id == "subjawaban_id") {
                return {
                    id: "jawaban_id",
                    value: $(this).val(),
                    nilai: $(this).data("nilai"),
                    sub_soal_id: $(this).data("sub_soal_id"),
                    soal_id: $(this).data("soal_id")
                };
            } else {
                return {
                    id: this.id,
                    value: $(this).val(),
                    nilai: $(this).data("nilai"),
                    sub_soal_id: $(this).data("sub_soal_id"),
                    soal_id: $(this).data("soal_id")
                };
            }
        }).get();
        $.ajax({
            url: "<?= base_url('alumni/kuisoner/simpanrespon') ?>",
            type: "post",
            dataType: "json",
            data: {
                "myArray": myArray
            },
            success: function(data) {
                // console.log(data);
                $("#dv_cardbody").html(data);
            },
            error: function() {
                alert("error ajax");
            }
        });
    }
</script>
<?= $this->endSection() ?>