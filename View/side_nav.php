<?php
require('model/database.php');
require('model/menu.php');
require('model/menu_db.php');
?>


<!--Navigation-->
<div id="nav">
    <span class="nav-btn "><i class="fa fa-navicon fa-lg"></i></span>
    <ul>
        <?php
        $current_url = basename($_SERVER['PHP_SELF']);
        $active = "class=\"active\"";
        $menu = menu_db::getMenuItems();
        foreach ($menu as $item):
        ?>

        <li><a href="<?php echo $item->getPath(); ?>"  <?php echo ($current_url == $item->getPath()) ? $active : ''; ?> ><i class="<?php echo $item->getIcon(); ?>"></i> <span> <?php echo $item->getTitle(); ?> </span></a></li>
        <?php endforeach; ?>

    </ul>
    <!-- end navigation-->
</div>