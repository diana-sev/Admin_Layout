<?php

class Database {

    private static $dsn = 'mysql:host=clove.arvixe.com;dbname=cms_interface';
    private static $username = 'dianitasl';
    private static $password = 'robert1955';
    //reference to db connection
    private static $db;


    private function __construct() {}

    //return reference to pdo object
    public static function getDB () {

        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                    self::$username,
                    self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo 'Error: ' . $error_message;
                exit();
            }
        }
        return self::$db;
    }
}
