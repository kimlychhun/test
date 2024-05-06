<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <?php include "includes/saleRevenue.php" ?>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <?php include "includes/chart.php" ?>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <?php include "includes/recentSale.php" ?>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <?php include "includes/widget.php" ?>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <?php include "includes/footer.php" ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>