<?php
class Database {

    public static function openConnection() {
        return new PDO("mysql:host=localhost;dbname=test_pdo", "root", "");
    }

}