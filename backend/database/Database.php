<?php

class Database {
    public static function connection() {
        return new PDO('mysql:host=localhost;port=3306;dbname=segura;charset=UTF8', 'root', '');
    }
}
?>
