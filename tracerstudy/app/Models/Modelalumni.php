<?php namespace App\Models;

use CodeIgniter\Model;

class Modelalumni extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id ';
    protected $allowedFields = ['mahasiswa_id','nim','mahasiswa_nm','prodi','created_dttm','status_cd'];
    private $dbplm;

    public function getAllData() {
        return $this->db->table('mahasiswa')
                        ->select('*')
                        ->where('status_cd','mhs')
                        ->get();
    }

    public function insertSoal($data) {
        $this->db->table('soal')
                 ->insert($data);
        return $this->db->insertID();
    }

    public function getAlumniplm() {
        $db = db_connect("plmdb");
        $db->query("SELECT * FROM t_skppcadopo WHERE nim = ''");
    }
}
