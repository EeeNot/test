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

<!--//подключаем стили    -->
    <link rel="stylesheet" href="/css/main.css">
<!--________________________________________________________________________________________________________________-->

</head>

<body>
<div class="container">

    <h1 class="text-center">
        <div class="badge badge-primary text-wrap" style="width: 22rem; background: #5A6268">
            ADD NEWS
        </div>
    </h1>

<p class="text-center">Inter news parameters :</p>

    <form class="text-center">
        <div class="row">
                      <!--///////////////////////////////////////////////////////////////////-->
            <div class="col-md-4">

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="news title" class="newitem">Title :</label>
                    <input type="text" class="form-control" id="inputtitle" placeholder="News Title ...">

                    <label for="data" class="newitem">Data :</label>
                    <input type="text" class="form-control" id="inputdate" placeholder="dd/mm/yy ">

                    <label for="preview" class="newitem">Preview :</label>
                    <input type="text" class="form-control" id="inputpreview" placeholder="News preview ... ">

                    <label for="textnews" class="newitem">Enter news text</label>
                    <textarea class="form-control" id="newstext" rows="3"></textarea>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Image ...</label>
                </div>

                <button type="button" class="btn btn-secondary btn-lg btn-block newitem">UPLOAD</button>

            </div>
            <!--///////////////////////////////////////////////////////////////////-->
            <div class="col-md-4">

            </div>
        </div>


    </form>

</div>






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