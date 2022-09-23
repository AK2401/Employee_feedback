<?php

namespace App\Http\Controllers;

use App\Models\tbl_state_city;
use Illuminate\Http\Request;

class State_CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tbl_state_city::all();
        return view('admin.state_city.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.state_city.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new tbl_state_city();
        $data->state = $request->state;
        $data->city = $request->city;
        $data->save();
        return redirect("/admin/view")->with("msg", "State And City Create successfully");
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
        $data = tbl_state_city::find($id);
        return view('admin.state_city.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = tbl_state_city::find($request->state_city_id);
        $data->state = $request->state;
        $data->city = $request->city;
        $data->save();
        return redirect("/admin/view")->with('msg', "State & City Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tbl_state_city::find($id);
        $data->delete();
        return redirect()->back()->with("msg", "State & City Delete successfully");
    }
}
