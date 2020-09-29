<?php include  "../../process/category.pr.php"; ?>



<?php
include "../scr/includes/header2.php";
?>
<!-- Header End -->


<div class="dash">
    <!-- Sidebar -->

    <div class="dash-nav dash-nav-dark">
        <?php include "../scr/includes/sidebar2.php"; ?>
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
                    <div class="col-md-4 py-2">
                        <a href="add.php" class="btn btn-sm btn-info">Add Category</a>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach (Categories::getAllCategories() as $cat): $number++?>
                            <tr>
                                <td><?=$number?></td>
                                <td><?=$cat['name']?></td>
                                <td><?=$cat['slug']?></td>
                                <td><a href="" class="btn btn-sm btn-primary">Edit</a></td>
                            </tr>
                          <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Main body End -->
    </div>
</div>

<!-- Footer -->
<?php include "../scr/includes/footer2.php"?>
<!-- Footer End -->