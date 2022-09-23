@extends('layouts.back.master')
@section('content')
    <div class="content">
        @if (session('msg'))
            <h2 class="alert alert-success">{{ session('msg') }}</h2>
        @endif
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Create State & City</h3>
                        <a href="javascript:void(0);"> </a>
                    </div>
                </div>
                <div class="card card-primary">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>State Name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="State Name" name="state">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>City Name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="City Name" name="city">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                        <!-- /.card-body -->


                    </form>
                </div>

            </div>
        @endsection
