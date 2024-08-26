

<?php $__env->startSection('content'); ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>State</title>

    </head>

    <body>
        <div class="content-wrapper">
            <a href="<?php echo e(route('import')); ?>" class="btn btn-success float-end mb-4">Import</a>
            <a href="<?php echo e(route('statecreate')); ?>" class="btn btn-success float-start mb-4">Add State</a>
            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <tr>

                        <th scope="col">State</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    


                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($val->name); ?></td>
                            <td><?php echo e($val->status); ?></td>
                            <td>
                                <a href="<?php echo e(route('editstate', $val->id)); ?>"
                                    class="btn btn-success btn-hover btn-sm text-white">Edit</a>
                                <a href="<?php echo e(route('deletestate', $val->id)); ?>"
                                    class="btn btn-danger btn-hover btn-sm text-white">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </tbody>
                <a href="<?php echo e(route('view')); ?>" class="btn btn-danger float-center  mb-4">Back</a>
            </table>
        </div>

    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project3\resources\views/state/statedashboard.blade.php ENDPATH**/ ?>