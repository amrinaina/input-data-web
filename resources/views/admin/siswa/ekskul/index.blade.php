@extends('layouts.admin')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Index</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/ekskul') }}">Ekskul</a></li>
            <li class="breadcrumb-item active">Index</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Ekskul</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;?>
                        @foreach($data as $key => $v)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $v['name'] }}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary" href="{{ url('ekskul/edit/'.$v->id)  }}"><i class="fa fa-pencil"></i> Ubah</a>
                                    
                                    <form action="{{ url('ekskul/delete/'.$v->id) }}" method="POST" style="display: inline-block">
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