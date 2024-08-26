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
            display: flex;
            justify-content: center;
        }

        .card {
            width: 600px;
            height: auto;
        }
    </style>
</head>



<div class="container mt-5">
    <div class="card">
        <div class="card-body ">
            <p class="login-box-msg">Edit Manager</p>

            <form action="{{ route('updatemanager', $data->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="manager">Name:</label>
                        <input type="text" id="name" value="{{ old('name', $data->name) }}" name="name"
                            class="form-control" placeholder="name">

                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" id="email" value="{{ old('email', $data->email) }}" name="email"
                            class="form-control" placeholder="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="age">Age:</label>
                        <input type="text" id="age" value="{{ old('age', $data->age) }}" name="age"
                            class="form-control" placeholder="age">

                    </div>

                    <div class="form-group col-md-6">
                        <label>Gender:</label><br>
                        <input type="radio" id="male" name="gender" value="male"
                            {{ old('gender', $data->gender ?? '') == 'male' ? 'checked' : '' }}>
                        <label for="male">Male</label><br>

                        <input type="radio" id="female" name="gender" value="female"
                            {{ old('gender', $data->gender ?? '') == 'female' ? 'checked' : '' }}>
                        <label for="female">Female</label>

                        <input type="radio" id="other" name="gender" value="other"
                            {{ old('gender', $data->gender ?? '') == 'other' ? 'checked' : '' }}>
                        <label for="other">Other</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="address">Address:</label>
                        <input type="text" id="address" value="{{ old('address', $data->address) }}" name="address"
                            class="form-control" placeholder="address">

                    </div>

                    <div class="form-group col-md-12">
                        <label for="image">Image:</label>
                        <input type="file" id="image" value="{{ old('image', $data->image) }}" name="image"
                            class="form-control" placeholder="image">
                        <img src="{{ asset('images/' . $data->image) }}" height="100px" width="100px"
                            alt="Image is not available">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Status:</label><br>
                        <input type="radio" id="status_active" name="status" value="active"
                            {{ old('status', $data->status ?? '') == 'active' ? 'checked' : '' }}>
                        <label for="status_active">Active</label><br>

                        <input type="radio" id="status_deactive" name="status" value="deactive"
                            {{ old('status', $data->status ?? '') == 'deactive' ? 'checked' : '' }}>
                        <label for="status_deactive">Deactive</label>

                    </div>
                </div>
                <div class="  update row">
                    <div class=" col-md-12">
                        <button type="submit" id="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2 ">

                        <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4"><i
                                class="fa-solid fa-arrow-left"></i>Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- jQuery -->
@include('admin.layout.script')
</body>

</html>
