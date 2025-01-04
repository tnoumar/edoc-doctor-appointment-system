<?php

$database = new mysqli("db", "root", "rootpassword", "edoc");
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

?>