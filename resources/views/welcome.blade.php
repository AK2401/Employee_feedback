<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Employee Register !</title>
</head>

<body>
    <section class="pb-4" style="hight=50px">
        <div class="bg-white border rounded-5">

            <section class="w-100  px-4 py-3 bg-dark" style="border-radius: .5rem .5rem 0 0;">
                <style>
                    .card-registration .select-input.form-control[readonly]:not([disabled]) {
                        font-size: 1rem;
                        line-height: 2.15;
                        padding-left: .75em;
                        padding-right: .75em;
                    }

                    .card-registration .select-arrow {
                        top: 13px;
                    }
                </style>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm btn btn-success text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm  mb-3 btn btn-success text-gray-700 dark:text-gray-500 underline"> Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm mb-3 btn btn-danger text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                            <b class="text-white mb-3"> Only Admin Can Login Here ...!</b>
                        @endauth
                    </div>
                @endif
                <div class="row">

                    <div class="col">
                        <div class="card card-registration">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;">
                                </div>

                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h4 class="mb-5 text-uppercase">Employee registration form</h4>
                                        <form action="/employee/create" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m"
                                                            style="margin-left: 0px;">First name</label>
                                                        <input type="text" id="first_name" name="first_name"
                                                            placeholder="Enter First Name"
                                                            class="form-control form-control-lg" required>

                                                        <div class="form-notch">
                                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                                            <div class="form-notch-middle" style="width: 68.8px;"></div>
                                                            <div class="form-notch-trailing"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n"
                                                            style="margin-left: 0px;">Last name</label>
                                                        <input type="text" id="last_name" name="last_name"
                                                            placeholder="Enter Last Name"
                                                            class="form-control form-control-lg" required>

                                                        <div class="form-notch">
                                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                                            <div class="form-notch-middle" style="width: 68px;"></div>
                                                            <div class="form-notch-trailing"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example8"
                                                    style="margin-left: 0px;">Address</label>
                                                <input type="text" id="address" name="address"
                                                    placeholder="Enter Address" class="form-control form-control-lg"
                                                    required>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 55.2px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>

                                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                <h6 class="mb-0 me-4">Gender: </h6>
                                                &nbsp;&nbsp; &nbsp;&nbsp;
                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                    &nbsp;&nbsp;
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        checked id="gender" value="1">
                                                </div>

                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <label class="form-check-label" for="gender">Female</label>
                                                    &nbsp;&nbsp;
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender" value="2">
                                                </div>



                                                <div class="form-check form-check-inline mb-0">
                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                    &nbsp;&nbsp;
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender" value="3">

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-4">

                                                    <div id="select-wrapper-274958" class="select-wrapper">
                                                        <div class="form-outline">

                                                            <div class="form-label select-fake-value">State</div>
                                                        </div>
                                                        {{-- <select class="select select-initialized form-control"
                                                            name="state" required>
                                                            <option value="1">Select State</option>
                                                            <option value="2">Maharashtra</option>
                                                            <option value="3">Karnataka</option>
                                                            <option value="4">Gujarat </option>
                                                        </select> --}}
                                                        <select data-width="100%" class="form-control select2"
                                                            name="state" required>
                                                            <option value="" selected> Selected State</option>
                                                            @foreach ($data as $state)
                                                                <option value="{{ $state->state }}">
                                                                    {{ $state->state }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4">

                                                    <div id="select-wrapper-740594" class="select-wrapper">
                                                        <div class="form-outline">
                                                            <div class="form-label select-fake-value">City</div>
                                                        </div>
                                                        {{-- <select class="select select-initialized form-control"
                                                            name="city" required>
                                                            <option value="1">Select City</option>
                                                            <option value="2">Pune</option>
                                                            <option value="3">Aurangabad</option>
                                                            <option value="4">Mumbai</option>
                                                        </select> --}}
                                                        <select data-width="100%" class="form-control select2"
                                                            name="city" required>
                                                            <option value="" selected> Selected City</option>
                                                            @foreach ($data as $city)
                                                                <option value="{{ $city->city }}">
                                                                    {{ $city->city }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example90"
                                                    style="margin-left: 0px;">Pincode</label>
                                                <input type="number" id="pincode" name="pincode"
                                                    placeholder="Enter Pin-Code" class="form-control form-control-lg">

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 54.4px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example99"
                                                    style="margin-left: 0px;">Deparment</label>
                                                <input type="text" id="deparment" name="deparment"
                                                    placeholder="Enter  Which Deparment"
                                                    class="form-control form-control-lg" required>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 48.8px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example99"
                                                    style="margin-left: 0px;">Mobile Number</label>
                                                <input type="number" id="mob_no" name="mob_no"
                                                    placeholder="Mobile Number" class="form-control form-control-lg"
                                                    required>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 48.8px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example97"
                                                    style="margin-left: 0px;">Email ID</label>
                                                <input type="email" id="email" name="email"
                                                    placeholder="Enter Mail" class="form-control form-control-lg"
                                                    required>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 54.4px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                            <div class="form-check mb-3"><input class="form-check-input"
                                                    type="checkbox" value="1" id="check" name="satus"
                                                    required><label class="form-check-label" for="check">Accept all
                                                    the <a href="#">Terms &
                                                        Conditions</a></label></div>
                                            <div class="text-center d-flex mt-4 pt-2">
                                                <button type="submit"
                                                    class="btn btn-primary">Submit</button>&nbsp;&nbsp;
                                                <button type="reset" class="btn btn-success">Reset</button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>
