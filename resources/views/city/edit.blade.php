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
    <div class="register-box">
        <div class="register-logo">
            <!-- Optional Logo Here -->
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Edit City</p>

                <form action="{{ route('updatecity', $data->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">

                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" id="city" name="city" value="{{ old('city', $data->name ?? '') }}"
                            class="form-control" placeholder="City">
                    </div>
                    <div class="form-group">
                        <select id="state" name="state">

                            <option value="" disabled selected>Select your state</option>
                            @foreach ($state as $val)
                                <option value="{{ $val->name }}">{{ $val->name }}</option>
                            @endforeach


                        </select>
                        <div class="form-group">
                            <label>Status:</label><br>
                            <input type="radio" id="status_active" name="status" value="active"
                                {{ old('status', $data->status ?? '') == 'active' ? 'checked' : '' }}>
                            <label for="status_active">Active</label><br>

                            <input type="radio" id="status_deactive" name="status" value="deactive"
                                {{ old('status', $data->status ?? '') == 'deactive' ? 'checked' : '' }}>
                            <label for="status_deactive">Deactive</label>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                        <div class="back">

                            <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4">Back</a>
                        </div>

                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    @include('admin.layout.script')
</body>

</html>
