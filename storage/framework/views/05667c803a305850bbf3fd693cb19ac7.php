<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dashboard </title>

    <!-- Google Font: Source Sans Pro -->
    <?php $__env->startSection('style'); ?>
        <?php echo $__env->make('admin.layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </head>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                    width="60">
            </div>

            <!-- Navbar -->
            <?php echo $__env->make('admin.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Content Wrapper. Contains page content -->

            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.content -->

            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <?php echo $__env->make('admin.layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

    </html>
<?php /**PATH C:\xampp\htdocs\project3\resources\views/admin/layout/app.blade.php ENDPATH**/ ?>