<?php
    if($_GET){
        if($_GET['operation']){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $result = 0;
    
            switch($_GET['operation']){
                case " + ":
                    $result = $num1 + $num2; 
                    break;
                case " - ":
                    $result = $num1 - $num2; 
                    break;
                case " * ":
                    $result = $num1 * $num2; 
                    break;
                case " / ":
                    $result = $num1 / $num2; 
                    break;
                case " % ":
                    $result = $num1 % $num2; 
                    break;
                case " ^ ":
                    $result = $num1 ** $num2; 
                    break;
                case "root":
                    $result = $num1 ** (1 / $num2); 
                    break;
            }
    
        }
    }


?>



<!doctype html>
<html lang="en">
  <head>
    <title>calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    <div class="container my-5 ">
        <div class="col-6 offset-md-3 p-5 border border-2 rounded">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"  >
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="num1" name="num1" value="<?= isset($_GET['num1']) ? $_GET['num1'] : "" ?>" >
                    <label for="num1"> First Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="num2" name="num2" value="<?= isset($_GET['num2']) ? $_GET['num2'] : "" ?>">
                    <label for="num2"> Second Number</label>
                </div>
                <div class="form-floating mb-3 text-center">
                <input class="btn btn-success" type="submit" value=" + " name="operation">
                <input class="btn btn-success" type="submit" value=" - " name="operation">
                <input class="btn btn-success" type="submit" value=" * " name="operation">
                <input class="btn btn-success" type="submit" value=" / " name="operation">
                <input class="btn btn-success" type="submit" value=" % " name="operation">
                <input class="btn btn-success" type="submit" value=" ^ " name="operation">
                <input class="btn btn-success" type="submit" value="root" name="operation">
                </div>

            </form>
            <div class="form-floating mb-3">
                <input type="text" disabled class="form-control" id="num2" value="<?= isset($result) ? $result : "" ?>"  >
                <label for="num2"> The Result </label>
            </div>
        </div>
    </div>



  <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>