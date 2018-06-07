<?php
require_once("../config/Database.php");

class Person {

    public $id;
    public $name;
    public $age;
    public $date_created;

    public function __construct($name = "", $age = "") {
        $this->name = $name;
        $this->age = $age;
    }

    public function list() {
        $people = array();
        $list = Database::openConnection()->query("select * from person")->fetchAll();
        foreach ($list as $p) {
            $person = new Person($p["name"], $p["age"]);
            $person->id = $p["id"];
            $person->date_created = $p["date_created"];
            array_push($people, $person);
        }
        return $people;
    }

    public function save() {
        if ($this->isValid()) {
            $stmt = Database::openConnection()->prepare("insert into person (name, age) values (:name, :age)");
            $stmt->bindValue(":name", $this->name);
            $stmt->bindValue(":age", $this->age);
            $stmt->execute();
        }
    }

    private function isValid() {
        return isset($this->name) && isset($this->age);
    }

}