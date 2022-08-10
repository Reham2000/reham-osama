<?php
    if($_POST){
        if($_POST['Physics'] &&$_POST['Chemistry'] &&$_POST['Biology'] &&$_POST['Mathematics'] &&$_POST['Computer']){
            $sum = 0;
            $sum += (int)$_POST['Physics'];
            $sum += (int)$_POST['Chemistry'];
            $sum += (int)$_POST['Biology'];
            $sum += (int)$_POST['Mathematics'];
            $sum += (int)$_POST['Computer'];

            $_POST['persentage'] = ($sum / 500)*100;
            if($_POST['persentage'] >= 90){
                $_POST['result'] = "A";
            }elseif($_POST['persentage'] >= 80){
                $_POST['result'] = "B";
            }elseif($_POST['persentage'] >= 70){
                $_POST['result'] = "C";
            }elseif($_POST['persentage'] >= 60){
                $_POST['result'] = "D";
            }elseif($_POST['persentage'] >= 40){
                $_POST['result'] = "E";
            }else{
                $_POST['result'] = "F";
            }
        }
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Grades system</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <div class="container my-5">

        <div class="row">
            <div class="col-6 text-center fw-bolder">
                <h1 class="text-center pb-5">the Grades</h1>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="Physics" name="Physics" >
                        <label for="Physics"> Physics Grades</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="Chemistry" name="Chemistry" >
                        <label for="Chemistry"> Chemistry Grades</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="Biology" name="Biology" >
                        <label for="Biology"> Biology Grades</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="Mathematics" name="Mathematics" >
                        <label for="Mathematics"> Mathematics  Grades</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="Computer" name="Computer" >
                        <label for="Computer"> Computer Grades</label>
                    </div>
                    <input value="submit" type="submit" class="btn btn-outline-success fs-3">
                </form>
            </div>
            <div class="col-6 text-center fw-bolder d-flex flex-column justify-content-center">
                <p class="fs-1">YOUR GRADE IS </p>
                <p class="fs-1"><?= isset($_POST['result'])? $_POST['result'] : "?" ?> </p>
                <p class="fs-1"><?= isset($_POST['persentage'])? "{$_POST['persentage']} %" : "? %" ?> </p>

            </div>
        </div>

    
    </div>




  <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>