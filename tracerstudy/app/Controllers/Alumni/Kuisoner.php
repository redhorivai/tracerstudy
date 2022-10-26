<?php

namespace App\Controllers\Alumni;

use App\Controllers\BaseController;
use App\Models\Modelsoal;
use chillerlan\QRCode\{QRCode, QROptions};

class Kuisoner extends BaseController
{
    protected $modelsoal;
    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->modelsoal = new Modelsoal();
    }

    public function index()
    {
        
        if ($this->session->get("username") == "") {
            return redirect('/');
        }
        
        $alumni_tracer_group = $this->modelsoal->getalmtcgroupByUserid($this->session->get('user_id'))->getResult();
        if (count($alumni_tracer_group) > 0) {
            foreach ($alumni_tracer_group as $k) {
                $ret = "<div style='width: 100%;'>
                            <div style='width: 100%;text-align: center;'><h3>Terima kasih, Saudara/i atas partisipasi membangun poltekpar lebih baik.</h3></div>
                            <div style='width: 80%;' align='center'>
                                <div style='width: 100%;text-align: center;'>
                                    <img src='" . $k->qrcode . "'>
                                    <a href='" . $k->qrcode . "' download><button class='btn btn-primary'>Download QRCode</button></a>
                                </div>
                                <!-- <div style='display: inline-block;'></div> -->
                            </div>
                        </div>";
            }
        } else {
            $ret = "";
            $class_soal = $this->modelsoal->getAllClassSoal()->getResult();
            if (count($class_soal) > 0) {
                $ret .= "<div id='kuisfrm'><ul style='list-style-type:none;'>";
                foreach ($class_soal as $k) {
                    $ret .= "<li style='font-weight:bold;'>" . $k->class_soal_cd . ". " . $k->class_soal_nm;
                    $soal = $this->modelsoal->getSoalByClassid($k->class_soal_id)->getResult();
                    if (count($soal) > 0) {
                        $ret .= "<ul style='list-style-type:none;'>";
                        foreach ($soal as $s) {
                            $ret .= "<li style='font-weight:bold;'>" . $s->soal_cd . ". " . $s->soal_txt;

                            $subsoal = $this->modelsoal->getSubSoal($s->soal_id)->getResult();
                            if (count($subsoal) > 0) {
                                $ret .= "<ul style='list-style-type:none;'>";

                                foreach ($subsoal as $subs) {
                                    if ($subs->posisi == "kiri") {
                                        $stylesub = "";
                                    } else if ($subs->posisi == "kanan") {
                                        $stylesub = "";
                                    } else if ($subs->posisi == "atas") {
                                        $stylesub = "display:inline-block;font-weight:bold;";
                                    } else if ($subs->posisi == "bawah") {
                                        $stylesub = "";
                                    } else if ($subs->posisi == "normal") {
                                        $stylesub = "";
                                    }

                                    $ret .= "<li style='" . $stylesub . "'>";
                                    $ret .= $subs->sub_soal_nm;
                                    // JAWABAN
                                    $ret .= $this->renderjawaban($s->soal_id, $subs->sub_soal_id);

                                    //end jawaban   
                                    $ret .= "</li>";
                                }
                                $ret .= "</ul>";
                            } else {
                                $ret .= $this->renderjawaban($s->soal_id, 0);
                            }

                            $ret .= "</li>";
                        }
                        $ret .= "</ul>";
                    } else {
                        $ret .= "error soal";
                    }
                    $ret .= "</li>";
                }
                $ret .= "</ul>"
                    . "<div style='text-align:right;'><button onclick='simpanrespon()' type='button' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary'>Simpan</button></div>"
                    . "</div>";
            } else {
                $ret .= "error class soal";
            }
        }
        $data = [
            'alumni' => $ret
        ];
        return view('alumni/kuisoner', $data);
    }

    public function daftarkuisoner()
    {
        $data = [
            'soal' => $this->modelsoal->getAllData(),
            'class_soal' => $this->modelsoal->getAllClassSoal()
        ];
        return view('backend/daftarkuisoner', $data);
    }

    public function startkuisoner()
    {
        $ret = "";
        $class_soal = $this->modelsoal->getAllClassSoal()->getResult();
        if (count($class_soal) > 0) {
            $ret .= "<div id='kuisfrm'><ul style='list-style-type:none;'>";
            foreach ($class_soal as $k) {
                $ret .= "<li style='font-weight:bold;'>" . $k->class_soal_cd . ". " . $k->class_soal_nm;
                $soal = $this->modelsoal->getSoalByClassid($k->class_soal_id)->getResult();
                if (count($soal) > 0) {
                    $ret .= "<ul style='list-style-type:none;'>";
                    foreach ($soal as $s) {
                        $ret .= "<li style='font-weight:bold;'>" . $s->soal_cd . ". " . $s->soal_txt;

                        $subsoal = $this->modelsoal->getSubSoal($s->soal_id)->getResult();
                        if (count($subsoal) > 0) {
                            $ret .= "<ul style='list-style-type:none;'>";

                            foreach ($subsoal as $subs) {
                                if ($subs->posisi == "kiri") {
                                    $stylesub = "";
                                } else if ($subs->posisi == "kanan") {
                                    $stylesub = "";
                                } else if ($subs->posisi == "atas") {
                                    $stylesub = "display:inline-block;font-weight:bold;";
                                } else if ($subs->posisi == "bawah") {
                                    $stylesub = "";
                                } else if ($subs->posisi == "normal") {
                                    $stylesub = "";
                                }

                                $ret .= "<li style='" . $stylesub . "'>";
                                $ret .= $subs->sub_soal_nm;
                                // JAWABAN
                                $ret .= $this->renderjawaban($s->soal_id, $subs->sub_soal_id);

                                //end jawaban   
                                $ret .= "</li>";
                            }
                            $ret .= "</ul>";
                        } else {
                            $ret .= $this->renderjawaban($s->soal_id, 0);
                        }

                        $ret .= "</li>";
                    }
                    $ret .= "</ul>";
                } else {
                    $ret .= "error soal";
                }
                $ret .= "</li>";
            }
            $ret .= "</ul>"
                . "<div style='text-align:right;'><button onclick='simpanrespon()' type='button' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary'>Simpan</button></div>"
                . "</div>";
        } else {
            $ret .= "error class soal";
        }

        echo json_encode($ret);
    }

    public function renderjawaban($soal_id, $sub_soal_id)
    {
        $ret = "";
        $jawaban = $this->modelsoal->getJawabanBySoalid($soal_id)->getResult();
        if (count($jawaban) > 0) {
            if ($jawaban[0]->jawaban_format == "radio_range") {
                $ret .= "<div style='font-weight: normal;margin-left:75px;color:#888'><span>1</span><span style='margin-left:195px;'>5</span></div>";
            }
            $ret .= "<ul style='list-style-type:none;'>";
            foreach ($jawaban as $j) {
                $jawaban_id = $j->jawaban_id;
                if ($j->jawaban_format == "radio") {
                    $taginput = "<input style='margin-right:10px;' type='radio' value='$jawaban_id' data-nilai='' data-sub_soal_id='$sub_soal_id' data-soal_id='$soal_id' name='jawaban_id_${soal_id}_${sub_soal_id}' id='jawaban_id'/>" . $j->jawaban_cd . ".<span style='margin-left:10px;'>" . $j->jawaban_nm . "</span>";
                } else if ($j->jawaban_format == "multiple") {
                    $taginput = "<input type='checkbox' value='$jawaban_id' data-nilai='' data-sub_soal_id='$sub_soal_id' data-soal_id='$soal_id' name='jawaban_id_${soal_id}_${jawaban_id}' id='jawaban_id'/>";
                } else if ($j->jawaban_format == "input") {
                    $taginput = $j->jawaban_cd . "<span style='margin-left:30px;'>" . $j->jawaban_nm . "</span> <input style='margin-left:25px;margin-right:20px;width:350px;' type='text' data-nilai='$jawaban_id' data-sub_soal_id='$sub_soal_id' data-soal_id='$soal_id' name='inp_jawaban_id[]'  id='input_jawaban_id'/>";
                } else if ($j->jawaban_format == "radio_range") {
                    $jmlinp = $j->jumlah_input;
                    $arrtaginput = "";
                    // $sub = $this->modelsoal->getSubJawabanByIdJwb($jawaban_id)->getResult();
                    // if (count($jawaban) > 0) {
                    //     $ret .= "<ul style='list-style-type:none;'>";
                    //     foreach ($sub as $ksub) {
                    //         $ret .= "<li> $ksub->subjawaban_nm </li>";
                    //     }
                    //     $ret .= "</ul>";
                    // } else {
                    // }
                    for ($i = 1; $i <= $jmlinp; $i++) {
                        //     $arrtaginput .= "<div class='custom-radios'>
                        //     <div>
                        //       <input type='radio' id='subjawaban_id_${jawaban_id}' name='subjawaban_id_${soal_id}' value='$i'>
                        //       <label for='subjawaban_id_${jawaban_id}'>
                        //         <span>
                        //           <img src='../image/check-icn.svg' alt='Checked Icon' />
                        //         </span>
                        //       </label>
                        //     </div>
                        //   </div>";
                        // $arrtaginput .= ;

                        $arrtaginput .=  "<label class='lb_radio_square'><input class='inp_radio_range' type='radio' value='$jawaban_id' data-nilai='$i' data-sub_soal_id='$sub_soal_id' data-soal_id='$soal_id' name='subjawaban_id_${soal_id}_${jawaban_id}' id='subjawaban_id'/><span class='sp_radio_square'></span></label>";
                    }
                    $taginput = "<div style='display:inline-block;margin-right:5px;width:20px;'>" . $j->jawaban_cd . "</div><div style='display:inline-block;margin-left:5px;'>" . $arrtaginput . "</div><div style='display:inline-block;'>" . $j->jawaban_nm . "</div>";
                } else {
                    $taginput = "error";
                }

                $ret .= "<li> $taginput  </li>";
            }
            $ret .= "</ul>";
        } else {
            $ret .= "error jawaban";
        }

        return $ret;
    }

    public function simpansoal()
    {
        $nosoal         = $this->request->getPost('nosoal');
        $soaltxt         = $this->request->getPost('soaltxt');
        $class_soal_id     = $this->request->getPost('class_soal_id');


        $data = [
            'soal_cd' => $nosoal,
            'class_soal_id' => $class_soal_id,
            'soal_txt'   => $soaltxt,
            'status_cd'  => "normal",
            'created_dttm'  => date("Y-m-d i:H:s")
        ];
        $simpansoal = $this->modelsoal->simpansoal($data);

        if ($simpansoal) {
            $getclasssoalnm = $this->modelsoal->getclassnm($class_soal_id)->getResult();
            $ret = "<tr class='odd gradeX'>
                                                <td style='text-align: center;width: 8%;'>$nosoal </td>
                                                <td style='text-align: center;'>$soaltxt</td>
                                                <td style='text-align: justify-all;width: 30%;'>" . $getclasssoalnm[0]->class_soal_cd . ". " . $getclasssoalnm[0]->class_soal_nm . "
                                                </td>
                                                 <td style='text-align: center;width: 15%;'>
                                                    <button class='btn btn-success btn-xs'>
                                                                    <i class='fa fa-check'></i>
                                                                </button>
                                                                <button class='btn btn-primary btn-xs'>
                                                                    <i class='fa fa-pencil'></i>
                                                                </button>
                                                                <button class='btn btn-danger btn-xs'>
                                                                    <i class='fa fa-trash-o'></i>
                                                                </button>
                                                </td>
                                            </tr>";
        } else {
            $ret = "soal tidak tersimpan";
        }
        echo json_encode($ret);
    }

    public function simpanrespon()
    {
        $myArray = $this->request->getPost('myArray');
        $user_id = $this->session->get('user_id');
        $nim = $this->session->get('username');
        foreach ($myArray as $k => $v) {
            $respon_cd = $user_id . "-respon-" . $v['id'] . "-" . $v['value'] . date("Y");
            $data = [
                'respon_cd' => $respon_cd,
                'jawaban_id' => $v['value'],
                'jawaban_nilai' => $v['nilai'],
                'soal_id' => $v['soal_id'],
                'sub_soal_id' => $v['sub_soal_id'],
                'status_cd'  => "normal",
                'created_user_id' => $user_id,
                'nim' => $nim,
                'created_dttm'  => date("Y-m-d H:i:s")
            ];
            $simpanrespon = $this->modelsoal->simpanrespon($data);
        }

        require_once APPPATH . "../vendor/autoload.php";
        $url = 'http://localhost:8082/alumni/kuisoner/qrcode/' . $user_id;
        $options = new QROptions([
            'version'      => 7,
            'outputType'   => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'     => QRCode::ECC_L,
            'scale'        => 5,
            'imageBase64'  => false,

        ]);
        $qrnm = $respon_cd . ".png";
        $qrcode = new QRCode($options);
        // $qrcode->render($url, "D:\\htdocs\\htdocs\\tracerstudy\\public\\image\\qrcode\\" . $qrnm);
        $qrcode->render($url, "/usr/local/var/www/tracerstudyuba/public/image/qrcode/" . $qrnm);
        $altcgroup = [
            'user_id' => $user_id,
            'nim' => $nim,
            'tracer_group_id' => 1,
            'qrcode' => '../image/qrcode/' . $qrnm,
            'status_cd'  => "normal",
            'created_dttm'  => date("Y-m-d H:i:s")
        ];
        $simpanalmtc = $this->modelsoal->simpanalmtc($altcgroup);
        if ($simpanalmtc) {
            $ret = "<div style='width: 100%;'>
                            <div style='width: 100%;text-align: center;'><h3>Terima kasih, Saudara/i atas partisipasi membangun poltekpar lebih baik.</h3></div>
                            <div style='width: 80%;' align='center'>
                                <div style='width: 100%;text-align: center;'>
                                    <img src='../image/qrcode/" . $qrnm . "'>
                                    <a href='../image/qrcode/" . $qrnm . "' download><button class='btn btn-primary'>Download QRCode</button></a>
                                </div>
                                <!-- <div style='display: inline-block;'></div> -->
                            </div>
                        </div>";
        } else {
            $ret = "gagal";
        }

        echo json_encode($ret);
    }

    public function laporankuisoner()
    {
        $ret = "";
        $class_soal = $this->modelsoal->getAllClassSoal()->getResult();
        if (count($class_soal) > 0) {
            $ret .= "<div id='kuisfrm'><ul style='list-style-type:none;'>";
            foreach ($class_soal as $k) {
                $ret .= "<li style='font-weight:bold;'>" . $k->class_soal_cd . ". " . $k->class_soal_nm;
                $soal = $this->modelsoal->getSoalByClassid($k->class_soal_id)->getResult();
                if (count($soal) > 0) {
                    $ret .= "<ul style='list-style-type:none;'>";
                    foreach ($soal as $s) {
                        $ret .= "<li style='font-weight:bold;'>" . $s->soal_cd . ". " . $s->soal_txt;
                        $jawaban = $this->modelsoal->getJawabanBySoalid($s->soal_id)->getResult();
                        if (count($jawaban) > 0) {
                            $ret .= "<div align='center'><table border='1'>";
                            $ret .= "<tr><td style='text-align:center;padding:10px;'>Jawaban</td><td style='text-align:center;'>Jumlah</td></tr>";

                            foreach ($jawaban as $j) {
                                $jmljwb = $this->modelsoal->getTtlRespon($j->jawaban_id)->getResult();
                                $ret .= "<tr><td>" . $j->jawaban_nm . "</td><td style='text-align:center;margin-left:10px;margin-right:10px;'>" . $jmljwb[0]->ttljwb . "</td></tr>";
                            }
                            $ret .= "</table></div>";
                        }


                        $ret .= "</li>";
                    }
                    $ret .= "</ul>";
                } else {
                    $ret .= "error soal";
                }
                $ret .= "</li>";
            }
            $ret .= "</ul>"
                . "<div style='text-align:right;'><button onclick='simpanrespon()' type='button' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary'>Simpan</button></div>"
                . "</div>";
        } else {
            $ret .= "error class soal";
        }
        echo $ret;
    }

    // public function autoinput() {
    //     $ret = $this->modelsoal->laju()->getResult();
    //     foreach ($ret as $key) {
    //         // echo $key->soal_id;
    //         $data = [
    //             'soal_id' => $key->soal_id
    //         ];
    //         $this->modelsoal->autoinputrespon($data,$key->respon_id);
    //     }
    // }
}
