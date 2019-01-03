<?php

namespace App\Idw;

use App\Models\Murid;
use Auth;

class SiswaClassFacade {
    public function hello() {
        return "Hello, my name is Siswa!";
    }

    public function index() {
    	$data = Murid::all();
        return $data;
    }

    public function create($data) {
    	$create = Murid::create($data);
        return $create;
    }

    public function edit($id) {
        $update = Murid::where(['id'=>$id])->first();
        
        return $update;
    }

    public function editprocess($data,$id) {
    	unset($data['_token']);
        unset($data['_method']);

        $update = Murid::where('id',$id)->update($data);
        return $update;
    }

    public function delete($id) {
        $data = Murid::where('id',$id)->delete();
        
        return $data;
    }

    public function getView($id) {
        
        $data = Murid::find($id);
        return $data;
    }

}