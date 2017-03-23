<?php
include "connection.php";

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$ad = $_POST['ad'];

$add = $db->prepare("INSERT INTO customers (firstname,lastname,streetaddress) VALUES(:fn,:ln,:ad)");
$add->bindParam(':fn', $fn);
$add->bindParam(':ln', $ln);
$add->bindParam(':ad', $ad);
$add->execute();
header('location: customers.php');
?>