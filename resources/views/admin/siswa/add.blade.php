@extends('layouts.admin')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Create Siswa</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/siswa') }}">Index</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="form" role="form" method="POST" action="{{ url('/siswa/createprocess') }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="card-header">
                            <strong class="card-title">Siswa</strong>
                        </div>
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
                            <div class="col-md-4">
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
                                    <input type="text" name="no_register_akta_lahir" class="form-control form-control-danger" placeholder="Nomor Register Akta Lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Agama</label>
                                    <select class="form-control custom-select" name="agama">
                                        @foreach($agama as $a)
                                            <option value="{{ $a['id'] }}">{{$a['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kewarganegaraan</label>
                                    <select class="form-control custom-select" name="kewarganegaraan">
                                        <option value="0">Indonesia (WNI)</option>
                                        <option value="1">Asing (WNA)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
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
                                    <select class="form-control custom-select" name="alasan_layak">
                                        <option value="1">Pemegang PKH/KPS/KIP</option>
                                        <option value="2">Penerima BSM 2014</option>
                                        <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
                                        <option value="4">Dampak Bencana Alam</option>
                                        <option value="5">Prenah Drop OUT</option>
                                        <option value="6">Siswa Miskin/Rentan Miskin</option>
                                        <option value="7">Daerah Konflik</option>
                                        <option value="8">Keluarga Terpidna</option>
                                        <option value="9">Kelainan Fisik</option>
                                    </select>
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
                        </div>

                        <div class="card-header">
                            <strong class="card-title">Wali</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Sebagai</label>
                                    <select class="form-control custom-select" name="type">
                                        <option value="1">Ayah Kandung</option>
                                        <option value="2">Ibu Kandung</option>
                                        <option value="3">Wali</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Wali</label>
                                    <input type="text" name="family_name" class="form-control" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">NIK Wali</label>
                                    <input type="number" name="nik" class="form-control" placeholder="NIK">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Tahun Lahir</label>
                                    <input type="text" name="tahun_lahir" class="form-control form-control-danger" placeholder="Tahun Lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Pendidikan</label>
                                    <select class="form-control custom-select" name="pendidikan">
                                        <option value="1">Tidak Sekolah</option>
                                        <option value="2">Putus SD</option>
                                        <option value="3">SD Sederajat</option>
                                        <option value="4">SMP Sederajat</option>
                                        <option value="5">SMA Sederajat</option>
                                        <option value="6">D1</option>
                                        <option value="7">D2</option>
                                        <option value="8">D3</option>
                                        <option value="9">D4/S1</option>
                                        <option value="10">S2</option>
                                        <option value="11">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Pekerjaan</label>
                                    <select class="form-control custom-select" name="pekerjaan">
                                        <option value="1">Tidak Bekerja</option>
                                        <option value="2">Nelayan</option>
                                        <option value="3">Petani</option>
                                        <option value="4">Peternak</option>
                                        <option value="5">PNS/TNI/POLRI</option>
                                        <option value="6">Karyawan Swasta</option>
                                        <option value="7">Pedagang Kecil</option>
                                        <option value="8">Pedagang Besar</option>
                                        <option value="9">Wiraswasta</option>
                                        <option value="10">Wirausaha</option>
                                        <option value="11">Buruh</option>
                                        <option value="12">Pensiunan</option>
                                        <option value="13">Meninggal Dunia</option>
                                        <option value="14">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Penghasilan Bulanan</label>
                                    <select class="form-control custom-select" name="penghasilan_bulanan">
                                        <option value="1">Kurang dari 500,000</option>
                                        <option value="2">500.000 - 999.9999</option>
                                        <option value="3">1 juta - 1.999.999</option>
                                        <option value="4">2 juta - 4.999.999</option>
                                        <option value="5">5 juta - 20 juta</option>
                                        <option value="6">lebih dari 20 juta</option>
                                        <option value="7">Tidak Berpenghasilan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            <strong class="card-title">Kontak</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor Telepon Rumah</label>
                                    <input type="number" name="nomor_telepon_rumah" class="form-control" placeholder="Nomor Telepon Rumah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor HP</label>
                                    <input type="number" name="nomor_hp" class="form-control" placeholder="Nomor HP">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Jenis Ekstrakulikuler</label>
                                    <select class="form-control custom-select" name="ekskul">
                                        @foreach($ekskul as $e)
                                            <option value="{{ $e['id'] }}">{{$e['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            <strong class="card-title">Data Periodik</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Tinggi Badan</label>
                                    <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Berat Badan</label>
                                    <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Jumlah Saudara Kandung</label>
                                    <input type="number" name="jumlah_saudara_kandung" class="form-control" placeholder="Jumlah Saudara Kandung">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Jarak Tempat Tinggal Ke Sekolah</label>
                                    <div class="checkbox checkbox-inverse checkbox-circle">
                                        <input id="jarak_sekolah" class="selectCb" value="0" name="jarak_sekolah" type="checkbox">
                                        <label for="checkbox-15">Kurang dari 1 km</label>

                                        <input id="jarak_sekolah" class="selectCb" value="1" name="jarak_sekolah" type="checkbox"> 
                                        <label for="checkbox-15">Lebih dari 1 km</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Sebutkan (dalam kilometer)</label>
                                    <input type="text" name="jarak_sekolah_kilometer" class="form-control" placeholder="Sebutkan (dalam kilometer)">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Waktu Tempuh ke Sekolah (Jam/Menit)</label>
                                    <input type="text" name="waktu_tempuh" class="form-control" placeholder="Contoh : 1 Jam 20 Menit">
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            <strong class="card-title">Prestasi</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Jenis</label>
                                    <select class="form-control custom-select" name="jenis">
                                        <option value="1">Sains</option>
                                        <option value="2">Seni</option>
                                        <option value="3">Olahraga</option>
                                        <option value="4">Lain-lain</option>
                                    </select>
                                    <p style="color:#83b1e2;"><strong>*</strong> Jenis prestasi yang pernah diraih oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tingkat</label>
                                    <select class="form-control custom-select" name="tingkat">
                                        <option value="1">Sekolah</option>
                                        <option value="2">Kecamatan</option>
                                        <option value="3">Kabupaten</option>
                                        <option value="4">Provinsi</option>
                                        <option value="5">Nasional</option>
                                        <option value="6">Internasional</option>
                                    </select>
                                    <p style="color:#83b1e2;"><strong>*</strong> Tingkat penyelenggaraan prestasi yang pernah diraih oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Prestasi</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Prestasi">
                                    <p style="color:#83b1e2;"><strong>*</strong> Nama kegiatan/acara dari prestasi yang pernah diraih oleh peserta didik. Contoh: Lomba Cerdas Cermat Bahasa Indonesia Tingkat SMP. Sesuaikan menurut piagam yang diperoleh.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tahun</label>
                                    <input type="text" name="tahun" class="form-control" placeholder="Tahun">
                                    <p style="color:#83b1e2;"><strong>*</strong> Tahun prestasi yang pernah diraih oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Penyelenggara</label>
                                    <input type="text" name="penyelenggara" class="form-control" placeholder="Penyelenggara">
                                    <p style="color:#83b1e2;"><strong>*</strong> Nama penyelenggara/panitia kegiatan dari prestasi yang pernah diraih oleh peserta didik. Contoh: Panitia O2SN dan FL2SN Kab. Bengkayang. Sesuaikan menurut piagam yang diperoleh.</p>
                                </div>
                            </div>
                        </div>

                         <div class="card-header">
                            <strong class="card-title">Beasiswa</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Jenis</label>
                                    <select class="form-control custom-select" name="jenis">
                                        <option value="1">Anak berprestasi</option>
                                        <option value="2">Anak Miskin</option>
                                        <option value="3">Pendidikan</option>
                                        <option value="4">Unggulan</option>
                                        <option value="99">Lain-lain</option>
                                    </select>
                                    <p style="color:#83b1e2;"><strong>*</strong> Jenis beasiswa yang pernah diterima oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                                    <p style="color:#83b1e2;"><strong>*</strong> Keterangan terkait beasiswa yang pernah diterima oleh peserta didik. Misalnya dapat diisi dengan nama beasiswa, seperti Beasiswa Murid Berprestasi Tahun 2017, atau keterangan lain yang relevan</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tahun Mulai</label>
                                    <input type="text" name="tahun_mulai" class="form-control" placeholder="Tahun Mulai">
                                    <p style="color:#83b1e2;"><strong>*</strong> Tahun mulai diterimanya beasiswa oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tahun Selesai</label>
                                    <input type="text" name="tahun_selesai" class="form-control" placeholder="Tahun Selesai">
                                    <p style="color:#83b1e2;"><strong>*</strong> Tahun selesai diterimanya beasiswa oleh peserta didik. Apabila beasiswa tersebut hanya diterima sekali dalam tahun yang sama, maka diisi sama seperti Tahun Mulai</p>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse pull-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection