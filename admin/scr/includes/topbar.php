<header class="dash-toolbar">
    <a href="#!" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </a>
    <a href="#!" class="searchbox-toggle">
        <i class="fas fa-search"></i>
    </a>
    <form class="searchbox" action="#!">
        <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
        <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
        <input type="text" class="searchbox-input" placeholder="type to search">
    </form>
    <?php $date = '';?>
    <div class="tools">
        <a href="../" class="mr-5 mt-2 text-primary" target="_blank"> Visit Website</a>
        <p class="mr-5 mt-2"> Last Access: 
        <?php 
         if (!($fun->IsAdmin())) {
            echo "can't Access Date";
         }else {
            echo substr(date("r"),0,25); 
         }
        ?>
        </p>
        <a href="#!" class="tools-item">
            <i class="fas fa-bell"></i>
            <i class="tools-item-count">4</i>
        </a>
        <div class="dropdown tools-item">
            <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <i class="fas fa-user"></i> -->
                <img src="scr/img/avatar.jpg" alt="" style="width:10vh; height:10vh; border-radius:50%;" class="ml-3">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</header>