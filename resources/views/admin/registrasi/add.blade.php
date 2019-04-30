@extends('layouts.admin')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Create Siswa</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/registrasi') }}">Index</a></li>
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
                <form class="form" role="form" method="POST" action="{{ url('/registrasi/createprocess') }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="card-header">
                            <strong class="card-title">Registrasi Siswa</strong>
                        </div>
                        <div class="row">
                        	<div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Siswa</label>
                                    <select class="form-control custom-select" name="id_murid">
                                        @foreach($murid as $mur)
                                        	<option value="{{ $mur->id }}">{{ $mur->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Jurusan</label>
                                    <select class="form-control custom-select" name="jurusan">
                                        @foreach($jurusan as $jur)
                                        	<option value="{{ $jur->id }}">{{ $jur->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Jenis Pendaftaran</label>
                                    <select class="form-control custom-select" name="jenis">
                                        <option value="01">Siswa Baru</option>
                                        <option value="02">Pindahan</option>
                                        <option value="03">Kembali Bersekolah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">NIS</label>
                                    <input type="number" name="nis" class="form-control" placeholder="NIS">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tanggal Masuk</label>
                                    <input type="date" name="tanggal_masuk" class="form-control form-control-danger" placeholder="Tanggal Masuk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control form-control-danger" placeholder="Asal Sekolah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">No. Peserta Ujian</label>
                                    <input type="number" name="no_peserta_ujian" class="form-control form-control-danger" placeholder="No. Peserta Ujian">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">No. Seri Ijazah</label>
                                    <input type="text" name="nomor_seri_ijazah" class="form-control form-control-danger" placeholder="No. Seri Ijazah">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">No. Seri SKHUS</label>
                                    <input type="text" name="nomor_seri_skhus" class="form-control form-control-danger" placeholder="No. Seri SKHUS">
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