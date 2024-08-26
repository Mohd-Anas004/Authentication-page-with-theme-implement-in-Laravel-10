
<?php $__env->startSection('content'); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit State</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
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

                        <form action="<?php echo e(route('cityupload')); ?>" method="post">
                            <?php echo csrf_field(); ?>


                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="City">
                            </div>
                            <div class="form-group">
                                <select id="state" name="state">
                                    <option value="" disabled selected>Select your state</option>
                                    <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

                            <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- jQuery -->
        <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project3\resources\views/city/create.blade.php ENDPATH**/ ?>