<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Modelmahasiswa;

class Alumni extends BaseController
{

    protected $modelmhs;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->modelmhs = new Modelmahasiswa();
    }

    public function index()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get("username") == "") {
            return redirect('/');
        }
        
        $data = [
            'alumni' => $this->modelmhs->getAllAlumni()
        ];
        return view('alumni/dashboard', $data);
    }
    public function dftaumni()
    {
        $data = [
            'alumni' => $this->modelmhs->getAllAlumni()
        ];
        return view('backend/alumni', $data);
    }
}
