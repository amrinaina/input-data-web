@extends('layouts.admin')

@section('action-button')
@endsection

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
        <a type="submit" class="btn btn-success" href="{{ route('export.data') }}"><i class="fa fa-arrow-circle-right"></i> Export All</a>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Filter</h4>
                <form class="form" role="form" method="POST" action="{{ url('/siswa/createprocess') }}">
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

@section('js')
<script>
    $('#panel-result').hide();
    $(document).ready(function() {
        $('#myTable').DataTable();
        var data = "";
        $('#class_panel').hide();
    });


    $(document).on('change', '#hotroomClasses', function(e) {
        var class_id = $('#hotroomClasses').val();
        var data = ""; 


        if (class_id) {
            $.ajax({
            url: APP_URL+"{{'/nimda/exam_scores/getsubjecthotroom/'}}"+class_id,
            dataType: "json",
            headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type : "POST",
            data: { class_id:class_id},   
            beforeSend : function(xhr){
                swal({   
                    title: "Data sedang di load!",   
                    text: "Mohon tunggu sebentar.",   
                    timer: 700,
                    type:"success",   
                    showConfirmButton: false 
                });
            },
            success: function(result){
                $("#hotroomSubject").empty();
                data = '<option value="">Pilih Semua mata diklat</option>';

                $("#hotroomSubject").append(data);
                $.each(result, function (key, v) {
                    data = '<option value="'+key+'">'+v+'</option>';

                    $("#hotroomSubject").append(data);
                });

            }
        });

        }else{
            $("#hotroomSubject").empty();
            data = '<option value="">Silahkan pilih kelas terlebih dahulu</option>';

            $("#hotroomSubject").append(data);
        }

    });

    function submitReport(){

        var data = ""; 
        $.ajax({
            url: APP_URL+"{{'/nimda/exam_scores/getreport'}}",
            dataType: "json",
            headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type : "POST",
            data: {class_id:class_id},   
            beforeSend : function(xhr){
                $('#report_panel').empty();
                $("#loading").show();
                $('#panel-result').hide();
            },
            success: function(result){
                      data +=  '<div class="table-responsive">';     
                          data +=  '<table id="myTable" class="table table-striped">';
                            data +=  '<thead>';
                              data +=  '<tr>';
                                data +=  '<th width="5%">No</th>';
                                data +=  '<th>NIS</th>';
                                data +=  '<th>Nama</th>';
                                data +=  '<th>Kelas</th>';
                                data +=  '<th>Mata Diklat</th>';
                                data +=  '<th>E-Exam</th>';
                              data +=  '</tr>';
                            data +=  '</thead>';
                            data +=  '<tbody>';
                                var no = 1;
                                var tot = 0;
                                var tot_tdk_lulus = 0;
                                var tot_lulus = 0;
                                $.each(result.detail, function (key, v) {
                                    data += "<tr>";
                                        data += "<td class='text-center'>"+no;
                                        data += "</td>";
                                        data += "<td>"+v.nis;
                                        data += "</td>";
                                        data += "<td>"+v.student;
                                        data += "</td>";
                                        data += "<td>"+v.classes;
                                        data += "</td>";
                                        data += "<td>"+v.subject;
                                        data += "</td>";
                                        data += "<td>"+v.name;
                                    data += "</tr>";
                                    no++;
                                });

                            data +=  '</tbody>';
                          data +=  '</table>';
                      data +=  '</div>';

                $('#panel-result').show(500);

                $('#report_panel').append(data);
                $('#myTable').DataTable();
                $("#loading").hide();

            },
            error: function(){
                console.log("gagal");
            }
        })

    }
</script>
@endsection