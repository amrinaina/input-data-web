@extends('layouts.admin')

@section('action-button')
@endsection

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Index</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/registrasi') }}">Siswa</a></li>
            <li class="breadcrumb-item active">Index</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a type="submit" class="btn btn-success" href="{{ route('exportregister.data') }}"><i class="fa fa-arrow-circle-right"></i> Export All</a>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Filter</h4>
                <form class="form" role="form" method="POST" action="{{ route('exportregister.hasilfilter') }}">
                    {{ csrf_field() }}
                    <header class="panel-heading">          
                        <h2 class="panel-title">Masukan data level</h2>
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputTooltip1">Nama level</label>
                            <div class="col-md-6">
                                @if(count($data))
                                    <select data-plugin-selectTwo class="form-control populate selecttwo" name="nis">
                                        @foreach($data as $key => $val)
                                            <option value="{{$val->id}}">{{$val->nis}}</option> 
                                        @endforeach
                                    </select>
                                @else
                                    <select class="form-control" disabled="">
                                        <option>Input terlebih dahulu data ruang</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="form-group">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" align="right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i>
                                     Filter
                                </button>

                                <a href="{{ route('registrasi') }}" class="btn btn-default">Kembali</a>
                            </div>
                        </div>
                    </footer>
                </form>
                <div id="report_panel">
                            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script type="text/javascript">
        $(".selecttwo").select2();
    </script>
@endsection