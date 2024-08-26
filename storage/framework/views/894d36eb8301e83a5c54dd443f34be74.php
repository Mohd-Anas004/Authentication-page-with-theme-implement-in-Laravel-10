

<?php $__env->startSection('content'); ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Managers</title>
        <?php echo $__env->make('admin.layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <style>
            .container {
                position: absolute;
                display: inline;
                flex-direction: row;
            }
        </style>
    </head>

    <body>
        <div class="content-wrapper">

            <a class="btn btn-danger text-black btn-hover float-end mb-2px" href="<?php echo e(route('employeedashboard')); ?>">
                <i class="fa-solid fa-arrow-left"></i>Back
            </a>
            <a href="<?php echo e(route('employeecreate')); ?>" class="btn btn-success m-2 btn-bg float-start text-black">
                <i class="fa-solid fa-user-plus"></i>Employee
            </a>
            <div class="container">
                <form action="<?php echo e(route('employeedashboard')); ?>" method="get">
                    <input type="search" name="search" id="search">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Department</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($message): ?>
                        <?php echo e($message); ?>

                    <?php endif; ?>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$key); ?></td>
                            <td><?php echo e($val->name); ?></td>
                            <td><?php echo e($val->email); ?></td>
                            <td><?php echo e($val->age); ?></td>
                            <td><?php echo e($val->gender); ?></td>
                            <td><?php echo e($val->address); ?></td>
                            <td><?php echo e($val->department); ?></td>
                            <td>
                                <img src="<?php echo e(asset('employees/' . $val->image)); ?>" height="100px" width="80px"
                                    alt="">
                            </td>
                            <td><?php echo e($val->status); ?></td>
                            <td>
                                <a class="btn btn-secondary btn-bg text-black" href="<?php echo e(url('employees/' . $val->image)); ?>"
                                    download>
                                    <i class="fa-solid fa-download"></i>
                                </a>

                                <a href="<?php echo e(route('editemployee', $val->id)); ?>"
                                    class="btn btn-success btn-hover btn-sm text-black">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                                <form action="<?php echo e(route('deleteemployee', $val->id)); ?>" method="POST"
                                    style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn employee btn-danger btn-hover btn-sm text-black">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form class="toggleForm" action="<?php echo e(route('updatestatus', $val->id)); ?>" method="POST"
                                    style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('POST'); ?>
                                    <button type="submit" class="btn btn-sm">
                                        <i class="statusIcon fa <?php echo e($val->status === 'active' ? 'fa-toggle-on' : 'fa-toggle-off'); ?>"
                                            style="font-size: 24px;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="row">
                <?php echo e($data->links('pagination::bootstrap-5')); ?>

            </div>
        </div>
        <?php echo $__env->make('admin.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script>
            $(document).ready(function() {
                // Handle delete action with SweetAlert
                $('.employee').on('click', function(e) {
                    e.preventDefault();

                    const form = $(this).closest('form');
                    const url = form.attr('action');

                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this record!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: url,
                                type: 'DELETE',
                                data: {
                                    _token: $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    swal({
                                        title: "Deleted!",
                                        text: response.success,
                                        icon: "success",
                                        buttons: "OK",
                                    }).then(() => {
                                        form.closest('tr').remove();
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error("Error deleting data:", xhr.responseText);
                                    swal("Oops!",
                                        "Something went wrong. Please try again later.",
                                        "error");
                                }
                            });
                        } else {
                            swal("Your record is safe!");
                        }
                    });
                });

                // Handle status toggle action with SweetAlert
                $('.toggleForm').on('submit', function(e) {
                    e.preventDefault();

                    var form = $(this);
                    var icon = form.find('.statusIcon');

                    $.ajax({
                        url: form.attr('action'),
                        method: 'POST',
                        data: form.serialize(),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status === 'active') {
                                icon.removeClass('fa-toggle-off').addClass('fa-toggle-on');
                                Swal.fire({
                                    title: 'Activated!',
                                    text: response.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            } else {
                                icon.removeClass('fa-toggle-on').addClass('fa-toggle-off');
                                Swal.fire({
                                    title: 'Deactivated!',
                                    text: response.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: 'Error!',
                                text: xhr.responseJSON?.error ||
                                    'Something went wrong. Please try again.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            });
        </script>
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project3\resources\views/employee/employeedashboard.blade.php ENDPATH**/ ?>