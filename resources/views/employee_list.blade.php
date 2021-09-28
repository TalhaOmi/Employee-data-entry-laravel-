@extends('master')
@section('title')
    Employee List
@endsection
@section('top_heading')
    Employee List
@endsection


@section('content')

<div class="row">
  <div class="col-lg-12">

  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif

    <!-- /.card -->
    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">DataTable</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                              <div id="example1_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                          <thead>
                          <tr role="row">
                          <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Employee Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Position(s)</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Mobile Number</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Email</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @php $i=1;  @endphp
                            @foreach($employee_info as $data)
                          <tr>
                            <td>{{ $i++}}</td>
                            <td>{{$data->employee_id}}</td>
                            <td>{{$data->employee_name}}</td>
                            <td>{{$data->position_name}}</td>
                            <td>{{$data->mobile_no}}</td>
                            <td>{{$data->email}}</td>
                            <td><a href="{{ url('employee-show')}}/{{$data->id}}" class="btn btn-sm btn-secondary"> View </a> <a href="{{ url('employee-edit')}}/{{$data->id}}" class="btn btn-sm btn-info"> Edit </a> <a href="{{ url('employee-delete')}}/{{$data->id}}" class="btn btn-sm btn-danger"> Delete </a>
                          
                          </td>
                          </tr>

                          @endforeach
                         
                        </tbody>
                        </table>
                      </div>
                    </div>
                   
                    </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
  </div>
 </div>
        <!-- /.row -->

@endsection