<?php include  "../../process/support.pr.php"; ?>

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
                                Add Category Form
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <?php require_once "../../scr/inc/session-mgs.php";?>
                                    <?php require_once "../../scr/inc/messages.php";?>
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['user_token']?>"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" name="title" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary" name="add_about">Add About</button>
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