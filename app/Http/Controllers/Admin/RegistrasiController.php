<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegistrasiMurid;
use Auth;
use Excel;
use Illuminate\Support\Facades\DB;
use App\Idw\SiswaFacade as FSiswa;

class RegistrasiController extends Controller
{
    public function index()
    {
        $data = FSiswa::indexregister();
        $filter = 0;
        return view('admin.registrasi.index', compact('data', 'filter'));
    }

    public function add()
    {
        $murid = FSiswa::index();
        $jurusan = FSiswa::jurusan();
        return view('admin.registrasi.add', compact('murid', 'jurusan'));
    }

    public function addprocess(Request $req)
    {
        $data = FSiswa::createregister($req->all());

        if ($data) {
            return redirect('registrasi')->with(['id' => 'success', 'message' => 'Data berhasil tersimpan!']);
        }

        return redirect('registrasi')->with(['id' => 'warning', 'message' => 'Data gagal tersimpan!']);
    }

    public function edit($id)
    {
        $data = FSiswa::editregister($id);
        $murid = FSiswa::index();
        $jurusan = FSiswa::jurusan();

        return view('admin.registrasi.edit')->with('data', $data)
            ->with('murid', $murid)
            ->with('jurusan', $jurusan);
    }

    public function editprocess(Request $req, $id)
    {
        unset($req['_token']);
        unset($req['_method']);

        $data = RegistrasiMurid::where(['id' => $id])->update($req->all());
        if ($data) {
            return redirect('registrasi')->with(['message' => 'Data berhasil diubah!']);
        } else {
            return redirect('registrasi')->with(['message' => 'Data gagal diubah!']);
        }
    }

    public function delete(Request $req, $id)
    {

        $delete = FSiswa::deleteregister($id);

        if ($delete) {
            return redirect('registrasi')->with(['id' => 'success', 'message' => 'Data berhasil dihapus!']);
        }

        return redirect('registrasi')->with(['id' => 'warning', 'message' => 'Data gagal dihapus!']);
    }

    public function filter()
    {
        $data = RegistrasiMurid::get();
        return view('admin.registrasi.export', compact('data'));
    }

    public function hasilfilter(Request $req)
    {
        $data = RegistrasiMurid::where('id', $req->nis)->get();
        // dd($data);
        $filter = 1;

        return view('admin.registrasi.hasilfilter', compact('data', 'filter'));
    }

    public function exportindex()
    {
        $data = RegistrasiMurid::all();
        return view('admin.registrasi.export', compact('data'));
    }

    public function exportdata(Request $request)
    {
        $select = array_merge(explode(',', $request->fieldList),
            [
                'id_murid as Nama',
                'no_peserta_ujian  as No.Peserta Ujian',
                'nomor_seri_ijazah  as No.Seri Ijazah',
                'nomor_seri_skhus  as No.Seri SKHUS'
            ]
        );
        $data = RegistrasiMurid::select( $select )->get();

        return Excel::create('Data Registrasi Siswa', function ($excel) use ($data) {
            $excel->sheet('Data Registrasi Siswa', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('xlsx');
    }
    public function exportselect()
    {
        $data = RegistrasiMurid::select(
            'nis as NIS',
            'id_murid as Nama',
            'jurusan as Jurusan',
            'jenis as Jenis',
            'tanggal_masuk as Tanggal Masuk',
            'asal_sekolah as Asal Sekolah',
            'no_peserta_ujian  as No.Peserta Ujian',
            'nomor_seri_ijazah  as No.Seri Ijazah',
            'nomor_seri_skhus  as No.Seri SKHUS'
        )->get();

        return Excel::create('Data Registrasi Siswa', function ($excel) use ($data) {
            $excel->sheet('Data Registrasi Siswa', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download('xlsx');
    }

    public function importindex()
    {
        // $data = FSiswa::index();
        return view('admin.registrasi.import');
    }

    public function importdata(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function ($reader) { })->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $register = new RegistrasiMurid();
                    $register->nis = $value->nis;
                    $register->id_murid = $value->id_murid;
                    $register->jurusan = $value->jurusan;
                    $register->jenis = $value->jenis;
                    $register->tanggal_masuk = $value->tanggal_masuk;
                    $register->asal_sekolah = $value->asal_sekolah;
                    $register->no_peserta_ujian = $value->no_peserta_ujian;
                    $register->nomor_seri_ijazah = $value->nomor_seri_ijazah;
                    $register->nomor_seri_skhus = $value->nomor_seri_skhus;
                    $register->save();
                }
            }
        }
        return redirect('registrasi');
    }
}
