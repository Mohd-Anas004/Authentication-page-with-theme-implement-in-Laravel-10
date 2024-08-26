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

            <form action="<?php echo e(route('updatemanager', $data->id)); ?>" enctype="multipart/form-data" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="manager">Name:</label>
                        <input type="text" id="name" value="<?php echo e(old('name', $data->name)); ?>" name="name"
                            class="form-control" placeholder="name">

                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" id="email" value="<?php echo e(old('email', $data->email)); ?>" name="email"
                            class="form-control" placeholder="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="age">Age:</label>
                        <input type="text" id="age" value="<?php echo e(old('age', $data->age)); ?>" name="age"
                            class="form-control" placeholder="age">

                    </div>

                    <div class="form-group col-md-6">
                        <label>Gender:</label><br>
                        <input type="radio" id="male" name="gender" value="male"
                            <?php echo e(old('gender', $data->gender ?? '') == 'male' ? 'checked' : ''); ?>>
                        <label for="male">Male</label><br>

                        <input type="radio" id="female" name="gender" value="female"
                            <?php echo e(old('gender', $data->gender ?? '') == 'female' ? 'checked' : ''); ?>>
                        <label for="female">Female</label>

                        <input type="radio" id="other" name="gender" value="other"
                            <?php echo e(old('gender', $data->gender ?? '') == 'other' ? 'checked' : ''); ?>>
                        <label for="other">Other</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="address">Address:</label>
                        <input type="text" id="address" value="<?php echo e(old('address', $data->address)); ?>" name="address"
                            class="form-control" placeholder="address">

                    </div>

                    <div class="form-group col-md-12">
                        <label for="image">Image:</label>
                        <input type="file" id="image" value="<?php echo e(old('image', $data->image)); ?>" name="image"
                            class="form-control" placeholder="image">
                        <img src="<?php echo e(asset('images/' . $data->image)); ?>" height="100px" width="100px"
                            alt="Image is not available">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Status:</label><br>
                        <input type="radio" id="status_active" name="status" value="active"
                            <?php echo e(old('status', $data->status ?? '') == 'active' ? 'checked' : ''); ?>>
                        <label for="status_active">Active</label><br>

                        <input type="radio" id="status_deactive" name="status" value="deactive"
                            <?php echo e(old('status', $data->status ?? '') == 'deactive' ? 'checked' : ''); ?>>
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

                        <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4"><i
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
<?php /**PATH C:\xampp\htdocs\project3\resources\views/manager/edit.blade.php ENDPATH**/ ?>