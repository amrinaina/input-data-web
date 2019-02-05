<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Idw\SiswaFacade as FSiswa;
use App\Models\Murid;
use App\Models\Agama;

class SiswaController extends Controller
{
    
    public function index()
    {
        $data = FSiswa::index();
    	return view('admin.siswa.index')->with('data',$data);
 	}

    public function add()
    {
        $agama = FSiswa::agama();
        $ekskul = FSiswa::ekskul();

        return view('admin.siswa.add')->with('agama',$agama)
                                      ->with('ekskul',$ekskul);
    }

 	public function addprocess(Request $req)
  {
       $data = FSiswa::create($req->all());

          if ($data) {
             return redirect('siswa')->with(['id'=>'success','message' => 'Data berhasil tersimpan!']);
              
          }

        return redirect('siswa')->with(['id'=>'warning','message' => 'Data gagal tersimpan!']);
 	}

  public function edit($id){
    $murid = FSiswa::editmurid($id);
    $wakil = FSiswa::editwakil($id);
    $beasiswa = FSiswa::editbeasiswa($id);
    $prestasi = FSiswa::editprestasi($id);
    $detail = FSiswa::editdetail($id);
    $kontak = FSiswa::editkontak($id);

    return view('admin.siswa.edit')->with('murid',$murid)
                                  ->with('wakil',$wakil)
                                  ->with('beasiswa',$beasiswa)
                                  ->with('prestasi',$prestasi)
                                  ->with('detail',$detail)
                                  ->with('kontak',$kontak);
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
    
    return view('admin.siswa.view')->with('data',$data)
                                              ->with( 'id',$id); 
 }

  public function export()
  {
      // $data = FSiswa::index();
      return view('admin.siswa.export');
  }

   public function import()
  {
      // $data = FSiswa::index();
      return view('admin.siswa.import');
  }

  public function wakil()
  {
      // $data = FSiswa::index();
      return view('admin.siswa.wakil.index');
  }

  public function ekskul()
  {
      // $data = FSiswa::index();
      return view('admin.siswa.ekskul.index');
  }

}
