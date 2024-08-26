<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit State</title>

    <!-- Google Font: Source Sans Pro -->
    <?php echo $__env->make('admin.layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

                    <form action="<?php echo e(route('updateemployee', $data->id)); ?>" enctype="multipart/form-data"
                        method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name"
                                    value="<?php echo e(old('name', $data->name ?? '')); ?>" class="form-control"
                                    placeholder="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email"
                                    value="<?php echo e(old('email', $data->email ?? '')); ?>" class="form-control"
                                    placeholder="email">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="age">Age:</label>
                                <input type="text" id="age" name="age"
                                    value="<?php echo e(old('age', $data->age ?? '')); ?>" class="form-control" placeholder="age">
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <label for="gender">Gender:</label>
                                <select id="gender" name="gender" required>
                                    <option value="">Select...</option>
                                    <option value="male"
                                        <?php echo e(old('gender', $data->gender ?? '') == 'male' ? 'selected' : ''); ?>>
                                        Male
                                    </option>
                                    <option value="female"
                                        <?php echo e(old('gender', $data->gender ?? '') == 'female' ? 'selected' : ''); ?>>Female
                                    </option>
                                    <option value="other"
                                        <?php echo e(old('gender', $data->gender ?? '') == 'other' ? 'selected' : ''); ?>>Other
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="address">Address:</label>
                                <input type="text" id="address" value="<?php echo e(old('address', $data->address ?? '')); ?>"
                                    name="address" class="form-control" placeholder="address">
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <label for="department">Department:</label>
                                <select id="department" name="department" required>
                                    <option value="">Select...</option>
                                    <option value="development"
                                        <?php echo e(old('department', $data->department ?? '') == 'development' ? 'selected' : ''); ?>>
                                        Development</option>
                                    <option
                                        value="sales"<?php echo e(old('department', $data->department ?? '') == 'sales' ? 'selected' : ''); ?>>
                                        Sales</option>
                                    <option
                                        value="marketing"<?php echo e(old('department', $data->department ?? '') == 'marketing' ? 'selected' : ''); ?>>
                                        Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-12">
                                <label for="image">Image:</label>
                                <input type="file" id="image" name="image"
                                    value="<?php echo e(old('image', $data->image ?? '')); ?>" class="form-control"
                                    placeholder="image">
                                <img src="<?php echo e(asset('employees/' . $data->image)); ?>" height="100px" width="100px"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-md-12">
                                <label>Status:</label><br>
                                <input type="radio" id="status_active" name="status" value="active"
                                    <?php echo e(old('status', $data->status ?? '') == 'active' ? 'checked' : ''); ?>>
                                <label for="status_active">Active</label><br>

                                <input type="radio" id="status_deactive" name="status" value="deactive"
                                    <?php echo e(old('status', $data->status ?? '') == 'deactive' ? 'checked' : ''); ?>>
                                <label for="status_deactive">Deactive</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>


                        <div class="back  ">

                            <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery -->
    <?php echo $__env->make('admin.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project3\resources\views/employee/edit.blade.php ENDPATH**/ ?>