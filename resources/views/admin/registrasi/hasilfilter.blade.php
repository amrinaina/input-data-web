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
        <a type="submit" class="btn btn-success" href="{{ route('exportregister.data') }}"><i class="fa fa-arrow-circle-right"></i> Export</a>
        <header class="panel-heading">
            <a href="{{ route('exportregister.filter') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Filter by NIS
            </a>
            
            @if($filter == 1)
            <a href="{{ route('registrasi') }}" class="btn btn-warning mr-sm pull-right">
                Hilangkan filter
            </a>
            @endif

            <h2 class="panel-title">Report semua barang</h2>
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
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;?>
                        @if(count($data))
                            @foreach($data as $v)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $v->nis }}</td>
                                    <td>{{ $v->jur->name }}</td>
                                    <td class="text-center">{!! jpendaftaranStat($v['jenis']) !!}</td>
                                    <td>{{ $v->tanggal_masuk }}</td>
                                    <td>{{ $v->asal_sekolah }}</td>
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