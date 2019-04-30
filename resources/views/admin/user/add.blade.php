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