
<?php $__env->startSection('content'); ?>
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

                        <form action="<?php echo e(route('stateupload')); ?>" method="post">
                            <?php echo csrf_field(); ?>


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

                                <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project3\resources\views/state/create.blade.php ENDPATH**/ ?>