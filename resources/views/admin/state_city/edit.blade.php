@extends('layouts.back.master')
@section('content')
    <div class="content">
        @if (session('msg'))
            <h2 class="alert alert-success">{{ session('msg') }}</h2>
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Edit State & City</h3>
                                <a href="javascript:void(0);"> </a>
                                <a href="/admin/view" class="btn btn-info mx-3"><i class="fa fa-eye" aria-hidden="true"></i>
                                    View All</a>
                            </div>
                        </div>
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/update" method="post">
                                @csrf
                                <input type="hidden" name="state_city_id" value="{{ $data->state_city_id }} " />

                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>State Name</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="state"
                                                    value="{{ $data->state }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>City Name</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ $data->city }}">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                @endsection
