<?php
    require "controllers/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Fixit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scr/css/bootstrap.min.css">
    <link rel="stylesheet" href="scr/css/index.css">
    <link rel="stylesheet" href="scr/css/style_sub_cat.css">
    <link rel="stylesheet" href="scr/css/footer.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Style The Dropdown Button */
        .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        /*.dropdown-content a:hover {*/
        /*    background-color: #f1f1f1;*/
        /*    color: #000;*/
        /*}*/

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: black;
            color: #fff;
        }
    </style>
  </head>
<body>
    <div class="mb-5" id="header-container">
        <header>
            <div class="logo"><img src="scr/img/Fixitlogo transparent.png" alt="Fixit logo" class="logo-white"></div>
            <nav class="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="text-white">
                            Directories
                        </a>
                        <div class="dropdown-content bg-dark text-white" >
                            <a class="dropdown-item" href="provider.php">Provider</a>
                            <?php
                                if ($fun->ifLoggedIn()):
                            ?>
                            <a class="dropdown-item" href="user_profile.php?profile=<?=$_SESSION['user_token']?>">Profile</a>
                            <?php if(isset($_SESSION['user_token'], $_SESSION['verified'])):?>
                            <?php if ($_SESSION['service_role'] === 'service_provider'):?>
                            <a class="dropdown-item" href="work_registration.php">Post Jobs</a>
                            <?php
                            endif;
                            endif;?>
                        </div>
                    </li>
                    
                    <?php
                        if ($fun->IsAdmin()):?>
                            <li><a href="admin/index.php">Admin</a></li>
                        <?php endif;?>
                        <li><a href="logout.php" class="dash-nav-item text-danger">Logout</a></li>
                        <li class="mt-3">
                            <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-6.png" alt=""/>
                        </li>
                    <?php else:?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif;?>
                </ul>
            </nav>
            <div class="hamburger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </header>

        <div class="container title">
            <div class="logo-searcharea" id="logo-searcharea" style="margin-left:-150px">
                <h1>Welcome to <img src="scr/img/Fixitlogo transparent.png" alt="Fixit logo" class="logo-white" style="margin-top: 8px;"><h1>
            </div>
                <h4 class="text-white" style="margin-left: -70%;">THE BEST PLACE TO GET YOUR JOB DONE</h4>
            <div class="card-body" style="width:70%; margin-left:-5px">
                <input type="search" id="search_text" placeholder="What Are You Waiting For?" class="find-services form-control">
            </div>
            <div class="pupolar-container"  style="margin-left: -65%; margin-top:-10px">
                <p class="text-white mt-4"></p>
                <ul class="">
                    <li class="list-title">Pupolar: <a href="">Web developemt</a> <a href="">Electrician</a> <a href="">Graphic designer</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <center>
            <form action="">
        <input type="search" id="search_text" placeholder="What Are You Waiting For?" class="find-services-onsmall form-control">
        </form>
        </center>
   
    </div>
    <div class="col-md-12">
    <?php
    //require_once "scr/inc/messages.php";
    if (isset($_SESSION['message-success'])) {
        echo "<li class='text-center alert alert-success' role='alert' style='list-style: none;'>".$_SESSION['message-success']."</li>";
        unset($_SESSION['message-success']);
    }
    require_once "scr/inc/session-mgs.php";
    ?>
    </div>
    <div class="container" id="index-loginbtn">
     <?php
     if (!$fun->ifLoggedIn()):?>
         <a href="login.php" class="btn">SIGN IN</a>
         <a href="signup.php" class="btn">SIGN UP</a>
     <?php endif;?>

    </div>
    <div class="nav">
        <div class="container">
        <ul>
            <?php foreach (Categories::getAllCategories() as $cat):?>
            <li>
                <a href="provider.php?cat=<?=$cat['slug']?>"><?=$cat['name']?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>      
    </div>
    