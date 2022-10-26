<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Home extends BaseController
{
    public function index()
    {
    	$this->session = \Config\Services::session();
    	if ($this->session->get("username") == "") {
            return redirect('/');
        }

        return view('admin/dashboard');
    }
}
