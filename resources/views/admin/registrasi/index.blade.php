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
        <a type="submit" class="btn btn-info" href="{{ url('/registrasi/create') }}"><i class="fa fa-plus-square"></i> Create</a>
        <a type="submit" id="doExport" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Export</a>
        <form name="formExport" action="{{route('exportregister.data')}}" method="post">
            @csrf
            <input type="hidden" name="fieldList"
                value="nis as NIS,id_murid as Nama,jurusan as Jurusan,tanggal_masuk as Tanggal Masuk,asal_sekolah as Asal Sekolah,no_peserta_ujian as No.Peserta Ujian,nomor_seri_ijazah as No.Seri Ijazah,nomor_seri_skhus as No.Seri SKHUS,jenis as Jenis">
        </form>
        <header class="panel-heading">
            <a href="{{ route('exportregister.filter') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Filter by NIS
            </a>

            @if($filter == 1)
            <a href="{{ route('registrasi') }}" class="btn btn-warning mr-sm pull-right">
                Hilangkan filter
            </a>
            @endif

            <h2 class="panel-title">Data Registrasi Siswa</h2>
        </header>
    </div>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Registrasi Siswa</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        @if(count($data))
                            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="{{asset('assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf')}}">
                        @else
                            <table class="table table-bordered table-striped mb-none">
                        @endif
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
                        @if(count($data))
                            @foreach($data as $v)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $v->nis }}</td>
                                    <td>{{ $v->jurusan }}</td>
                                    <td class="text-center">{{$v['jenis']}}</td>
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
                        @else
                            <tr align="center" class="gradeA">
                                <td colspan="8">Belum ada data :)</td>
                            </tr>
                        @endif
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
