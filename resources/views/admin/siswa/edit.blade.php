@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('siswa.editprocess',$murid['id']) }}">
                    {{ csrf_field() }} {{ method_field('PATCH') }}
                    <div class="form-body">
                        <div class="card-header">
                            <strong class="card-title">Siswa</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="{{ $murid['name'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">NISN</label>
                                    <input type="number" name="nisn" class="form-control form-control-danger" placeholder="NISN" value="{{ $murid['nisn'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="NIK" value="{{ $murid['nik'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <div class="checkbox checkbox-inverse checkbox-circle">
                                        <input type="radio"  id="l" name="jk" value="l"  {{ ($murid->jk=="l")? "checked" : "" }} >Laki-laki</label>

                                        <input type="radio" id="p" name="jk" value="p" {{ ($murid->jk=="p")? "checked" : "" }} >Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control form-control-danger" placeholder="Tempat Lahir" value="{{ $murid['tempat_lahir'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $murid['tanggal_lahir'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Nomor Register Akta Lahir</label>
                                    <input type="text" name="no_register_akta_lahir" class="form-control form-control-danger" placeholder="Nomor Register Akta Lahir" value="{{ $murid['no_register_akta_lahir'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Agama</label>
                                    <select class="form-control custom-select" name="agama">
                                        @foreach($agama as $a)
                                            @if($a->id == $murid->agama)
                                                <option value="{{ $a->id }}" selected>{{ $a->name }}</option>
                                            @else
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kewarganegaraan</label>
                                    <select class="form-control custom-select" name="kewarganegaraan">
                                        @if($murid['kewarganegaraan']==0)
                                            <option value="0" selected="">Indonesia (WNI)</option>
                                            <option value="1">Asing (WNA)</option>
                                        @else
                                            <option value="0">Indonesia (WNI)</option>
                                            <option value="1" selected="">Asing (WNA)</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Nama Negara</label>
                                    <input type="text" name="nama_negara" class="form-control form-control-danger" placeholder="Nama Negara" value="{{ $murid['nama_negara'] }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Alamat Jalan</label>
                                    <input type="text" name="alamat_jalan" class="form-control" placeholder="Alamat Jalan" value="{{ $murid['alamat_jalan'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">RT</label>
                                    <input type="number" name="rt" class="form-control form-control-danger" placeholder="RT" value="{{ $murid['rt'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">RW</label>
                                    <input type="number" name="rw" class="form-control" placeholder="RW" value="{{ $murid['rw'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Nama Dusun</label>
                                    <input type="text" name="nama_dusun" class="form-control form-control-danger" placeholder="Nama Dusun" value="{{ $murid['nama_dusun'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kelurahan / Desa</label>
                                    <input type="text" name="kelurahan_desa" class="form-control form-control-danger" placeholder="Kelurahan / Desa" value="{{ $murid['kelurahan_desa'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $murid['kecamatan'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Kode Pos</label>
                                    <input type="number" name="kode_pos" class="form-control form-control-danger" placeholder="Kode Pos" value="{{ $murid['kode_pos'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tempat Tinggal</label>
                                    <select class="form-control custom-select" name="tempat_tinggal">
                                        {!! tempatStat($murid['tempat_tinggal']) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Moda Transportasi</label>
                                    <select class="form-control custom-select" name="moda_transportasi">
                                        {!! modaStat($murid['moda_transportasi']) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor KKS</label>
                                    <input type="number" name="nomor_kks" class="form-control form-control-danger" placeholder="Nomor KKS" value="{{ $murid['nomor_kks'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Anak Keberapa</label>
                                    <input type="text" name="anak_keberapa" class="form-control" placeholder="Anak Keberapa" value="{{ $murid['anak_keberapa'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Penerima KPS</label>
                                    <select class="form-control custom-select" name="penerima_kps">
                                        @if($murid['penerima_kps'] == 0)
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
                                    <input type="number" name="nomor_kps" class="form-control" placeholder="Nomor KPS" value="{{ $murid['nomor_kps'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Usulan Sekolah</label>
                                    <select class="form-control custom-select" name="usulan_sekolah">
                                        @if($murid['usulan_sekolah'] == 0)
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
                                        @if($murid['penerima_kip'] == 0)
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
                                    <input type="number" name="nomor_kip" class="form-control form-control-danger" placeholder="Nomor KIP" value="{{ $murid['nomor_kip'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nama di KIP</label>
                                    <input type="text" name="nama_di_kip" class="form-control" placeholder="Nama di KIP" value="{{ $murid['nama_di_kip'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Terima Fisik Kartu</label>
                                    <select class="form-control custom-select" name="terima_fisik_kartu">
                                        @if($murid['terima_fisik_kartu'] == 0)
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
                                    <select class="form-control custom-select" name="alasan_layak">
                                        {!! alasanStat($murid['alasan_layak']) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Bank</label>
                                    <input type="text" name="bank" class="form-control" placeholder="Bank" value="{{ $murid['bank'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor Rekening</label>
                                    <input type="number" name="nomor_rekening" class="form-control form-control-danger" placeholder="Nomor Rekening" value="{{ $murid['nomor_rekening'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Atas Nama</label>
                                    <input type="text" name="rekening_holder" class="form-control" placeholder="Atas Nama" value="{{ $murid['rekening_holder'] }}">
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
                                        {!! typeStat($wakil['type']) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Wali</label>
                                    <input type="text" name="family_name" class="form-control" placeholder="Nama Lengkap" value="{{ $wakil['family_name'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">NIK Wali</label>
                                    <input type="number" name="nik" class="form-control" placeholder="NIK" value="{{ $wakil['nik'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Tahun Lahir</label>
                                    <input type="text" name="tahun_lahir" class="form-control form-control-danger" placeholder="Tahun Lahir" value="{{ $wakil['tahun_lahir'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Pendidikan</label>
                                    <select class="form-control custom-select" name="pendidikan">
                                        {!! pendStat($wakil['pendidikan']) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Pekerjaan</label>
                                    <select class="form-control custom-select" name="pekerjaan">
                                        {!! pekerStat($wakil['pekerjaan']) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Penghasilan Bulanan</label>
                                    <select class="form-control custom-select" name="penghasilan_bulanan">
                                        {!! penghasilanStat($wakil['penghasilan_bulanan']) !!}
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
                                    <input type="number" name="nomor_telepon_rumah" class="form-control" placeholder="Nomor Telepon Rumah" value="{{ $kontak['nomor_telepon_rumah'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor HP</label>
                                    <input type="number" name="nomor_hp" class="form-control" placeholder="Nomor HP" value="{{ $kontak['nomor_hp'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $kontak['email'] }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Jenis Ekstrakulikuler</label>
                                    <select class="form-control custom-select" name="ekskul">
                                      @foreach($ekskul as $a)
                                            @if($a->id == $murid->ekskul)
                                                <option value="{{ $a->id }}" selected>{{ $a->name }}</option>
                                            @else
                                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                            @endif
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
                                    <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan" value="{{ $detail['tinggi_badan'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Berat Badan</label>
                                    <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan" value="{{ $detail['berat_badan'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Jumlah Saudara Kandung</label>
                                    <input type="number" name="jumlah_saudara_kandung" class="form-control" placeholder="Jumlah Saudara Kandung" value="{{ $detail['jumlah_saudara_kandung'] }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Jarak Tempat Tinggal Ke Sekolah</label>
                                    <div class="checkbox checkbox-inverse checkbox-circle">
                                        <input type="radio"  id="jarak_sekolah" name="jarak_sekolah" value="0"  {{ ($detail->jarak_sekolah=="0")? "checked" : "" }} >Kurang dari 1 km</label>

                                        <input type="radio" id="jarak_sekolah" name="jarak_sekolah" value="1" {{ ($detail->jarak_sekolah=="1")? "checked" : "" }} >Lebih dari 1 km</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Sebutkan (dalam kilometer)</label>
                                    <input type="text" name="jarak_sekolah_kilometer" class="form-control" placeholder="Sebutkan (dalam kilometer)" value="{{ $detail['jarak_sekolah_kilometer'] }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Waktu Tempuh ke Sekolah (Jam/Menit)</label>
                                    <input type="text" name="waktu_tempuh" class="form-control" placeholder="Contoh : 1 Jam 20 Menit" value="{{ $detail['waktu_tempuh'] }}">
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
                                       {!! jenisStat($prestasi['jenis']) !!}
                                    </select>
                                    <p style="color:#83b1e2;"><strong>*</strong> Jenis prestasi yang pernah diraih oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tingkat</label>
                                    <select class="form-control custom-select" name="tingkat">
                                        {!! tingkatStat($prestasi['tingkat']) !!}
                                    </select>
                                    <p style="color:#83b1e2;"><strong>*</strong> Tingkat penyelenggaraan prestasi yang pernah diraih oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama Prestasi</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Prestasi" value="{{ $prestasi['nama'] }}">
                                    <p style="color:#83b1e2;"><strong>*</strong> Nama kegiatan/acara dari prestasi yang pernah diraih oleh peserta didik. Contoh: Lomba Cerdas Cermat Bahasa Indonesia Tingkat SMP. Sesuaikan menurut piagam yang diperoleh.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tahun</label>
                                    <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="{{ $prestasi['tahun'] }}">
                                    <p style="color:#83b1e2;"><strong>*</strong> Tahun prestasi yang pernah diraih oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Penyelenggara</label>
                                    <input type="text" name="penyelenggara" class="form-control" placeholder="Penyelenggara" value="{{ $prestasi['penyelenggara'] }}">
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
                                        {!! jenisbeStat($beasiswa['jenis']) !!}
                                    </select>
                                    <p style="color:#83b1e2;"><strong>*</strong> Jenis beasiswa yang pernah diterima oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $beasiswa['keterangan'] }}">
                                    <p style="color:#83b1e2;"><strong>*</strong> Keterangan terkait beasiswa yang pernah diterima oleh peserta didik. Misalnya dapat diisi dengan nama beasiswa, seperti Beasiswa Murid Berprestasi Tahun 2017, atau keterangan lain yang relevan</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tahun Mulai</label>
                                    <input type="text" name="tahun_mulai" class="form-control" placeholder="Tahun Mulai" value="{{ $beasiswa['tahun_mulai'] }}">
                                    <p style="color:#83b1e2;"><strong>*</strong> Tahun mulai diterimanya beasiswa oleh peserta didik</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tahun Selesai</label>
                                    <input type="text" name="tahun_selesai" class="form-control" placeholder="Tahun Selesai" value="{{ $beasiswa['tahun_selesai'] }}">
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