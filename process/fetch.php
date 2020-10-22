<?php
    require "../../controllers/init.php";
    
    $row = $db->search()
    if ($row) {
        foreach (Categories::getAllCategories() as $cat){
            $output .= "<li class='list-group-item'>
              <a href='<?=$cat['slug']?>'><?=$cat['name']?></a>
            </li>";
        }
        echo $output;
    }else {
        echo 'Data Not Found';
    }

?>