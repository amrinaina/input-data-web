<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$data = User::all();

    	return view('admin.user.index',compact('data'));
    }

    public function add(){
    	return view('admin.user.add');
    }

    public function addprocess(Request $request){
    	$input = $request->all();
        
        $input['password'] = Hash::make($input['password']);
        $check = User::where('username',$input['username'])->first();

        if ($check) {
            return back()->with(['message' => 'Username sudah digunakan','type' => 'warning']);
        }

        $create = User::create($input);

        if ($create) {
            return back()->with(['message' => 'Data berhasil diinput','type' => 'success']);
        }else{
            return back()->with(['message' => 'Data gagal diinput','type' => 'danger']);
        }
    }

    public function edit($id){
    	$data = User::where('id',$id)->first();

    	return view('admin.user.edit',compact('data'));
    }

    public function editprocess(Request $request,$id){
        unset($request['_token']);
        unset($request['_method']);
    	$data = User::where('id',$id)->update($request->all());

    	return redirect('user')->with('pesan','Data berhasil diubah !');
    }

    public function delete($id){
    	$data = User::where('id',$id)->delete();

    	return redirect('user',compact('data'))->with('pesan','Data berhasil dihapus !');
    }
}
