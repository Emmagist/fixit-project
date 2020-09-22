<?php 
require_once "../process/admin.pr.php";
/* Header */
include "scr/includes/header.php";
?>
<!-- Header End -->
    <div class="form-screen">
        <a href="index.php" class="easion-logo"><img src="scr/img/Fixitlogo transparent.png" alt="" height="100" width="100"><span class="pr-5">Admin</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white"> Please sign in </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php require_once "../scr/inc/session-mgs.php";?>
                    <?php require_once "../scr/inc/messages.php";?>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"  placeholder="Example@gmail.com"
                               value="<?= isset($_POST['email'])? $_POST['email'] : ''?>">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary" name="admin-login">Sign in</button>
                        <a class="account-dialog-link" href="signup.php">Create a new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php include "scr/includes/footer.php"?>
<!-- Footer End -->
   