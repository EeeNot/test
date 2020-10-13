<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newstest";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM news WHERE id = '{$id}'";
$result = $conn->query($sql);
$news = $result->fetch_assoc();
if (!$news) {
    echo ' 404 not found';
    return;
}

if ($_POST) {
    if ($_FILES) {
        //Проверка, отличается ли название файла в базе и новго загруженого файла
        // Если отличаются, то загружаем новый файл и обновляем имя файла в базе
        //TODO сверстать форму авторизации на отдельной страницу
    }

    $data =  $_POST;
    $sql = "UPDATE news SET title = '{$data['title']}', date = '{$data['date']}', preview = '{$data['preview']}', text = '{$data['text']}' WHERE id = '{$id}'";
    $conn->query($sql);
}

$sql = "SELECT * FROM news WHERE id = '{$id}'";
$result = $conn->query($sql);
$news = $result->fetch_assoc();

$conn->close();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test WS</title>

    <!-- тестовое задание WorkSolution 06.10.2020 Носенко Игорь
________________________________________________________________________________________________________________________

//подключаем bootstrap    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--//подключаем стили-->
    <link rel="stylesheet" href="/css/main.css">
    <!--________________________________________________________________________________________________________________-->

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <nav class="nav nav-pills flex-column flex-sm-row newitem nav-justified">
                <a class=" flex-sm-fill text-sm-center nav-link active" href="admin.php">BACK</a>
            </nav>
        </div>
        <div class="col-md-4"></div>
    </div>


    <form method="post" action="edit.php?id=<?php echo $news['id'] ?>">
        <div class="row">
            <!--///////////////////////////////////////////////////////////////////-->
            <div class="col-md-4">

            </div>

            <div class="col-md-4 border border-secondar rounded">

                <div class="badge badge-primary text-wrap topic">
                    EDIT NEWS # <?php echo $news['id'] ?>
                </div>

                <p class="newitem">Edit news parameters :</p>

                <div class="form-group">    <!-- как сделать обязательные для заполнения-->
                    <label for="news title" class="newitem">Title :</label>
                    <input type="text" class="form-control" id="inputtitle" value="<?php echo $news['title'] ?>" name="title" placeholder="News Title ..." autofocus required>

                    <label for="data" class="newitem">Data :</label>
                    <input type="datetime-local" class="form-control" id="inputdate" value="<?php echo $news['date'] ?>" name="date" placeholder="dd/mm/yy " required>

                    <label for="preview" class="newitem">Preview :</label>
                    <input type="text" class="form-control" id="inputpreview" value="<?php echo $news['preview'] ?>" name="preview" placeholder="News preview ... " required>

                    <label for="textnews" class="newitem">Enter news text</label>
                    <textarea class="form-control" id="newstext" rows="3" name="text" required><?php echo $news['text'] ?></textarea>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="customFile">Image ...</label>
                </div>

                <button type="submit" class="btn btn-secondary btn-lg btn-block newitem" >UPDATE</button>

            </div>
            <!--///////////////////////////////////////////////////////////////////-->
            <div class="col-md-4">

            </div>
        </div>


    </form>

</div>

<?php
header('Location: ../admin/admin.php');
exit();
?>


<!--____________________________________________________________________________________________________________________
//Подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--//подключаем файл со скриптом-->
<script src="/js/main.js"></script>
<!--_________________________________________________________________________________________________________________-->


</body>
</html>
