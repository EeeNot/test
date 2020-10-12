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
        foreach ($result->fetch_assoc() as $key => $item) {
            $data[] = $item;
        }
    }

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


        <a class=" flex-sm-fill text-sm-center nav-link active" href="main.php">MAIN NEWS</a>

    </nav>

    <form>
        <div class="col border border-secondar rounded field">
            <!--///////////////////////////////////////////////////////////////////-->
            <div class="edit-news badge badge-primary text-wrap topic">
                NEWS ADMIN
            </div>

            <!--///////////////////////////////////////////////////////////////////-->
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th type="submite" id="butadd"  scope="row">
                                <!--добавляем новость-->
                            </th>

                            <th scope="row">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?php
                                        foreach ($result as $item) {
                                            $data[] = $item;
                                            echo $item['title'];
                                        }
                                        ?>
                                    </h5>
                                    <small><?php
                                        foreach ($result as $item) {
                                            $data[] = $item;
                                            echo $item['date'];
                                        }

                                        ?>
                                    </small>
                                </div>
                                <p class="mb-1 news-preview" text-overflow="5"><?php
                                    foreach ($result as $item) {
                                        $data[] = $item;
                                        echo $item['preview'];
                                    }
                                    ?>
                                </p>

                                <div class="row">

                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary" id="butedit">edit</button>
                                            <button type="button" class="btn btn-secondary" id="butdel">delite</button>
                                        </div>


                                </div>
                            </th>
                            <th scope="row">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?php
                                        foreach ($result as $item) {
                                            $data[] = $item;
                                            echo $item['title'];
                                        }
                                        ?>
                                    </h5>
                                    <small><?php
                                        foreach ($result as $item) {
                                            $data[] = $item;
                                            echo $item['date'];
                                        }

                                        ?>
                                    </small>
                                </div>
                                <p class="mb-1 news-preview" text-overflow="5"><?php
                                    foreach ($result as $item) {
                                        $data[] = $item;
                                        echo $item['preview'];
                                    }
                                    ?>
                                </p>

                                <div class="row">

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="butedit">edit</button>
                                        <button type="button" class="btn btn-secondary" id="butdel">delite</button>
                                    </div>


                                </div>
                            </th>
                            <th scope="row"><div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?php
                                        foreach ($result as $item) {
                                            $data[] = $item;
                                            echo $item['title'];
                                        }
                                        ?>
                                    </h5>
                                    <small><?php
                                        foreach ($result as $item) {
                                            $data[] = $item;
                                            echo $item['date'];
                                        }

                                        ?>
                                    </small>
                                </div>
                                <p class="mb-1 news-preview" text-overflow="5"><?php
                                    foreach ($result as $item) {
                                        $data[] = $item;
                                        echo $item['preview'];
                                    }
                                    ?>
                                </p>

                                <div class="row">

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="butedit">edit</button>
                                        <button type="button" class="btn btn-secondary" id="butdel">delite</button>
                                    </div>


                                </div></th>

                        </tr>

                    </tbody>
                </table>



                <a class="list-group-item">

                    <?php


                    $conn -> close();

                    ?>

                </a>



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