<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\EmployeeInforamtion;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function dashboard(){
         
         return view('master');
     }
    public function index()
    {
        $employee_info = DB::table("employee_information")->get();

        return view('employee_list', compact('employee_info'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee_data= [

            "employee_id"       => $request->employeeID,
            "employee_name"     => $request->employeename,
            "position_name"     => $request->positionname,
            "mobile_no"         => $request->mobile_number,
            "email"             => $request->email,
            "dob"               => $request->dob,
            "father_name"       => $request->fatherename,
            "mother_name"       => $request->motherename,
            "present_address"   => $request->presentaddress,
            "permanent_address" => $request->permanentaddress,
            "nid"               => $request->nid,
            "bank_name"         => $request->bankname,
            "ac_no"             => $request->acno,
            "status"            => $request->status,
        ];

        //  echo "<pre>";
        //  print_r($employee_data);exit;

         $insert = DB::table('employee_information')->insert($employee_data);

         return redirect()->back()->with('message', 'Successfully Employee Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $employee_data= [

            "employee_id"       => $request->employeeID,
            "employee_name"     => $request->employeename,
            "position_name"     => $request->positionname,
            "mobile_no"         => $request->mobile_number,
            "email"             => $request->email,
            "dob"               => $request->dob,
            "father_name"       => $request->fatherename,
            "mother_name"       => $request->motherename,
            "present_address"   => $request->presentaddress,
            "permanent_address" => $request->permanentaddress,
            "nid"               => $request->nid,
            "bank_name"         => $request->bankname,
            "ac_no"             => $request->acno,
            "status"            => $request->status,
        ];

         $insert = DB::table('employee_information')->where('id', $id)->show($employee_data);

         echo "<pre>";
         print_r($employee_data);exit;

         //return redirect()->back()->with('message', 'Successfully Employee Added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee_info = DB::table("employee_information")->where('id', $id)->first();



        return view('employee_update' , compact('employee_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee_data= [

            "employee_id"       => $request->employeeID,
            "employee_name"     => $request->employeename,
            "position_name"     => $request->positionname,
            "mobile_no"         => $request->mobile_number,
            "email"             => $request->email,
            "dob"               => $request->dob,
            "father_name"       => $request->fatherename,
            "mother_name"       => $request->motherename,
            "present_address"   => $request->presentaddress,
            "permanent_address" => $request->permanentaddress,
            "nid"               => $request->nid,
            "bank_name"         => $request->bankname,
            "ac_no"             => $request->acno,
            "status"            => $request->status,
        ];

        //  echo "<pre>";
        //  print_r($employee_data);exit;

         $insert = DB::table('employee_information')->where('id', $id)->update($employee_data);

         return redirect()->back()->with('message', 'Successfully Employee Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insert = DB::table('employee_information')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Successfully Employee Deleted!');
    }
}
