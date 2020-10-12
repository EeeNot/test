<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newstest";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows>0) {
    $num++;

    foreach ($result->fetch_assoc() as $key => $item)
    {
        $data[]= $item;
        echo $item;
    }
    //return (0);
}

$conn -> close();

?>