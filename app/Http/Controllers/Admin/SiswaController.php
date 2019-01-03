<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idw\SiswaFacade as FSiswa;
use App\Models\Murid;

class SiswaController extends Controller
{
    
    public function index()
    {
        $data = FSiswa::index();
    	return view('admin.input-data-siswa.index')->with('data',$data);
 	}

    public function add()
    {

        return view('admin.input-data-siswa.add');
    }

 	public function addprocess(Request $req)
    {
       $data = FSiswa::create($req->all());

          if ($data) {
             return redirect('siswa')->with(['id'=>'success','message' => 'Data berhasil tersimpan!']);
              
          }

        return view('siswa')->with(['id'=>'warning','message' => 'Data gagal tersimpan!']);
 	}

    public function edit($id){
      $data = FSiswa::edit($id);
      return view('admin.input-data-siswa.edit')->with('data',$data)
                                                ->with('id',$id);
    }

    public function editprocess(Request $req,$id){

        $data = FSiswa::editprocess($id);

        if ($data) {
            return redirect('siswa')->with(['id'=>'success','message' => 'Data berhasil diubah!']);
        }else{
            return redirect('siswa')->with(['id'=>'warning','message' => 'Data gagal diubah!']);
        }
    }

    public function delete(Request $req,$id){

      $delete = FSiswa::delete($id);

      if ($delete) {
        return redirect('siswa')->with(['id'=>'success','message' => 'Data berhasil dihapus!']);
      }

      return redirect('siswa')->with(['id'=>'warning','message' => 'Data gagal dihapus!']);
    }

    public function view($id){
      
      $data = FSiswa::getView($id);
      
      return view('admin.input-data-siswa.view')->with('data',$data)
                                                ->with('id',$id); 
   }

}
