@extends('admin.layout.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit State</title>

        <!-- Google Font: Source Sans Pro -->
        @include('admin.layout.style')
        <style>
            .back {
                position: absolute;
                bottom: 1px;
                right: 5px;
                padding: 0%;
            }
        </style>
    </head>

    <body class="hold-transition register-page">
        <div class="content-wrapper">
            <div class="register-box">
                <div class="register-logo">
                    <!-- Optional Logo Here -->
                </div>

                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Add City</p>

                        <form action="{{ route('cityupload') }}" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="City">
                            </div>
                            <div class="form-group">
                                <select id="state" name="state">
                                    <option value="" disabled selected>Select your state</option>
                                    @foreach ($state as $data)
                                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status:</label><br>
                                <input type="radio" id="status_active" name="status" value="active">
                                <label for="status_active">Active</label><br>

                                <input type="radio" id="status_deactive" name="status" value="deactive">
                                <label for="status_deactive">Deactive</label>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">ADD City</button>
                            </div>
                        </form>
                        <div class="back">

                            <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4">Back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- jQuery -->
        @include('admin.layout.script')
    </body>

    </html>
@endsection
