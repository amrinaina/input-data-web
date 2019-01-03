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
            <div class="col-12">
                <a type="submit" class="btn btn-info btn-lg pull-right" href="{{ url('/siswa/create') }}"><i class="fa fa-plus"></i> Create</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Siswa</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Name</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Negara</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1;?>
                                @foreach($data as $key => $v)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $v['nisn'] }}</td>
                                        <td>{{ $v['name'] }}</td>
                                        <td>{{ $v['jk'] }}</td>
                                        <td>{{ $v['agama'] }}</td>
                                        <td>{{ $v['nama_negara'] }}</td>
                                        <td class="text-center">

                                            <a class="btn btn-info" href="{{ url('siswa/view/'.$v->id)  }}"><i class="fa fa-eye"></i> View</a>

                                            <a class="btn btn-primary" href="{{ url('siswa/edit/'.$v->id)  }}"><i class="fa fa-pencil"></i> Ubah</a>
                                            
                                            <form action="{{ url('siswa/delete/'.$v->id) }}" method="POST" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                            <button type="submit" onclick="return confirm('Are you sure ? (DELETE PERMANENTLY)');" id="delete-task-{{ $v->id }}" class="btn btn-danger">
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
    </div>
</div>

@endsection