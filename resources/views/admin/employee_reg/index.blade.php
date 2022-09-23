@extends('layouts.back.master')
@section('content')
    <div class="content">
        @if (session('msg'))
            <h2 class="alert alert-success">{{ session('msg') }}</h2>
        @endif

        <div class="card-header text-right">
            <h3 class="card-title mt-1"><b>View Employee Register Data</b></h3>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">Sr.No</th>
                            <th style="width: 40px">Emp Name</th>
                            <th style="width: 60px">Emp Address</th>
                            <th style="width: 60px">State</th>
                            <th style="width: 60px">City</th>
                            <th style="width: 60px">Gender</th>
                            <th style="width: 60px">Pincode</th>
                            <th style="width: 60px">Mobile No</th>
                            <th style="width: 60px">Deparment</th>
                            <th style="width: 60px">Email ID</th>
                            <th style="width: 60px">Delete</th>

                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($data as $key => $list)
                            <tr>
                                <td> {{ $key + 1 }}</td>
                                <td>{{ $list->first_name }} {{ $list->last_name }}</td>
                                <td>{{ $list->address }}</td>
                                <td>{{ $list->state }}</td>
                                <td>{{ $list->city }}</td>

                                <td>
                                    @if ($list->gender == 1)
                                        Male
                                    @elseif($list->gender == 2)
                                        Female
                                    @elseif($list->gender == 3)
                                        Other
                                    @endif

                                </td>

                                <td>{{ $list->pincode }}</td>
                                <td>{{ $list->mob_no }}</td>
                                <td>{{ $list->deparment }}</td>
                                <td>{{ $list->email }}</td>
                                <td><a href="/employee/delete/{{ $list->emp_id }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach



                </table>
            @endsection
