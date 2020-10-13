<?php

//подключение  к базе

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newstest";

$conn = new mysqli($servername, $username, $password, $dbname) ;

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--//подключаем стили    -->
    <link rel="stylesheet" href="../css/main.css">
    <!--________________________________________________________________________________________________________________-->

</head>

<body>
<div class="container">

    <nav class="nav nav-pills flex-column flex-sm-row newitem nav-justified">


        <a class=" flex-sm-fill text-sm-center nav-link active" href="../index.php">MAIN NEWS</a>

    </nav>

    <form>
        <div class="col border border-secondar rounded field">
            <div class="edit-news badge badge-primary text-wrap topic">
                NEWS ADMIN
            </div>

            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <th>№</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Preview</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>
                            <?php if($item['image']) :  ?>
                                <img width="100px" height="100px" src="/<?php echo $item['image'] ?>">
                            <?php endif; ?>
                        </td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['date'] ?></td>
                        <td><?php echo $item['preview'] ?></td>
                        <td class="align-center">

                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/admin/edit.php?id=<?php echo $item['id'] ?>" class="btn btn-success" id="butedit">edit</a>
                                <a href="/front/newspage.php?id=<?php echo $item['id'] ?>" class="btn btn-primary" id="butedit">view</a>
                                <a href="/admin/delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger" id="butdel">delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </form>

</div>






<!--____________________________________________________________________________________________________________________
//Подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--//подключаем файл со скриптом-->
<script src="../js/main.js"></script>
<!--_________________________________________________________________________________________________________________-->


</body>
</html>