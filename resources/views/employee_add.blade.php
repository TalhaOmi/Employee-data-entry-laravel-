@extends('master')
@section('title')
   Add Employee
@endsection
@section('top_heading')
   Add Employee
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
              <form method="POST" action="{{ url('save-employee')}}">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="employeeID">Employee ID</label>
                    <input type="text" class="form-control" name="employeeID" id="employeeID" placeholder="Enter ID">
                  </div>
                  <div class="form-group">
                    <label for="employeename">Employee Name</label>
                    <input type="text" class="form-control" name="employeename" id="employeename" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="positionname">Position Name</label>
                    <input type="text" class="form-control"  name="positionname" id="positionname" placeholder="Enter Position">
                  </div>
                  <div class="form-group">
                    <label for="number">Mobile Number</label>
                    <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob">
                  </div>
                  <div class="form-group">
                    <label for="fatherename">Father's Name</label>
                    <input type="text" class="form-control" name="fatherename" id="fatherename" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="motherename">Mother's Name</label>
                    <input type="text" class="form-control" name="motherename" id="motherename" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="presentaddress">Present Address</label>
                    <input type="text" class="form-control" name="presentaddress" id="presentaddress" placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="permanentaddress">Permanent Address</label>
                    <input type="text" class="form-control" name="permanentaddress" id="permanentaddress" placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="nid">NID</label>
                    <input type="text" class="form-control" name="nid" id="nid" placeholder="Enter NID">
                  </div>
                  <div class="form-group">
                    <label for="bankname">Bank Name</label>
                    <input type="text" class="form-control" name="bankname" id="bankname" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="acno">A/C No.</label>
                    <input type="text" class="form-control" name="acno" id="acno" placeholder="Enter A/C No.">
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

@endsection