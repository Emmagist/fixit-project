<?php include  "../../process/add.admin.pr.php"; ?>

<?php
include "../scr/includes/header2.php";
?>
<!-- Header End -->


<div class="dash">
    <!-- Sidebar -->

    <div class="dash-nav dash-nav-dark">
        <?php include "../scr/includes/sidebar2.php";?>
    </div>

    <!-- Sidebar End -->

    <div class="dash-app">

        <!-- Topbar -->

        <?php include "../scr/includes/topbar2.php";?>

        <!-- Topbar End -->

        <!-- Main Body -->

        <main class="dash-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Add Admin Form
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div>
                                        <?php require_once "../../scr/inc/session-mgs.php";?>
                                        <?php require_once "../../scr/inc/messages.php";?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" name="firstname" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lastname" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="address" name="address" id="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="profile" id="email" class="form-control" value="scr/img/avatar.jpg">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary" name="add_admin_button">Add Admin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </main>

        <!-- Main body End -->
    </div>
</div>

<!-- Footer -->
<?php include "../scr/includes/footer2.php"?>
<!-- Footer End -->