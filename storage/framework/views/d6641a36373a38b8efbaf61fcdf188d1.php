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

        .card {
            width: 600px;
            height: auto;
        }

        .container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <p class="login-box-msg">Add Manager</p>

                <form action="<?php echo e(route('managerupload')); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required
                                placeholder="Name">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required
                                placeholder="Email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="age">Age:</label>
                            <input type="text" id="age" name="age" class="form-control" required
                                placeholder="Age">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Gender:</label><br>
                            <div class="form-check">
                                <input type="radio" id="male" name="gender" value="male"
                                    class="form-check-input" required>
                                <label for="male" class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="female" name="gender" value="female"
                                    class="form-check-input" required>
                                <label for="female" class="form-check-label">Female</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="other" name="gender" value="other"
                                    class="form-check-input" required>
                                <label for="other" class="form-check-label">Other</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" class="form-control" required
                                placeholder="Address">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="image">Image:</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>

                        <div class="col-md-12 form-group">
                            <label>Status:</label><br>
                            <div class="form-check">
                                <input type="radio" id="status_active" name="status" value="active"
                                    class="form-check-input" required>
                                <label for="status_active" class="form-check-label">Active</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="status_deactive" name="status" value="deactive"
                                    class="form-check-input" required>
                                <label for="status_deactive" class="form-check-label">Deactive</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                        <div class="col-md-12  mt-3">
                            <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-end"><i
                                    class="fa-solid fa-arrow-left"></i>Back</a>
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
<?php /**PATH C:\xampp\htdocs\project3\resources\views/manager/create.blade.php ENDPATH**/ ?>