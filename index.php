<!DOCTYPE html>

<?php

require('View/header.php');
require('View/side_nav.php');

?>
<div id="main">

    <!--    Some content (you can paste your include files here)-->
    <h1>Dashboard</h1>

    <section class="dashboard">
     <div class="top1">
         <h2>Manage</h2>
         <ul class="list">
         <?php
         $menu = menu_db::get3MenuItems();
         foreach ($menu as $item):
         ?>
             <li><a href="<?php echo $item->getPath(); ?>"> <?php echo $item->getTitle(); ?> </a></li>
         <?php endforeach; ?>
<!--             <li>Pages</li>-->
<!--             <li>FAQ</li>-->
         </ul>
         <ul class="list">
         <?php
         $menu = menu_db::get3BottomMenuItems();
         foreach ($menu as $item):
         ?>
         <li><a href="<?php echo $item->getPath(); ?>"> <?php echo $item->getTitle(); ?> </a></li>
         <?php endforeach; ?>

        <!--     <li>Subscriptions</li>
             <li>Events</li>
             <li>Users</li>-->
         </ul>

     </div>
     <div class="top2">
         <h2>Subscriptions</h2>
     </div>
    </section>

    <section class="dashboard">
     <div class="bottom">
         <h2>Upcoming Events</h2>
     </div>
     <div class="bottom">
         <h2>Posts</h2>
     </div>
     <div class="bottom">
         <h2>Pages</h2>
     </div>
    </section>

    <!--    end content-->
</div>

</body>
</html>

