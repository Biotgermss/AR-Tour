<?php
include 'config.php';

if($_POST["save_discover"]) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $address = $_POST["address"];
    $sql = "INSERT INTO discover VALUES (NULL, '$name', '$description', '$address')";
    $result = $conn->query($sql);
    header("location: dimages.php");
}