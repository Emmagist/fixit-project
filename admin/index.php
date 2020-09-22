<?php include "../process/admin.pr.php"; ?>
<!-- Header -->
<?php
include "scr/includes/header.php";
if (!isset($_SESSION['user_email'],$_SESSION['user_token'])) {
    header('location: login.php');
}else {
    $user_token = $_SESSION['user_token'];
    $email =$_SESSION['user_email'];
}
?>
<!-- Header End -->


<div class="dash">
    <!-- Sidebar -->

    <div class="dash-nav dash-nav-dark">
       <?php include "scr/includes/sidebar.php";?>
    </div>

    <!-- Sidebar End -->
   
    <div class="dash-app">
    
     <!-- Topbar -->

     <?php include "scr/includes/topbar.php";?>

    <!-- Topbar End -->

    <!-- Main Body -->

        <main class="dash-content">
            <div class="container-fluid">
                <div class="row dash-row">
                    <div class="col-xl-3">
                        <div class="stats stats-primary">
                            <h3 class="stats-title"> Sign ups </h3>
                            <div class="stats-content">
                                <div class="stats-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="stats-data">
                                    <div class="stats-number">114</div>
                                    <div class="stats-change">
                                        <span class="stats-percentage">+25%</span>
                                        <span class="stats-timeframe">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="stats stats-success ">
                            <h3 class="stats-title"> Revenue </h3>
                            <div class="stats-content">
                                <div class="stats-icon">
                                    <i class="fas fa-cart-arrow-down"></i>
                                </div>
                                <div class="stats-data">
                                    <div class="stats-number">$25,541</div>
                                    <div class="stats-change">
                                        <span class="stats-percentage">+17.5%</span>
                                        <span class="stats-timeframe">from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="stats stats-danger">
                            <h3 class="stats-title"> Open tickets </h3>
                            <div class="stats-content">
                                <div class="stats-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="stats-data">
                                    <div class="stats-number">5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="stats stats-secondary">
                            <h3 class="stats-title"> Open tickets </h3>
                            <div class="stats-content">
                                <div class="stats-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="stats-data">
                                    <div class="stats-number">5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                </div>
            </div>
        </main>

    <!-- Main body End -->
    </div>
</div>

<!-- Footer -->
<?php include "scr/includes/footer.php"?>
<!-- Footer End -->
