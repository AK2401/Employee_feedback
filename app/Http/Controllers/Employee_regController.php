<?php

namespace App\Http\Controllers;

use App\Models\tbl_employee_reg;
use App\Models\tbl_state_city;
use Illuminate\Http\Request;

class Employee_regController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbl_employee_reg::all();
        return view('admin.employee_reg.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = tbl_state_city::latest()->get();
        return view("welcome", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $data = new tbl_employee_reg();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->state = $request->state;
        $data->city = $request->city;
        $data->pincode = $request->pincode;
        $data->deparment = $request->deparment;
        $data->mob_no = $request->mob_no;
        $data->email = $request->email;
        $data->satus = $request->satus;
        $data->save();
        return redirect()->back()->with("msg", "Employee Register successfully !!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tbl_employee_reg::find($id);
        $data->delete();
        return redirect()->back()->with("msg", "Data Delete successfully");
    }
}
