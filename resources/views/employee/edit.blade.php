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

        .container {
            width: 600px;
            height: auto;
        }
    </style>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="container">

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Edit Employee</p>

                    <form action="{{ route('updateemployee', $data->id) }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name"
                                    value="{{ old('name', $data->name ?? '') }}" class="form-control"
                                    placeholder="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email"
                                    value="{{ old('email', $data->email ?? '') }}" class="form-control"
                                    placeholder="email">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="age">Age:</label>
                                <input type="text" id="age" name="age"
                                    value="{{ old('age', $data->age ?? '') }}" class="form-control" placeholder="age">
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <label for="gender">Gender:</label>
                                <select id="gender" name="gender" required>
                                    <option value="">Select...</option>
                                    <option value="male"
                                        {{ old('gender', $data->gender ?? '') == 'male' ? 'selected' : '' }}>
                                        Male
                                    </option>
                                    <option value="female"
                                        {{ old('gender', $data->gender ?? '') == 'female' ? 'selected' : '' }}>Female
                                    </option>
                                    <option value="other"
                                        {{ old('gender', $data->gender ?? '') == 'other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="address">Address:</label>
                                <input type="text" id="address" value="{{ old('address', $data->address ?? '') }}"
                                    name="address" class="form-control" placeholder="address">
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <label for="department">Department:</label>
                                <select id="department" name="department" required>
                                    <option value="">Select...</option>
                                    <option value="development"
                                        {{ old('department', $data->department ?? '') == 'development' ? 'selected' : '' }}>
                                        Development</option>
                                    <option
                                        value="sales"{{ old('department', $data->department ?? '') == 'sales' ? 'selected' : '' }}>
                                        Sales</option>
                                    <option
                                        value="marketing"{{ old('department', $data->department ?? '') == 'marketing' ? 'selected' : '' }}>
                                        Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-12">
                                <label for="image">Image:</label>
                                <input type="file" id="image" name="image"
                                    value="{{ old('image', $data->image ?? '') }}" class="form-control"
                                    placeholder="image">
                                <img src="{{ asset('employees/' . $data->image) }}" height="100px" width="100px"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-12">
                                <label>Status:</label><br>
                                <input type="radio" id="status_active" name="status" value="active"
                                    {{ old('status', $data->status ?? '') == 'active' ? 'checked' : '' }}>
                                <label for="status_active">Active</label><br>

                                <input type="radio" id="status_deactive" name="status" value="deactive"
                                    {{ old('status', $data->status ?? '') == 'deactive' ? 'checked' : '' }}>
                                <label for="status_deactive">Deactive</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>


                        <div class="back  ">

                            <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4">Back</a>
                        </div>
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
