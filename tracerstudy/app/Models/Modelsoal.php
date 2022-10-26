<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelsoal extends Model
{
    protected $table      = 'soal';
    protected $primaryKey = 'soal_id ';
    protected $allowedFields = ['soal_id', 'soal_cd', 'soal_txt', 'soal-class_id', 'created_dttm', 'status_cd'];

    public function getSoalByClassid($class_soal_id)
    {
        return $this->db->table('soal')
            ->select('*')
            ->where('class_soal_id', $class_soal_id)
            ->get();
    }

    public function getJawabanBySoalid($soal_id)
    {
        return $this->db->table('jawaban')
            ->select('*')
            ->where('soal_id', $soal_id)
            ->where('status_cd', 'normal')
            ->get();
    }

    public function getTtlRespon($jawaban_id) {
        return $this->db->table('respon')
            ->select('count(respon_id) as ttljwb')
            ->where('jawaban_id', $jawaban_id)
            ->where('status_cd', 'normal')
            ->get();
    }

    public function getSubJawabanByIdJwb($jawaban_id)
    {
        return $this->db->table('jawaban')
            ->select('*')
            ->where('jawaban_id', $jawaban_id)
            ->where('status_cd', 'normal')
            ->get();
    }


    public function getAllSoal()
    {
        return $this->db->table('soal a')
            ->select('*')
            ->join('class_soal b', 'b.class_soal_id=a.class_soal_id', 'left')
            ->where('a.status_cd', 'normal')
            ->get();
    }

    public function getAllData()
    {
        return $this->db->table('soal a')
            ->select('*')
            ->join('class_soal b', 'b.class_soal_id=a.class_soal_id', 'left')
            ->where('a.status_cd', 'normal')
            ->get();
    }

    public function getAllClassSoal()
    {
        return $this->db->table('class_soal')
            ->select('*')
            ->where('status_cd', 'normal')
            ->get();
    }

    public function getSubSoal($soal_id)
    {
        return $this->db->table('sub_soal')
            ->select('*')
            ->where('status_cd', 'normal')
            ->where('soal_id', $soal_id)
            ->get();
    }

    public function getclassnm($class_soal_id)
    {
        return $this->db->table('class_soal')
            ->select('*')
            ->where('class_soal_id', $class_soal_id)
            ->get();
    }

    public function simpansoal($data)
    {
        $this->db->table('soal')
            ->insert($data);
        return $this->db->insertID();
    }

    public function simpanrespon($data)
    {
        return $this->db->table('respon')
            ->insert($data);
    }

    public function simpanalmtc($data) {
        return $this->db->table('alumni_tracer_group')
            ->insert($data);
    }

    public function getalmtcgroupByUserid($user_id) {
        return $this->db->table('alumni_tracer_group')
            ->select('*')
            ->where('user_id', $user_id)
            ->get();
    }

    public function sebaranalumnuspersen() {
        return $this->db->table('respon a')
            ->select('COUNT(a.respon_id) as jml,b.jawaban_nm')
            ->join('jawaban b', 'b.jawaban_id=a.jawaban_id', 'left')
            ->join('soal c', 'c.soal_id=b.soal_id', 'left')
            ->where('b.soal_id', 17)
            ->where('a.status_cd', 'normal')
            ->orderby('a.jawaban_id', 'ASC')
            ->groupby('a.jawaban_id')
            ->get();
    }

    public function totalalumnus() {
        return $this->db->table('respon a')
            ->select('COUNT(a.respon_id) as ttljml')
            ->join('jawaban b', 'b.jawaban_id=a.jawaban_id', 'left')
            ->join('soal c', 'c.soal_id=b.soal_id', 'left')
            ->where('b.soal_id', 17)
            ->where('a.status_cd', 'normal')
            ->orderby('a.jawaban_id', 'ASC')
            ->get();
    }


    public function mengisibelum()
    {
        $db = db_connect("plmdb");

        $query = $db->query("SELECT idprogstudi,COUNT(id) as ttlalumni FROM t_skppcadopo WHERE statusmhs = 'LL' GROUP BY idprogstudi");
        return $query;
    }

    public function getByprodi() {

    }

    public function laju() {
        return $this->db->table('respon a')
            ->select('a.respon_id,a.jawaban_id,c.soal_id')
            ->join('jawaban b', 'b.jawaban_id=a.jawaban_id', 'left')
            ->join('soal c', 'c.soal_id=b.soal_id', 'left')
            ->where('a.status_cd', 'normal')
            ->orderby('a.respon_id', 'ASC')
            // ->limit(10)
            ->get();
    }

    public function autoinputrespon($data,$respon_id) {
        return $this->db->table('respon')
                    ->set($data)
                    ->where('respon_id',$respon_id)
                    ->update();
    }


   
}
