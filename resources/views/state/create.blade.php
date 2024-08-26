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
                        <p class="login-box-msg">Add State</p>

                        <form action="{{ route('stateupload') }}" method="post">
                            @csrf


                            <div class="form-group">
                                <label for="state">State:</label>
                                <input type="text" id="state" name="state" class="form-control"
                                    placeholder="State">
                            </div>

                            <div class="form-group">
                                <label>Status:</label><br>
                                <input type="radio" id="status_active" name="status" value="active">
                                <label for="status_active">Active</label><br>

                                <input type="radio" id="status_deactive" name="status" value="deactive">
                                <label for="status_deactive">Deactive</label>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Add State</button>
                            </div>
                            <div class="back">

                                <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- jQuery -->

        @include('admin.layout.script')
    </body>

    </html>
@endsection
