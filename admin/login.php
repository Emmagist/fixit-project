<?php 
require_once "../process/user.pr.php";
/* Header */
include "scr/includes/header.php";
?>
<!-- Header End -->
    <div class="form-screen">
        <a href="index.php" class="easion-logo"><img src="scr/img/Fixitlogo transparent.png" alt="" height="100" width="100"><span class="pr-5">Admin</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white"> Please sign in </div>
            <div class="card-body">
                <form action="#!">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a class="account-dialog-link" href="signup.php">Create a new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php include "scr/includes/footer.php"?>
<!-- Footer End -->
   