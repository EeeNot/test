<?php
$id = $_GET['id'];



$conn = new mysqli('localhost','root','','newstest');

$sql = "DELETE FROM `news`  WHERE id = '{$id}'";
$result = $conn->query($sql);


$conn->close();
header('location: admin.php');
?>


