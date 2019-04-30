<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Idw\SiswaFacade as FSiswa;
use App\Models\Agama;
use App\Models\Beasiswa;
use App\Models\Contact;
use App\Models\DetailMurid;
use App\Models\Ekskul;
use App\Models\Jurusan;
use App\Models\KebutuhanKhusus;
use App\Models\Kekurangan;
use App\Models\Keluar;
use App\Models\Kota;
use App\Models\Murid;
use App\Models\Prestasi;
use App\Models\RegisterMurid;
use App\Models\Wakil;
use Auth;
use Excel;

class SiswaController extends Controller
{
    
  public function index(){
    $data = FSiswa::index();
  	return view('admin.siswa.index',compact('data'));
 	}

  public function add(){
      $agama = FSiswa::agama();
      $ekskul = FSiswa::ekskul();

      return view('admin.siswa.add')->with('agama',$agama)
                                    ->with('ekskul',$ekskul);
  }

 	public function addprocess(Request $req){
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
    $agama = Agama::all();
    $ekskul = Ekskul::all();

    return view('admin.siswa.edit')->with('murid',$murid)
                                  ->with('wakil',$wakil)
                                  ->with('beasiswa',$beasiswa)
                                  ->with('prestasi',$prestasi)
                                  ->with('detail',$detail)
                                  ->with('kontak',$kontak)
                                  ->with('agama',$agama)
                                  ->with('ekskul',$ekskul);
  }

