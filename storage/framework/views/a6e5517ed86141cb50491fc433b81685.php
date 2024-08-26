<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit State</title>

    <?php echo $__env->make('admin.layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Google Font: Source Sans Pro -->
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
                <p class="login-box-msg">Edit State</p>

                <form action="<?php echo e(route('updatestate', $data->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">

                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" id="state" name="state"
                            value="<?php echo e(old('state', $data->name ?? '')); ?>" class="form-control" placeholder="State">
                    </div>

                    <div class="form-group">
                        <label>Status:</label><br>
                        <input type="radio" id="status_active" name="status" value="active"
                            <?php echo e(old('status', $data->status ?? '') == 'active' ? 'checked' : ''); ?>>
                        <label for="status_active">Active</label><br>

                        <input type="radio" id="status_deactive" name="status" value="deactive"
                            <?php echo e(old('status', $data->status ?? '') == 'deactive' ? 'checked' : ''); ?>>
                        <label for="status_deactive">Deactive</label>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                    <div class="back">

                        <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <?php echo $__env->make('admin.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project3\resources\views/state/edit.blade.php ENDPATH**/ ?>