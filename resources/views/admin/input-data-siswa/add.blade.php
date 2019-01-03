@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="#">Peserta Didik</a></li>
    <li><a class="active">Create</a></li>
@endsection

@section('content')

<div class="page-wrapper">
	<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Create</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Peserta Didik</a></li>
                <li class="breadcrumb-item active">Input Data Pserta Didik</li>
            </ol>
        </div>
    </div>
	<div class="container-fluid">
	    <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Create </h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" method="POST" action="{{ url('/siswa/createprocess') }}">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Person Info</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NISN</label>
                                            <input type="number" name="nisn" class="form-control form-control-danger" placeholder="NISN">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NIK</label>
                                            <input type="number" name="nik" class="form-control" placeholder="NIK">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jenis Kelamin</label>
                                            <div class="checkbox checkbox-inverse checkbox-circle">
                                                <input id="jk" class="selectCb" value="l" name="jk" type="checkbox">
                                                <label for="checkbox-15">Laki-laki</label>

                                                <input id="jk" class="selectCb" value="p" name="jk" type="checkbox"> 
                                                <label for="checkbox-15">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control form-control-danger" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Register Akta Lahir</label>
                                            <input type="number" name="no_register_akta_lahir" class="form-control form-control-danger" placeholder="Nomor Register Akta Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Agama</label>
                                            <select class="form-control custom-select" name="agama">
                                                <option value="">--Pilih Agama--</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen/ Protestan</option>
                                                <option value="3">Katholik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Khong Hu Chu</option>
                                                <option value="7">Kepercayaan Kpd Tuan YME</option>
                                                <option value="99">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kewarganegaraan</label>
                                            <select class="form-control custom-select" name="kewarganegaraan">
                                                <option value="0">Indonesia (WNI)</option>
                                                <option value="1">Asing (WNA)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Negara</label>
                                            <input type="text" name="nama_negara" class="form-control form-control-danger" placeholder="Nama Negara">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Alamat Jalan</label>
                                            <input type="text" name="alamat_jalan" class="form-control" placeholder="Alamat Jalan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">RT</label>
                                            <input type="number" name="rt" class="form-control form-control-danger" placeholder="RT">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">RW</label>
                                            <input type="number" name="rw" class="form-control" placeholder="RW">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nama Dusun</label>
                                            <input type="text" name="nama_dusun" class="form-control form-control-danger" placeholder="Nama Dusun">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kelurahan / Desa</label>
                                            <input type="text" name="kelurahan_desa" class="form-control form-control-danger" placeholder="Kelurahan / Desa">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kode Pos</label>
                                            <input type="number" name="kode_pos" class="form-control form-control-danger" placeholder="Kode Pos">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tempat Tinggal</label>
                                            <select class="form-control custom-select" name="tempat_tinggal">
                                                <option value="1">Bersama Orang Tua</option>
                                                <option value="2">Wali</option>
                                                <option value="3">Kos</option>
                                                <option value="4">Asrama</option>
                                                <option value="5">Panti Asuhan</option>
                                                <option value="6">Pesantren</option>
                                                <option value="9">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Moda Transportasi</label>
                                            <select class="form-control custom-select" name="moda_transportasi">
                                                <option value="1">Jalan Kaki</option>
                                                <option value="2">Kendaraan Pribadi</option>
                                                <option value="3">Kendaraan umum / Pete-pete</option>
                                                <option value="4">Jemputan Sekolah</option>
                                                <option value="5">Kereta Api</option>
                                                <option value="6">Ojeg</option>
                                                <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
                                                <option value="8">Perahu penyebrangan/Rakit/Getek</option>
                                                <option value="99">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor KKS</label>
                                            <input type="number" name="nomor_kks" class="form-control form-control-danger" placeholder="Nomor KKS">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Anak Keberapa</label>
                                            <input type="text" name="anak_keberapa" class="form-control" placeholder="Anak Keberapa">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Penerima KPS</label>
                                            <select class="form-control custom-select" name="penerima_kps">
                                                <option value="0">Ya</option>
                                                <option value="1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor KPS</label>
                                            <input type="number" name="nomor_kps" class="form-control" placeholder="Nomor KPS">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Usulan Sekolah</label>
                                            <select class="form-control custom-select" name="usulan_sekolah">
                                                <option value="0">Ya</option>
                                                <option value="1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Penerima KIP</label>
                                            <select class="form-control custom-select" name="penerima_kip">
                                                <option value="0">Ya</option>
                                                <option value="1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor KIP</label>
                                            <input type="number" name="nomor_kip" class="form-control form-control-danger" placeholder="Nomor KIP">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama di KIP</label>
                                            <input type="text" name="nama_di_kip" class="form-control" placeholder="Nama di KIP">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Terima Fisik Kartu</label>
                                            <select class="form-control custom-select" name="terima_fisik_kartu">
                                                <option value="0">Ya</option>
                                                <option value="1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alasan Layak</label>
                                            <input type="number" name="alasan_layak" class="form-control form-control-danger" placeholder="Alasan Layak">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Bank</label>
                                            <input type="text" name="bank" class="form-control" placeholder="Bank">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Rekening</label>
                                            <input type="number" name="nomor_rekening" class="form-control form-control-danger" placeholder="Nomor Rekening">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Atas Nama</label>
                                            <input type="text" name="rekening_holder" class="form-control" placeholder="Atas Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <input type="text" name="status" class="form-control form-control-danger" placeholder="Status">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

@endsection