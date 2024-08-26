<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('adminlogout')); ?>" class="nav-link">Logout</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            
            <div class="navbar-search-block">
                <form method="get" enctype="multipart/form-data" action="<?php echo e(route('managerdashboard')); ?>"
                    class="form-inline">
                    <?php echo csrf_field(); ?>
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search"
                            placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            
                        </div>
                    </div>
                </form>
            </div>

        </li>

        <!-- Messages Dropdown Menu -->
        
        
        <!-- Message End -->
        
        <!-- Message End -->
        
        
        
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\project3\resources\views/admin/layout/navbar.blade.php ENDPATH**/ ?>