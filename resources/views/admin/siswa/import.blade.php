@extends('layouts.admin')

@section('content')

<div class="page-wrapper">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Select File</h4>
                        <form action="#" class="dropify">
                            <div class="fallback">
                                <input type="file" class="dropify" name="url_file" data-max-file-size="5M" required/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success pull-right">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
    });
</script>
@endsection