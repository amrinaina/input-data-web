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
                <form class="form" role="form" method="POST" action="{{ url('/registrasi/createprocess') }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <select class="form-control" name="nama">
                                        <option>sa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <select class="form-control">
                                        <option>sa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <select class="form-control">
                                        <option>sa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <select class="form-control">
                                        <option>sa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <select class="form-control">
                                        <option>sa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Export To Excel</button>
                        <button type="submit" class="btn btn-inverse pull-right">Submit</button>
                    </div>
                </form>
                <div id="report_panel">
                            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection