<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index()
    {
    	return view('admin.input-data-siswa.index');
 	}

 	public function add()
    {
    	return view('admin.input-data-siswa.add');
 	}
}
