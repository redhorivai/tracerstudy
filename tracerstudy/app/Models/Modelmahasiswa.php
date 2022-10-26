<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id ';
    protected $allowedFields = ['mahasiswa_id', 'nim', 'mahasiswa_nm', 'prodi', 'created_dttm', 'status_cd'];


    public function getAllData()
    {
        return $this->db->table('mahasiswa')
            ->select('*')
            ->where('status_cd', 'mhs')
            ->get();
    }

    public function getAllAlumni()
    {
        return $this->db->table('mahasiswa')
            ->select('*')
            ->where('status_cd', 'alumni')
            ->get();
    }

    public function insertSoal($data)
    {
        $this->db->table('soal')
            ->insert($data);
        return $this->db->insertID();
    }

    public function checklogin($u, $p)
    {
        return $this->db->table('users')
            ->select('*')
            ->where('username', $u)
            ->where('pwd', $p)
            ->where('status_cd', "normal")
            ->get();
    }

    public function getdataAlumni($nim)
    {
        $db = db_connect("plmdb");

        $query = $db->query("SELECT * FROM t_skppcadopo WHERE nim ='$nim'");
        return $query;
    }

    public function getAlumni()
    {
        $db = db_connect("plmdb");

        $query = $db->query("SELECT * FROM t_skppcadopo WHERE statusmhs = 'LL' GROUP BY nim");
        return $query;
    }
}