  public function editprocess(Request $req,$id){
      unset($req['_token']);
      unset($req['_method']);

     $murid = Murid::find($id);
        $murid->murid()->update([
             new Wakil([
                'family_name'=>$req['family_name'],
                'id_murid'=>$id,
                'nik'=>$req['nik'],
                'tahun_lahir'=>$req['tahun_lahir'],
                'pendidikan'=>$req['pendidikan'],
                'pekerjaan'=>$req['pekerjaan'],
                'penghasilan_bulanan'=>$req['penghasilan_bulanan'],
                'type'=>$req['type']
            ]),
             new Murid([
                'name'=>$req['name'],
                'jk'=>$req['jk'],
                'nisn'=>$req['nisn'],
                'nik'=>$req['nik'],
                'tempat_lahir'=>$req['tempat_lahir'],
                'tanggal_lahir'=>$req['tanggal_lahir'],
                'no_register_akta_lahir'=>$req['no_register_akta_lahir'],
                'agama'=>$req['agama'],
                'kewarganegaraan'=>$req['kewarganegaraan'],
                'nama_negara'=>$req['nama_negara'],
                'alamat_jalan'=>$req['alamat_jalan'],
                'rt'=>$req['rt'],
                'rw'=>$req['rw'],
                'nama_dusun'=>$req['nama_dusun'],
                'kelurahan_desa'=>$req['kelurahan_desa'],
                'kecamatan'=>$req['kecamatan'],
                'kode_pos'=>$req['kode_pos'],
                'tempat_tinggal'=>$req['tempat_tinggal'],
                'moda_transportasi'=>$req['moda_transportasi'],
                'nomor_kks'=>$req['nomor_kks'],
                'anak_keberapa'=>$req['anak_keberapa'],
                'penerima_kps'=>$req['penerima_kps'],
                'nomor_kps'=>$req['nomor_kps'],
                'usulan_sekolah'=>$req['usulan_sekolah'],
                'penerima_kip'=>$req['penerima_kip'],
                'nomor_kip'=>$req['nomor_kip'],
                'nama_di_kip'=>$req['nama_di_kip'],
                'terima_fisik_kartu'=>$req['terima_fisik_kartu'],
                'alasan_layak'=>$req['alasan_layak'],
                'bank'=>$req['bank'],
                'nomor_rekening'=>$req['nomor_rekening'],
                'rekening_holder'=>$req['rekening_holder'],
                'id_wakil'=>$id

            ]),
             new Contact([
                'nomor_telepon_rumah'=> $req['nomor_telepon_rumah'],
                'nomor_hp' => $req['nomor_hp'],
                'email' => $req['email'],
                'belongs_to' => $id,
                'ekskul' => $req['ekskul']
            ]),
             new DetailMurid([
                'id_murid'=>$id,
                'tinggi_badan'=>$req['tinggi_badan'],
                'berat_badan'=>$req['berat_badan'],
                'jarak_sekolah'=>$req['jarak_sekolah'],
                'jarak_sekolah_kilometer'=>$req['jarak_sekolah_kilometer'],
                'waktu_tempuh'=>$req['waktu_tempuh'],
                'jumlah_saudara_kandung'=>$req['jumlah_saudara_kandung']
            ]),
             new Prestasi([
                'id_murid'=>$id,
                'jenis'=>$req['jenis'],
                'tingkat'=>$req['tingkat'],
                'nama'=>$req['nama'],
                'tahun'=>$req['tahun'],
                'penyelenggara'=>$req['penyelenggara']
            ]),
             new Beasiswa([
                'id_murid'=>$id,
                'jenis'=>$req['jenis'],
                'keterangan'=>$req['keterangan'],
                'tahun_mulai'=>$req['tahun_mulai'],
                'tahun_selesai'=>$req['tahun_selesai']
            ]),

        ]);
        

      // if ($req->all()) {
      //     return redirect('siswa')->with(['message' => 'Data berhasil diubah!']);
      // }else{
      //     return redirect('siswa')->with(['message' => 'Data gagal diubah!']);
      // }
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

  public function exportindex(){
      $data = Murid::all();
      return view('admin.siswa.export',compact('data'));
  }

  public function exportdata(){
      $data = Murid::select('name as Nama',
            'jk as Jenis Kelamin',
            'nisn as NISN',
            'nik as NIK',
            'tempat_lahir as Tempat Lahir',
            'tanggal_lahir as Tanggal Lahir',
            'no_register_akta_lahir  as No.Register Akta Lahir',
            'agama as Agama',
            'kewarganegaraan as Kewarganegaraan',
            'nama_negara as Nama Negara',
            'alamat_jalan as Alamat Jalan',
            'rt as RT',
            'rw as RW',
            'nama_dusun as Nama Dusun',
            'kelurahan_desa as Kelurahan Desa',
            'kecamatan as Kecamatan',
            'kode_pos as Kode Pos',
            'tempat_tinggal as Tempat Tinggal',
            'moda_transportasi as Moda Transportasi',
            'nomor_kks as No.KKS',
            'anak_keberapa as Anak Ke',
            'penerima_kps as Penerima KPS',
            'nomor_kps as No.KPS',
            'usulan_sekolah as Usulan Sekolah',
            'penerima_kip as Penerima KIP',
            'nomor_kip as No.KIP',
            'nama_di_kip as Nama diKIP',
            'terima_fisik_kartu as Terima Fisik',
            'alasan_layak as Alasan Layak',
            'bank as Bank',
            'nomor_rekening as No.Rekening',
            'rekening_holder as Rekening Holder')->get();

      return Excel::create('Data Siswa', function($excel) use ($data) {
          $excel->sheet('Data Siswa', function($sheet) use ($data) {
              $sheet->fromArray($data);
          });

      })->download('xlsx');
  }

  public function importindex(){
      // $data = FSiswa::index();
      return view('admin.siswa.import');
  }

  public function importdata(Request $request){
      if ($request->hasFile('file')){
        $path = $request->file('file')->getRealPath();
        $data = Excel::load($path, function($reader){})->get();
        if (!empty($data) && $data->count()){
          foreach ($data as $key => $value) {
            $murid = new Murid();
            $murid->name = $value->name;
            $murid->jk = $value->jk;
            $murid->nisn = $value->nisn;
            $murid->nik = $value->nik;
            $murid->tempat_lahir = $value->tempat_lahir;
            $murid->tanggal_lahir = $value->tanggal_lahir;
            $murid->no_register_akta_lahir = $value->no_register_akta_lahir;
            $murid->agama = $value->agama;
            $murid->kewarganegaraan = $value->kewarganegaraan;
            $murid->nama_negara = $value->nama_negara;
            $murid->alamat_jalan = $value->alamat_jalan;
            $murid->rt = $value->rt;
            $murid->rw = $value->rw;
            $murid->nama_dusun = $value->nama_dusun;
            $murid->kelurahan_desa = $value->kelurahan_desa;
            $murid->kecamatan = $value->kecamatan;
            $murid->kode_pos = $value->kode_pos;
            $murid->tempat_tinggal = $value->tempat_tinggal;
            $murid->moda_transportasi = $value->moda_transportasi;
            $murid->nomor_kks = $value->nomor_kks;
            $murid->anak_keberapa = $value->anak_keberapa;
            $murid->penerima_kps = $value->penerima_kps;
            $murid->nomor_kps = $value->nomor_kps;
            $murid->usulan_sekolah = $value->usulan_sekolah;
            $murid->penerima_kip = $value->penerima_kip;
            $murid->nomor_kip = $value->nomor_kip;
            $murid->nama_di_kip = $value->nama_di_kip;
            $murid->terima_fisik_kartu = $value->terima_fisik_kartu;
            $murid->alasan_layak = $value->alasan_layak;
            $murid->bank = $value->bank;
            $murid->nomor_rekening = $value->nomor_rekening;
            $murid->rekening_holder = $value->rekening_holder;
            $murid->save();
          }
        }
      }
      return redirect('siswa');
  }

  //export
  public function getReport(Request $req){

    $data = FEExam::getReportInstructor($req->all());
    return response()->json($data);
  }

  public function export(Request $req){

    if($req->as == 1){
        $req['subject_id'] = $req->subject_id;
        $req['class_id'] = $req->class_id;
          
      }else if($req->as == 2){

        $req['subject_id'] = $req->hotroomSubject;
        $req['class_id'] = $req->hotroomClasses;
      }
      unset($req['_token']);
      unset($req['hotroomSubject']);
      unset($req['hotroomClasses']);

    $data = FEExam::getReportInstructor($req->all());
    // dd($data);
    // return view('export.examresult')->with('data',$data);

    return Excel::create('Data Exam', function($excel) use ($data) {

        $excel->sheet('Data Exam', function($sheet) use ($data) {
            $sheet->loadView('export.examresult')->with('data',$data);
            $sheet->setOrientation('potrait');
        });

    })->download('xlsx');

  }
  
  public function getSubjectHotroom($class_id){
    $data = FEExam::getSubjectHotroom($class_id);
    return $data;
  }

  public function wakil(){
      $data = Wakil::all();
      return view('admin.siswa.wakil.index',compact('data'));
  }

  public function ekskul(){
      $data = Ekskul::all();
      return view('admin.siswa.ekskul.index',compact('data'));
  }

}
