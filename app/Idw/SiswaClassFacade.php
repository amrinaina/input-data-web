<?php

namespace App\Idw;

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

class SiswaClassFacade {
    public function hello() {
        return "Hello, my name is Siswa!";
    }

    public function index() {
    	$data = Murid::all();
        return $data;
    }

    public function agama() {
        $agama = Agama::all();
        return $agama;
    }

    public function ekskul() {
        $ekskul = Ekskul::all();
        return $ekskul;
    }

    public function create($data) {
    	
        $wakil = Wakil::create($data);
        
        $murid = Murid::create([
            'name'=>$data['name'],
            'jk'=>$data['jk'],
            'nisn'=>$data['nisn'],
            'nik'=>$data['nik'],
            'tempat_lahir'=>$data['tempat_lahir'],
            'tanggal_lahir'=>$data['tanggal_lahir'],
            'no_register_akta_lahir'=>$data['no_register_akta_lahir'],
            'agama'=>$data['agama'],
            'kewarganegaraan'=>$data['kewarganegaraan'],
            'nama_negara'=>$data['nama_negara'],
            'alamat_jalan'=>$data['alamat_jalan'],
            'rt'=>$data['rt'],
            'rw'=>$data['rw'],
            'nama_dusun'=>$data['nama_dusun'],
            'kelurahan_desa'=>$data['kelurahan_desa'],
            'kecamatan'=>$data['kecamatan'],
            'kode_pos'=>$data['kode_pos'],
            'tempat_tinggal'=>$data['tempat_tinggal'],
            'moda_transportasi'=>$data['moda_transportasi'],
            'nomor_kks'=>$data['nomor_kks'],
            'anak_keberapa'=>$data['anak_keberapa'],
            'penerima_kps'=>$data['penerima_kps'],
            'nomor_kps'=>$data['nomor_kps'],
            'usulan_sekolah'=>$data['usulan_sekolah'],
            'penerima_kip'=>$data['penerima_kip'],
            'nomor_kip'=>$data['nomor_kip'],
            'nama_di_kip'=>$data['nama_di_kip'],
            'terima_fisik_kartu'=>$data['terima_fisik_kartu'],
            'alasan_layak'=>$data['alasan_layak'],
            'bank'=>$data['bank'],
            'nomor_rekening'=>$data['nomor_rekening'],
            'rekening_holder'=>$data['rekening_holder'],
            'id_wakil'=>$wakil['id']
        ]);

        $kontak = Contact::create($data);

        $detailmurid = DetailMurid::create([
            'id_murid'=>$murid['id'],
            'tinggi_badan'=>$data['tinggi_badan'],
            'berat_badan'=>$data['berat_badan'],
            'jarak_sekolah'=>$data['jarak_sekolah'],
            'jarak_sekolah_kilometer'=>$data['jarak_sekolah_kilometer'],
            'waktu_tempuh'=>$data['waktu_tempuh'],
            'jumlah_saudara_kandung'=>$data['jumlah_saudara_kandung']
        ]);

        $prestasi = Prestasi::create([
            'id_murid'=>$murid['id'],
            'jenis'=>$data['jenis'],
            'tingkat'=>$data['tingkat'],
            'nama'=>$data['nama'],
            'tahun'=>$data['tahun'],
            'penyelenggara'=>$data['penyelenggara']
        ]);

        $beasiswa = Beasiswa::create([
            'id_murid'=>$murid['id'],
            'jenis'=>$data['jenis'],
            'keterangan'=>$data['keterangan'],
            'tahun_mulai'=>$data['tahun_mulai'],
            'tahun_selesai'=>$data['tahun_selesai']
        ]);

    }

    public function editmurid($id) {
        $murid = Murid::where(['id'=>$id])->first();

        return $murid;
    }

    public function editwakil($id) {
        $wakil = Wakil::where(['id'=>$id])->first();

        return $wakil;
    }

    public function editkontak($id) {
        $kontak = Contact::where(['id'=>$id])->first();


        return $kontak;
    }

    public function editdetail($id) {

        $detail = DetailMurid::where(['id'=>$id])->first();

        return $detail;
    }

    public function editprestasi($id) {

        $prestasi = Prestasi::where(['id'=>$id])->first();

        return $prestasi;
    }

    public function editbeasiswa($id) {

        $beasiswa = Beasiswa::where(['id'=>$id])->first();

        return $beasiswa;
    }

    public function editprocess($data,$id) {
    	unset($data['_token']);
        unset($data['_method']);

        $update = Murid::where(['id'=>$id])->update($data);
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