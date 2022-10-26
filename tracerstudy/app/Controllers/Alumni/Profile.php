<?php

namespace App\Controllers\Alumni;

use App\Controllers\BaseController;
use App\Models\Modelmahasiswa;

class Profile extends BaseController
{

    protected $modelmhs;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->modelmhs = new Modelmahasiswa();
    }

    public function index()
    {
        $data = [
            'alumni' => $this->modelmhs->getdataAlumni($this->session->get("username"))
        ];
        return view('alumni/profile', $data);
    }
   
}
