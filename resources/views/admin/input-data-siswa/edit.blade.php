@extends('layouts.admin')

@section('content')

<div class="page-wrapper">
	<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
	<div class="container-fluid">
	    <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" method="POST" action="{{ url('siswa/editprocess/'.$data['id']) }}">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Person Info</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="{{ $data['name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NISN</label>
                                            <input type="number" name="nisn" class="form-control form-control-danger" placeholder="NISN" value="{{ $data['nisn'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NIK</label>
                                            <input type="number" name="nik" class="form-control" placeholder="NIK" value="{{ $data['nik'] }}">
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
                                            <input type="text" name="tempat_lahir" class="form-control form-control-danger" placeholder="Tempat Lahir" value="{{ $data['tempat_lahir'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $data['tanggal_lahir'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Register Akta Lahir</label>
                                            <input type="number" name="no_register_akta_lahir" class="form-control form-control-danger" placeholder="Nomor Register Akta Lahir" value="{{ $data['no_register_akta_lahir'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Agama</label>
                                            <select class="form-control custom-select" name="agama">
                                                @if($data['agama']==1)
                                                    <option value="1" selected="">Islam</option>
                                                @elseif($data['agama']==2)
                                                    <option value="2" selected="">Kristen/ Protestan</option>
                                                @elseif($data['agama']==3)
                                                    <option value="3" selected="">Katholik</option>
                                                @elseif($data['agama']==4)
                                                    <option value="4" selected="">Hindu</option>
                                                @elseif($data['agama']==5)
                                                    <option value="5" selected="">Budha</option>
                                                @elseif($data['agama']==6)
                                                    <option value="6" selected="">Khong Hu Chu</option>
                                                @elseif($data['agama']==7)
                                                    <option value="7" selected="">Kepercayaan Kpd Tuan YME</option>
                                                @elseif($data['agama']==99)
                                                    <option value="99" selected="">Lainnya</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kewarganegaraan</label>
                                            <select class="form-control custom-select" name="kewarganegaraan">
                                                @if($data['kewarganegaraan']==0)
                                                    <option value="0" selected="">Indonesia (WNI)</option>
                                                    <option value="1">Asing (WNA)</option>
                                                @else
                                                    <option value="0">Indonesia (WNI)</option>
                                                    <option value="1" selected="">Asing (WNA)</option>
                                                @endif
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Negara</label>
                                            <input type="text" name="nama_negara" class="form-control form-control-danger" placeholder="Nama Negara" value="{{ $data['nama_negara'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Alamat Jalan</label>
                                            <input type="text" name="alamat_jalan" class="form-control" placeholder="Alamat Jalan" value="{{ $data['alamat_jalan'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">RT</label>
                                            <input type="number" name="rt" class="form-control form-control-danger" placeholder="RT" value="{{ $data['rt'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">RW</label>
                                            <input type="number" name="rw" class="form-control" placeholder="RW" value="{{ $data['rw'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nama Dusun</label>
                                            <input type="text" name="nama_dusun" class="form-control form-control-danger" placeholder="Nama Dusun" value="{{ $data['nama_dusun'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kelurahan / Desa</label>
                                            <input type="text" name="kelurahan_desa" class="form-control form-control-danger" placeholder="Kelurahan / Desa" value="{{ $data['kelurahan_desa'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $data['kecamatan'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Kode Pos</label>
                                            <input type="number" name="kode_pos" class="form-control form-control-danger" placeholder="Kode Pos" value="{{ $data['kode_pos'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tempat Tinggal</label>
                                            <select class="form-control custom-select" name="tempat_tinggal">
                                                @if($data['tempat_tinggal']==1)
                                                    <option value="1">Bersama Orang Tua</option>
                                                @elseif($data['tempat_tinggal']==2)
                                                     <option value="2">Wali</option>
                                                @elseif($data['tempat_tinggal']==3)
                                                     <option value="3">Kos</option>
                                                @elseif($data['tempat_tinggal']==4)
                                                     <option value="4">Asrama</option>
                                                @elseif($data['tempat_tinggal']==5)
                                                     <option value="5">Panti Asuhan</option>
                                                @elseif($data['tempat_tinggal']==6)
                                                      <option value="6">Pesantren</option>
                                                 @elseif($data['tempat_tinggal']==9)
                                                      <option value="9">Lainnya</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Moda Transportasi</label>
                                            <select class="form-control custom-select" name="moda_transportasi" value="{{ $data['moda_transportasi'] }}">
                                                @if($data['moda_transportasi']==1)
                                                    <option value="1">Jalan Kaki</option>
                                                @elseif($data['moda_transportasi']==2)
                                                     <option value="2">Kendaraan Pribadi</option>
                                                @elseif($data['moda_transportasi']==3)
                                                     <option value="3">Kendaraan umum / Pete-pete</option>
                                                @elseif($data['moda_transportasi']==4)
                                                     <option value="4">Jemputan Sekolah</option>
                                                @elseif($data['moda_transportasi']==5)
                                                     <option value="5">Kereta Api</option>
                                                @elseif($data['moda_transportasi']==6)
                                                      <option value="6">Ojeg</option>
                                                @elseif($data['moda_transportasi']==7)
                                                      <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
                                                @elseif($data['moda_transportasi']==8)
                                                      <option value="8">Perahu penyebrangan/Rakit/Getek</option>
                                                @elseif($data['moda_transportasi']==99)
                                                      <option value="99">Lainnya</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor KKS</label>
                                            <input type="number" name="nomor_kks" class="form-control form-control-danger" placeholder="Nomor KKS" value="{{ $data['nomor_kks'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Anak Keberapa</label>
                                            <input type="text" name="anak_keberapa" class="form-control" placeholder="Anak Keberapa" value="{{ $data['anak_keberapa'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Penerima KPS</label>
                                            <select class="form-control custom-select" name="penerima_kps">
                                                @if($data['penerima_kps'] == 0)
                                                    <option value="0" selected="">Ya</option>
                                                    <option value="1">Tidak</option>
                                                @else
                                                    <option value="0">Ya</option>
                                                    <option value="1" selected="">Tidak</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor KPS</label>
                                            <input type="number" name="nomor_kps" class="form-control" placeholder="Nomor KPS" value="{{ $data['nomor_kps'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Usulan Sekolah</label>
                                            <select class="form-control custom-select" name="usulan_sekolah">
                                                @if($data['usulan_sekolah'] == 0)
                                                    <option value="0" selected="">Ya</option>
                                                    <option value="1">Tidak</option>
                                                @else
                                                    <option value="0">Ya</option>
                                                    <option value="1" selected="">Tidak</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Penerima KIP</label>
                                            <select class="form-control custom-select" name="penerima_kip">
                                                @if($data['penerima_kip'] == 0)
                                                    <option value="0" selected="">Ya</option>
                                                    <option value="1">Tidak</option>
                                                @else
                                                    <option value="0">Ya</option>
                                                    <option value="1" selected="">Tidak</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor KIP</label>
                                            <input type="number" name="nomor_kip" class="form-control form-control-danger" placeholder="Nomor KIP" value="{{ $data['nomor_kip'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama di KIP</label>
                                            <input type="text" name="nama_di_kip" class="form-control" placeholder="Nama di KIP" value="{{ $data['nama_di_kip'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Terima Fisik Kartu</label>
                                            <select class="form-control custom-select" name="terima_fisik_kartu">
                                                @if($data['terima_fisik_kartu'] == 0)
                                                    <option value="0" selected="">Ya</option>
                                                    <option value="1">Tidak</option>
                                                @else
                                                    <option value="0">Ya</option>
                                                    <option value="1" selected="">Tidak</option>
                                                @endif
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alasan Layak</label>
                                            <input type="number" name="alasan_layak" class="form-control form-control-danger" placeholder="Alasan Layak" value="{{ $data['alasan_layak'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Bank</label>
                                            <input type="text" name="bank" class="form-control" placeholder="Bank" value="{{ $data['bank'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Rekening</label>
                                            <input type="number" name="nomor_rekening" class="form-control form-control-danger" placeholder="Nomor Rekening" value="{{ $data['nomor_rekening'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Atas Nama</label>
                                            <input type="text" name="rekening_holder" class="form-control" placeholder="Atas Nama" value="{{ $data['rekening_holder'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <input type="text" name="status" class="form-control form-control-danger" placeholder="Status" value="{{ $data['status'] }}">
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