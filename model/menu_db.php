<?php

class menu_db
{
    // Get all menu items
    public static function getMenuItems()
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM cms';
        $result = $db->query($query);
        $menu_items = array();
        foreach ($result as $row) {
            $menu = new menu(
                $row['title'],
                $row['path'],
                $row['icon']
            );
            $menu->setId($row['id']);
            $menu_items[] = $menu;
        }
        return $menu_items;
    }

    public static function get3MenuItems()
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM cms WHERE id > 1 LIMIT 3';
        $result = $db->query($query);
        $menu_items = array();
        foreach ($result as $row) {
            $menu = new menu(
                $row['title'],
                $row['path'],
                $row['icon']
            );
            $menu->setId($row['id']);
            $menu_items[] = $menu;
        }
        return $menu_items;
    }

    public static function get3BottomMenuItems()
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM cms WHERE id > 5 LIMIT 3';
        $result = $db->query($query);
        $menu_items = array();
        foreach ($result as $row) {
            $menu = new menu(
                $row['title'],
                $row['path'],
                $row['icon']
            );
            $menu->setId($row['id']);
            $menu_items[] = $menu;
        }
        return $menu_items;
    }

}