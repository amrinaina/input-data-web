@extends('layouts.admin')

@section('action-button')
@endsection

@section('breadcrumb')
    <li><a href="">ajdh</a></li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
		<div class="row"> 
			<div class="col-sm-12"> 
				<div class="card">
	                <div class="card-body">
						<h3>Filter</h3>
	                	<form class="form" role="form" method="POST" action="{{ url('siswa/export/') }}">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-body">
		                	<div class="row"> 
	                			<div class="col-sm-12"> 
		                			<div class="form-group">
		                				<select name="select" id="select" class="form-control">
			                                <option value="0">Please select NISN</option>
			                                <option value="1">Option #1</option>
			                                <option value="2">Option #2</option>
			                                <option value="3">Option #3</option>
			                            </select>
		                			</div>
		                		</div>

		                		<div class="col-sm-12"> 
		                			<div class="form-group">
		                				<select name="select" id="select" class="form-control">
			                                <option value="0">Please select Nama</option>
			                                <option value="1">Option #1</option>
			                                <option value="2">Option #2</option>
			                                <option value="3">Option #3</option>
			                            </select>
		                			</div>
		                		</div>

		                		<div class="col-sm-12"> 
		                			<div class="form-group">
		                				<select name="select" id="select" class="form-control">
			                                <option value="0">Please select Rombel</option>
			                                <option value="1">Option #1</option>
			                                <option value="2">Option #2</option>
			                                <option value="3">Option #3</option>
			                            </select>
		                			</div>
		                		</div>

		                		<div class="col-sm-12"> 
		                			<div class="form-group">
		                				<select name="select" id="select" class="form-control">
			                                <option value="0">Please select Rayon</option>
			                                <option value="1">Option #1</option>
			                                <option value="2">Option #2</option>
			                                <option value="3">Option #3</option>
			                            </select>
		                			</div>
		                		</div>

		                		<div class="col-sm-12"> 
		                			<button class="btn btn-info pull-right" id="submit" type="submit">Submit</button>
		                		</div>
		                	</div>
		                </div>
		            </form>
	                </div>
		        </div>
		        <div class="row panel-result">

				</div>
			</div>
		</div>
    </div>
</div>

@endsection

@section('js')
	<script>
	    $(document).ready(function() {
	        $('.dropify').dropify();

	        $(".panel-result").hide();
	    });
	</script>


	{{-- <script type="text/javascript"> 

    	var instructor_id = "{{ $instructor['id'] }}";
		$("#classes").change(function(e){
			var data = "";
	        var id = $("#classes").val();
        	$.ajax({
	            url: APP_URL+"{{'/nimda/report/questionnaire/subjectssetclass/'}}"+id+"/"+instructor_id,
	            dataType: "json",
	            headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	            type : "GET",        
	            beforeSend : function(xhr){
	                $("#subjects-loading").show();
		            $("#subjects").empty();
	            },
	            success: function(result){
	                console.log(result);

	                $("#subjects-loading").hide();

    				data += '<select id="subject_id" name="subject_id" class="form-control selectpicker" data-live-search="true">'
		                $.each(result, function (key, v) {
		                	data += '<option value="'+key+'">'+v+'</option>';
		             	});	
    				data += '</select>';

		            $("#subjects").append(data);
			        $('.selectpicker').selectpicker();

	            }
	        })
		});

		$("#submit").click(function(e){
			e.preventDefault();
	        var id = $("#classes").val();
	        var program_id = $("#program_id").val();
	        var subject_id = $("#subject_id").val();
	        var data = "";

	        if (id) {
	        	$.ajax({
		            url: APP_URL+"{{'/nimda/report/questionnaire/gethead/'}}"+id+"/"+program_id+"/"+subject_id,
		            dataType: "json",
		            headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		            type : "POST",
		            data : { class_id : id },          
		            beforeSend : function(xhr){
	                	$("#result-loading").show();
	        			$(".panel-result").hide();

		            },
		            success: function(result){
	                	$("#result-loading").hide();
	        			$(".panel-result").show();
		            	if (result.total == 0) {
				        	swal({   
					            title: "Data Kosong!",   
					            text: "Maaf, data tidak ditemukan",   
					            type: "warning",       
					            showConfirmButton: false,   
					            closeOnConfirm: true,
					            timer : 2500 
					        })
		            	}else{
			                console.table(result);
							$("#detail-result").empty();

			                var i =1;
							data += '<table class="table table-striped" id="myTable">';
								data += '<thead>';
									data += '<tr>';
										data += '<th width="10%">No</th>';
										data += '<th >NIS</th>';
										data += '<th>Nama</th>';
										data += '<th width="15%">Action</th>';
									data += '</tr>';
								data += '</thead>';
								data += '<tbody>';
					                $.each(result.detail, function (key, v) {
			                        	data += '<tr>';
							                data += '<td>'+i+'</td>';
							                data += '<td>'+v.nis+'</td>';
							                data += '<td>'+v.name+'</td>';
							                data += '<td>';
				                    		data += '<a class="btn btn-info" href="detail/'+instructor_id+'/'+v.questionnaire_score_id+'">View</a>';
							                data += '</td>';
						                data += '</tr>';
						                i++;
			                    	});
								data += '</tbody>';
							data += '</table>';

							$("#detail-result").append(data);
							$("#card-total").html(result.total);
							$("#card-not").html(result.total_not_done);
							$("#card-done").html(result.total_done);
							$("#myTable").dataTable();
		            	}

		            }

		        })
	        }else{
	        	$("#tbody").empty();
	        	alert("Gagal");
	        }
	        
		});
	</script> --}}
@endsection