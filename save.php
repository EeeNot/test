<?php

$link = mysqli_connect("localhost", "root", "", 'newstest');

if ($link == false) {
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    print("Соединение установлено успешно");
}
$data = $_POST;

$img = 'image/'. $_FILES['image']['name'];



move_uploaded_file($_FILES['image']['tmp_name'], $img);

//TODO глобальная переменная FILES, ФУНКЦИЯ move_upload_files() - посмотреть как работает и сделать загрузку файкала


$data["date"]=date("Y-m-d H:i:s",strtotime($data["date"]));

$sql = "INSERT INTO `news` (`title`, `date`, `preview`, `text`, `image`)
VALUES ( '{$data['title']}', '{$data['date']}', '{$data['preview']}', '{$data['text']}', '{$img}' );";

$result = mysqli_query($link, $sql);

if (!$result) {
    printf("Errormessage: %s\n", mysqli_error($link));
}

print_r($img) ;
//TODO загуглить как работает SELECT sql получить новсоти с сортировкой по полю date


