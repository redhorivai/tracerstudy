<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Modelmahasiswa;

class Mahasiswa extends BaseController
{

	protected $modelmhs;
	public function __construct()
	{
		$this->modelmhs = new Modelmahasiswa();
	}

	public function index()
	{
		$this->session = \Config\Services::session();
    	if ($this->session->get("username") == "") {
            return redirect('/');
        }
        
		$data = [
			'mhs' => $this->modelmhs->getAlumni()
		];
		return view('admin/mahasiswa', $data);
	}
}
