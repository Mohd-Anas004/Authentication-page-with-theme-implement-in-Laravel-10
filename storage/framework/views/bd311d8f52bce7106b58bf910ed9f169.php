

<?php $__env->startSection('content'); ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="content-wrapper">

            <a href="<?php echo e(route('citycreate')); ?>" class="btn btn-success float-start mb-4">Add City</a>
            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <tr>

                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    


                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($val->name); ?></td>
                            <td><?php echo e($val->state); ?></td>
                            <td><?php echo e($val->status); ?></td>


                            <td>
                                <a href="<?php echo e(route('editcity', $val->id)); ?>"
                                    class="btn btn-success btn-hover btn-sm text-white">Edit</a>
                                <a href="<?php echo e(route('deletecity', $val->id)); ?>"
                                    class="btn btn-danger btn-hover btn-sm text-white">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </tbody>
                <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
            </table>
        </div>
        <script src="https://kit.fontawesome.com/bf3e0f15c6.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project3\resources\views/city/citydashboard.blade.php ENDPATH**/ ?>