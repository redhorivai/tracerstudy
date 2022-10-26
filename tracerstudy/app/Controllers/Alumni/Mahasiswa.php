<?php

namespace App\Controllers;

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
		$data = [
			'mhs' => $this->modelmhs->getAllData()
		];
		return view('backend/mahasiswa', $data);
	}
}
