<?php
require_once("../model/Person.php");

echo("[Person] => Saving...");
echo("\n\n");
$person = new Person($_GET["name"], $_GET["age"]);
$person->save();
echo("A new person has been inserted in your database with successful");