<?php

namespace App\Controllers;

use App\Models\Modelmahasiswa;

class Login extends BaseController
{

	protected $modelmhs;
	public function __construct()
	{
		$this->session = \Config\Services::session();
		$this->session->start();
		$this->modelmhs = new Modelmahasiswa();
	}

	public function index()
	{
		return view('login');
	}

	//    public function index() {
	// 	if ($this->session->user_group == "waiters") {
	// 	  	return redirect('dashboard/waiters');
	// 	  } else if ($this->session->user_group == 'owner') {
	// 	  	return redirect('dashboard');
	// 	  } else if ($this->session->user_group == 'kasir') {
	// 	  	return redirect('kasir');
	// 	  } else if ($this->session->user_group == 'manajer') {
	// 	  	return redirect('dashboard');
	// 	  } else {
	// 	  	return view('login');
	// 	  }
	// }

	public function squrity()
	{
		if ($this->session->get("username") == "") {
			return redirect('/');
		} 
	}

	public function checklogin()
	{

		$u = $this->request->getPost('uname');
		$p = $this->request->getPost('pwd');
		$pwd0 = md5(sha1($p));

		$res = $this->modelmhs->checklogin($u, $pwd0)->getResultArray();

		if (count($res) > 0) {
			foreach ($res as $k) {
				$this->session->set($k);
				$getdata = $this->modelmhs->getdataAlumni($this->session->get("username"))->getResultArray();
				foreach ($getdata as $key) {
					$this->session->set($key);
				}
				if ($this->session->get("type") == "mhs") {
					return redirect('alumni/kuisoner');
				} else if ($this->session->get("type") == "admin") {
					return redirect('admin');
				}
			}
		} else {
			return redirect('/');
		}

		// echo json_encode($tes);
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/');

		// $this->session->destroy();
		// return redirect()->to(site_url('/'));
	}
}
