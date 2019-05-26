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
        <a type="submit" id="doExport" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Export</a>
        <form name="formExport" action="{{route('exportregister.data')}}" method="post">
            @csrf
            <input type="hidden" name="fieldList"
                value="nis as NIS,id_murid as Nama,jurusan as Jurusan,tanggal_masuk as Tanggal Masuk,asal_sekolah as Asal Sekolah,no_peserta_ujian as No Peserta Ujian,nomor_seri_ijazah as No Seri Ijazah,nomor_seri_skhus as No Seri SKHUS,jenis as Jenis">
            <input type="hidden" name="judul" value="judul">
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

        </header>
    </div>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Registrasi Siswa</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                <input class="form-control" type="text" value="judul" style="width: 500px;">
                    <table class="table table-bordered table-striped" id="myTable">
                        @if(count($data))
                            <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" data-swf-path="{{asset('assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf')}}">
                        @else
                            <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0">
                        @endif
                        <thead>
                            <tr>
                                <th><input class="export-check" type="checkbox" checked value="nis as NIS"> NIS</th>
                                <th><input class="export-check" type="checkbox" checked value="id_murid as Nama"> Nama</th>
                                <th><input class="export-check" type="checkbox" checked value="jurusan as Jurusan"> Jurusan</th>
                                <th><input class="export-check" type="checkbox" checked value="tanggal_masuk as Tanggal Masuk"> Tanggal Masuk</th>
                                <th><input class="export-check" type="checkbox" checked value="asal_sekolah as Asal Sekolah"> Asal Sekolah</th>
                                <th><input class="export-check" type="checkbox" checked value="no_peserta_ujian as No Peserta Ujian"> No.Peserta Ujian</th>
                                <th><input class="export-check" type="checkbox" checked value="nomor_seri_ijazah as No Seri Ijazah"> No.Seri Ijazah</th>
                                <th><input class="export-check" type="checkbox" checked value="nomor_seri_skhus as No Seri SKHUS"> No.Seri SKHUS</th>
                                <th><input class="export-check" type="checkbox" checked value="jenis as Pendaftaran"> Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($data))
                            @foreach($data as $v)
                                <tr>
                                    <td>{{ $v->nis }}</td>
                                    <td>{{ $v->siswa->name }}</td>
                                    <td>{{ $v->jur->name }}</td>
                                    <td>{{ $v->tanggal_masuk }}</td>
                                    <td>{{ $v->asal_sekolah }}</td>
                                    <td>{{ $v->no_peserta_ujian }}</td>
                                    <td>{{ $v->nomor_seri_ijazah }}</td>
                                    <td>{{ $v->nomor_seri_skhus }}</td>
                                    <td class="text-center">{!! jpendaftaranStat($v['jenis']) !!}</td>
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