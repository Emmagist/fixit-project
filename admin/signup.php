<?php
include "../process/admin.pr.php";
  ?>
<!-- Header -->
<?php include "scr/includes/header.php";?>
<!-- Header End -->

    <div class="form-screen mb-5">
    <a href="index.php" class="easion-logo"><img src="scr/img/Fixitlogo transparent.png" alt="" height="100" width="100"><span class="pr-5">Admin</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white"> Create an account </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php require_once "../scr/inc/session-mgs.php";?>
                    <?php require_once "../scr/inc/messages.php";?>
                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control" id="exampleInputPassword1" placeholder="First name"
                               value="<?= isset($_POST['firstname'])? $_POST['firstname'] : ''?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control" id="exampleInputPassword1" placeholder="Last name"
                               value="<?= isset($_POST['lastname'])? $_POST['lastname'] : ''?>">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email"
                               value="<?= isset($_POST['email'])? $_POST['email'] : ''?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                               value="<?= isset($_POST['password'])? $_POST['password'] : ''?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address"
                               value="<?= isset($_POST['address'])? $_POST['address'] : ''?>">
                    </div>
                    <div class="form-group">
                        <input type="file" name="file" class="form-control" id="exampleInputPassword1" placeholder="File">
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary" name="admin-reg">Sign up</button>
                        <a class="account-dialog-link" href="category/add.php">Already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
<!-- Footer -->
<?php include "scr/includes/footer.php"?>
<!-- Footer End -->