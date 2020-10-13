<?php



$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$sql = new mysqli('localhost','root','','admin');

$result = $sql->query("SELECT * FROM `admin` WHERE `login`='$login'AND `pass`= '$pass'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "administration only";
    exit();
}

setcookie ('user', $user['login'], time()+3600, "admin/" );

$sql->close();
header('Location:admin/admin.php');

?>
