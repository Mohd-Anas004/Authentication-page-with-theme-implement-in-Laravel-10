<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>

    <!-- Google Font: Source Sans Pro -->
    <?php echo $__env->make('admin.layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .container {
            width: 600px;
            height: auto;
        }
    </style>
</head>


<div class="container mt-5">
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Add Employee</p>

            <form action="<?php echo e(route('employeeupload')); ?>" enctype="multipart/form-data" method="post">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required class="form-control"
                            placeholder="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required class="form-control"
                            placeholder="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="age">Age:</label>
                        <input type="text" id="age" name="age" required class="form-control"
                            placeholder="age">
                    </div>
                    <div class="form-group col-md-6 mt-4">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required class="form-control"
                            placeholder="address">
                    </div>
                    <div class="form-group col-md-6 mt-4">
                        <label for="department">Department:</label>
                        <select id="department" name="department" required>
                            <option value="">Select...</option>
                            <option value="development">Development</option>
                            <option value="sales">Sales</option>
                            <option value="marketing">Marketing</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" class="form-control" placeholder="image">
                </div>
                <div class="form-group col-md-12">
                    <label>Status:</label><br>
                    <input type="radio" id="status_active" name="status" value="active">
                    <label for="status_active">Active</label><br>

                    <input type="radio" id="status_deactive" name="status" value="deactive">
                    <label for="status_deactive">Deactive</label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Add </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<?php echo $__env->make('admin.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project3\resources\views/employee/create.blade.php ENDPATH**/ ?>