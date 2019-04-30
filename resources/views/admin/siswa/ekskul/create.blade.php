@extends('layouts.admin')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Create</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/ekskul') }}">Ekskul</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('ekskul.store') }}" method="POST">
                	@csrf
                	<div class="form-group">
                		<label for="">Nama</label>
                		<input type="text" name="name" class="form-control">
                	</div>

                	<div class="form-group">
                		<button type="submit" class="btn btn-primary">Submit</button>
                	</div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection