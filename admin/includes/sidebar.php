<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link <?=($page=='dashboard.php'?'active':'')?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?p=slideshow" class="nav-item nav-link <?=($page=='slideshow.php'?'active':'')?>"><i class="fa fa-chart-bar me-2"></i>Slideshow</a>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?p=product" class="nav-item nav-link <?=($page=='product.php'?'active':'')?>"><i class="fa fa-box me-2"></i>Product</a>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?p=category" class="nav-item nav-link <?=($page=='category.php'?'active':'')?>"><i class="fa fa-table me-2"></i>Category</a>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?p=user" class="nav-item nav-link <?=($page=='user.php'?'active':'')?>"><i class="fa fa-user me-2"></i>User</a>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?p=configuration" class="nav-item nav-link <?=($page=='configuration.php'?'active':'')?>"><i class="fa fa-gear me-2"></i>Configuration</a>
                </div>
            </nav>
        </div>