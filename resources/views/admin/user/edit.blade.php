@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('siswa.editprocess',$murid['id']) }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="card-header">
                            <strong class="card-title">Wali</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Sebagai</label>
                                    <select class="form-control custom-select" name="type">
                                        @if($wakil['type'] == 1)
                                            <option value="1">Ayah Kandung</option>
                                        @elseif($wakil['type'] == 2)
                                            <option value="2">Ibu Kandung</option>
                                        @else
                                            <option value="3">Wali</option>
                                        @endif
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
                                        @if($wakil['pendidikan'] == 1)
                                            <option value="1">Tidak Sekolah</option>
                                        @elseif($wakil['pendidikan'] == 2)
                                            <option value="2">Putus SD</option>
                                        @elseif($wakil['pendidikan'] == 3)
                                            <option value="3">SD Sederajat</option>
                                        @elseif($wakil['pendidikan'] == 4)
                                            <option value="4">SMP Sederajat</option>
                                        @elseif($wakil['pendidikan'] == 5)
                                            <option value="5">SMA Sederajat</option>
                                        @elseif($wakil['pendidikan'] == 6)
                                            <option value="6">D1</option>
                                        @elseif($wakil['pendidikan'] == 7)
                                            <option value="7">D2</option>
                                        @elseif($wakil['pendidikan'] == 8)
                                            <option value="8">D3</option>
                                        @elseif($wakil['pendidikan'] == 9)
                                            <option value="9">D4/S1</option>
                                        @elseif($wakil['pendidikan'] == 10)
                                            <option value="10">S2</option>.
                                        @else
                                            <option value="11">S3</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Pekerjaan</label>
                                    <select class="form-control custom-select" name="pekerjaan">
                                        @if($wakil['pekerjaan'] == 1)
                                            <option value="1">Tidak Bekerja</option>
                                        @elseif($wakil['pekerjaan'] == 2)
                                            <option value="2">Nelayan</option>
                                        @elseif($wakil['pekerjaan'] == 3)
                                            <option value="3">Petani</option>
                                        @elseif($wakil['pekerjaan'] == 4)
                                            <option value="4">Peternak</option>
                                        @elseif($wakil['pekerjaan'] == 5)
                                            <option value="5">PNS/TNI/POLRI</option>
                                        @elseif($wakil['pekerjaan'] == 6)
                                            <option value="6">Karyawan Swasta</option>
                                        @elseif($wakil['pekerjaan'] == 7)
                                            <option value="7">Pedagang Kecil</option>
                                        @elseif($wakil['pekerjaan'] == 8)
                                            <option value="8">Pedagang Besar</option>
                                        @elseif($wakil['pekerjaan'] == 9)
                                            <option value="9">Wiraswasta</option>
                                        @elseif($wakil['pekerjaan'] == 10)
                                            <option value="10">Wirausaha</option>
                                        @elseif($wakil['pekerjaan'] == 11)
                                            <option value="11">Buruh</option>
                                        @elseif($wakil['pekerjaan'] == 12)
                                            <option value="12">Pensiunan</option>
                                        @elseif($wakil['pekerjaan'] == 13)
                                            <option value="13">Meninggal Dunia</option>
                                        @else
                                            <option value="14">Lain-lain</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Penghasilan Bulanan</label>
                                    <select class="form-control custom-select" name="penghasilan_bulanan">
                                        @if($wakil['penghasilan_bulanan'] == 1)
                                            <option value="1">Kurang dari 500,000</option>
                                        @elseif($wakil['penghasilan_bulanan'] == 2)
                                            <option value="2">500.000 - 999.9999</option>
                                        @elseif($wakil['penghasilan_bulanan'] == 3)
                                            <option value="3">1 juta - 1.999.999</option>
                                        @elseif($wakil['penghasilan_bulanan'] == 4)
                                            <option value="4">2 juta - 4.999.999</option>
                                        @elseif($wakil['penghasilan_bulanan'] == 5)
                                            <option value="5">5 juta - 20 juta</option>
                                        @elseif($wakil['penghasilan_bulanan'] == 6)
                                            <option value="6">lebih dari 20 juta</option>
                                        @else
                                            <option value="7">Tidak Berpenghasilan</option>
                                        @endif
                                    </select>
                                </div>
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