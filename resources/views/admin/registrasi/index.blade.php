@extends('layouts.admin')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Index</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/siswa') }}">Registrasi Siswa</a></li>
            <li class="breadcrumb-item active">Index</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a type="submit" class="btn btn-warning" href="{{ url('/registrasi/import') }}"><i class="fa fa-arrow-circle-left"></i> Import</a>
        <a type="submit" class="btn btn-success" href="{{ route('exportregister.index') }}"><i class="fa fa-arrow-circle-right"></i> Export</a>
        <a type="submit" class="btn btn-info" href="{{ url('/registrasi/create') }}"><i class="fa fa-plus-square"></i> Create</a>
    </div>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Registrasi Siswa</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Jurusan</th>
                                <th>Jenis Pendaftaran</th>
                                <th>Tanggal Masuk</th>
                                <th>Asal Sekolah</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;?>
                        @foreach($data as $v)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $v->nis }}</td>
                                <td>{{ $v->jurusan }}</td>
                                <td>{{ $v->jenis }}</td>
                                <td>{{ $v->tanggal_masuk }}</td>
                                <td>{{ $v->asal_sekolah }}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary" href="{{ url('registrasi/edit/'.$v->id)  }}"><i class="fa fa-pencil"></i> Ubah</a>
                                    
                                    <form action="{{ url('registrasi/delete/'.$v->id) }}" method="POST" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                    <button type="submit" onclick="return confirm('Are you sure ? (DELETE PERMANENTLY)');" id="delete-task-{{ $v->id }}" class="btn btn-outline-danger">
                                                <i class="fa fa-btn fa-trash"></i> Hapus
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection