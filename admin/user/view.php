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
                <div class="">
                    <table class="table table-bordered mr-2">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th col-30>User Email</th>
                            <th col-30>First Name</th>
                            <th col-30>Last Name</th>
                            <th col-30>Address</th>
                            <th col-30>LGA</th>
                            <th col-30>State</th>
                            <th col-30>Phone Number1</th>
                            <th col-30>Phone Number2</th>
                            <th>Profession</th>
                            <th col-30>Service Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach (User::getAllUserByRole() as $key): $number++?>
                        <tr>
                            <td><?=$number?></td>
                            <td><?=$key['user_email']?></td>
                            <td><?=$key['user_firstname']?></td>
                            <td><?=$key['user_lastname']?></td>
                            <td><?=$key['user_address']?></td>
                            <td><?=$key['lga']?></td>
                            <td><?=$key['state_of_residence']?></td>
                            <td><?=$key['phone_number']?></td>
                            <td><?=$key['phone_number_two']?></td>
                            <td><?=$key['field_of_profession']?></td>
                            <td><?=$key['service_role']?></td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class=" py-2">
                    <a href="add_user.php" class="btn btn-sm btn-info">Add User</a>
                </div> -->
            </div>
        </main>

        <!-- Main body End -->
    </div>
</div>

<!-- Footer -->
<?php include "../scr/includes/footer2.php"?>
<!-- Footer End -->