<?php
setcookie ('user', $user['login'], time()-3600, "admin/" );
header('Location: index.php');
?>