<?php

$link = mysqli_connect("localhost", "root", "", 'newstest');

if ($link == false) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
}

$data = $_POST;

$img = 'image/'. $_FILES['image']['name'];

if (!move_uploaded_file($_FILES['image']['tmp_name'], $img)) {
    $img = '';
}

//TODO глобальная переменная FILES, ФУНКЦИЯ move_upload_files() - посмотреть как работает и сделать загрузку файкала


$data["date"]=date("Y-m-d H:i:s",strtotime($data["date"]));

$sql = "INSERT INTO `news` (`title`, `date`, `preview`, `text`, `image`)
VALUES ( '{$data['title']}', '{$data['date']}', '{$data['preview']}', '{$data['text']}', '{$img}' );";

$result = mysqli_query($link, $sql);

if (!$result) {
    printf("Errormessage: %s\n", mysqli_error($link));
}
//Редирект на другую страницу
header('Location: admin/admin.php');
exit();

