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
        $menu = menu_db::getMenuItems();
        foreach ($menu as $item):
        ?>

        <li><a href="<?php echo $item->getPath(); ?>"><i class="<?php echo $item->getIcon(); ?>"></i> <span><?php echo $item->getTitle(); ?></span></a></li>
        <?php endforeach; ?>
  <!--      <li><a href="#"><i class="fa fa-calendar fa-lg"></i> <span>Event Calendar</span></a></li>
        <li><a href="#"><i class="fa fa-user fa-lg"></i> <span>Users</span></a></li>
        <li><a href="#"><i class="fa fa-comment fa-lg"></i> <span>Reviews</span></a></li>
        <li><a href="#"><i class="fa fa-newspaper-o fa-lg"></i> <span>Posts</span></a></li>
        <li><a href="#"><i class="fa fa-comments-o fa-lg"></i> <span>FAQ</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i> <span>Subscriptions</span></a></li>
        <li><a href="#"><i class="fa fa-file-text-o fa-lg"></i> <span>Pages</span></a></li>
        <li><a href="#"><i class="fa fa-wrench fa-lg"></i> <span>Settings</span></a></li>-->
    </ul>
    <!-- end navigation-->
</div>