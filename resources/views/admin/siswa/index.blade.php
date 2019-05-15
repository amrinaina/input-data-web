@extends('layouts.admin')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Index</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/siswa') }}">Siswa</a></li>
            <li class="breadcrumb-item active">Index</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a type="submit" class="btn btn-info" href="{{ route('siswa.create') }}"><i class="fa fa-plus-square"></i> Create</a>
        <a type="submit" class="btn btn-warning" href="{{ route('import.index') }}"><i class="fa fa-arrow-circle-left"></i> Import</a>
        <a id="doExport" class="btn btn-success" ><i class="fa fa-arrow-circle-right"></i> Export</a>
    </div>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <form name="formExport" action="{{route('export.data')}}" method="post">
                            @csrf
                            <input type="hidden" name="fieldList" value="nisn as NISN, name as Nama, jk as Jenis, agama as Agama, nama_negara as Negara">
                                <tr>
                                    <th>No</th>
                                    <th><input class="export-check" type="checkbox" checked name="field[]" value="nisn as NISN"> NISN</th>
                                    <th><input class="export-check" type="checkbox" checked name="field[]" value="name as Nama"> Name</th>
                                    <th><input class="export-check" type="checkbox" checked name="field[]" value="jk as Jenis Kelamin"> Jenis Kelamin</th>
                                    <th><input class="export-check" type="checkbox" checked name="field[]" value="agama as Agama"> Agama</th>
                                    <th><input class="export-check" type="checkbox" checked name="field[]" value="nama_negara as Negara"> Negara</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </form>
                        </thead>
                        <tbody>
                        <?php $no = 1;?>
                        @foreach($data as $v)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $v->nisn }}</td>
                                <td>{{ $v->name }}</td>
                                <td>{{ $v->jk }}</td>
                                <td>{{ $v->ag->name}}</td>
                                <td>{{ $v->nama_negara }}</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary" href="{{ url('siswa/edit/'.$v->id)  }}"><i class="fa fa-pencil"></i> Ubah</a>

                                    <form action="{{ url('siswa/delete/'.$v->id) }}" method="POST" style="display: inline-block">
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
@section('script')
<script>
$(document).ready(function(){
    $('#doExport').click(function(){
        document.formExport.submit();

        //// First attempt
        // var list = [];
        // $("input:checkbox[class='export-check']:checked").each(function(){
        //     list.push($(this).attr('value'));
        // });
        // $.ajax({
        //     method: 'POST',
        //     url: "{{route('export.data')}}",
        //     data: {
        //         _token: "{{csrf_token()}}",
        //         list
        //     }
        // }).done();
    });

    $('.export-check').click(function(){
        var list = [];
        $("input:checkbox[class='export-check']:checked").each(function(){
            list.push($(this).attr('value'));
        });
        $('input[name=fieldList]').val(list);
    });
});
</script>
@endsection
