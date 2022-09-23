@extends('layouts.back.master')
@section('content')
    <div class="content">
        @if (session('msg'))
            <h2 class="alert alert-success">{{ session('msg') }}</h2>
        @endif

        <div class="card-header text-right">
            <h3 class="card-title mt-1"><b>View State & City</b></h3>
            <a href="/admin/create" class="btn btn-primary mx-3"><i class="fa fa-plus" aria-hidden="true"></i> Add New
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
                            <th style="width: 40px">State Name</th>
                            <th style="width: 40px">City Author</th>
                            <th style="width: 60px">Update</th>
                            <th style="width: 60px">Delete</th>

                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($data as $key => $list)
                            <tr>
                                <td> {{ $key + 1 }}</td>
                                <td>{{ $list->state }}</td>
                                <td>{{ $list->city }}</td>
                                <td><a href="/admin/edit/{{ $list->state_city_id }}"
                                        class="btn btn-primary btn-sm">Update</a></td>
                                <td><a href="/admin/delete/{{ $list->state_city_id }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach



                </table>
            @endsection
