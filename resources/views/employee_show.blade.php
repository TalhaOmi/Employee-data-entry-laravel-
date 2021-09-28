@extends('master')
@section('title')
   View Employee
@endsection
@section('top_heading')
   View Employee
@endsection


@section('content')

<div class="row">
          <div class="col-lg-12">

          @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('employee-show')}}/{{$employee_info->id }}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="employeeID">Employee ID</label>
                    <input type="text" class="form-control" name="employeeID" id="employeeID" placeholder="Enter ID" value="{{ $employee_info->employee_id}}">
                  </div>
                  <div class="form-group">
                    <label for="employeename">Employee Name</label>
                    <input type="text" class="form-control" name="employeename" id="employeename" placeholder="Enter Name" value="{{ $employee_info->employee_name}}">
                  </div>
                  <div class="form-group">
                    <label for="positionname">Position Name</label>
                    <input type="text" class="form-control"  name="positionname" id="positionname" placeholder="Enter Position" value="{{ $employee_info->position_name}}">
                  </div>
                  <div class="form-group">
                    <label for="number">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number" value="{{ $employee_info->mobile_no}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="{{ $employee_info->email}}">
                  </div>
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" value="{{ $employee_info->dob}}">
                  </div>
                  <div class="form-group">
                    <label for="fatherename">Father's Name</label>
                    <input type="text" class="form-control" name="fatherename" id="fatherename" placeholder="Enter Name" value="{{ $employee_info->father_name}}">
                  </div>
                  <div class="form-group">
                    <label for="motherename">Mother's Name</label>
                    <input type="text" class="form-control" name="motherename" id="motherename" placeholder="Enter Name" value="{{ $employee_info->mother_name}}">
                  </div>
                  <div class="form-group">
                    <label for="presentaddress">Present Address</label>
                    <input type="text" class="form-control" name="presentaddress" id="presentaddress" placeholder="Enter Address" value="{{ $employee_info->present_address}}">
                  </div>
                  <div class="form-group">
                    <label for="permanentaddress">Permanent Address</label>
                    <input type="text" class="form-control" name="permanentaddress" id="permanentaddress" placeholder="Enter Address" value="{{ $employee_info->permanent_address}}">
                  </div>
                  <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" name="nid" id="nid" placeholder="Enter NID" value="{{ $employee_info->nid}}">
                  </div>
                  <div class="form-group">
                    <label for="bankname">Bank Name</label>
                    <input type="text" class="form-control" name="bankname" id="bankname" placeholder="Enter Name" value="{{ $employee_info->bank_name}}">
                  </div>
                  <div class="form-group">
                    <label for="acno">A/C No.</label>
                    <input type="text" class="form-control" name="acno" id="acno" placeholder="Enter A/C No."  value=c">
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                      <option value="{{ $employee_info->status}}" <?php if($employee_info->status==1){ echo "selected";}?>>Active</option>
                      <option value="{{ $employee_info->status}} <?php if($employee_info->status==0){ echo "selected";}?>">Deactive</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

@endsection