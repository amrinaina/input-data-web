@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Siswa</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Tahun Lahir</th>
                                        <th>Pekerjaan</th>
                                        <th>Tipe</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1;?>
                                {{-- @foreach($data as $key => $v)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <a class="btn btn-outline-info" href="{{ url('siswa/view/'.$v->id)  }}"><i class="fa fa-eye"></i> View</a>

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
                                @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection