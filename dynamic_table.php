<?php 
$users = [
  (object)[
      'id' => 1,
      'name' => 'ahmed',
      "gender" => (object)[
          'gender' => 'm'
      ],
      'hobbies' => [
          'football', 'swimming', 'running'
      ],
      'activities' => [
          "school" => 'drawing',
          'home' => 'painting'
      ],
      'phones'=>[012312312,1231513513,89746543],
      "code" => ['141414','147258'],
      'activities' => [
        "school" => 'drawing',
        'home' => 'painting'
    ],
  ],
  (object)[
      'id' => 2,
      'name' => 'mohamed',
      "gender" => (object)[
          'gender' => 'm'
      ],
      'hobbies' => [
          'swimming', 'running',
      ],
      'activities' => [
          "school" => 'painting',
          'home' => 'drawing'
      ],
      'phones'=>[1231513513,89746543],
      "code" => ['555555','142536']
  ],
  (object)[
      'id' => 3,
      'name' => 'menna',
      "gender" => (object)[
          'gender' => 'f'
      ],
      'hobbies' => [
          'running',
      ],
      'activities' => [
          "school" => 'painting',
          'home' => 'drawing'
      ],
      'phones'=>[],
      "code" => ['202020']
  ],  
];
?>


<!doctype html>
<html lang="en">
  <head>
    <title>table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    <div class="container my-5">
        <table class="table table-striped table-inverse table-responsive border">
        <thead class="thead-inverse fs-4">
          <tr>
            <?php
            // print_r($users);
            
            if(isset($users)){
              foreach($users[0] AS $key => $user){?>
                <th><?= $key ?></th>
              <?php }} ?> 
          </tr>
        </thead>
        <tbody>
            <?php
                if(isset($users)){
                    foreach($users as $index => $user){
                        echo "<tr>";
                            foreach($user as $value){
                                echo "<td>";
                                if(gettype($value) == "array" || gettype($value) == "object"){
                                    foreach($value as $key => $data){
                                        if($key == 'gender' && $data == 'f'){
                                            $data = "Male";
                                        }elseif($key == 'gender' && $data == 'm'){
                                            $data = "Female";

                                        }

                                        echo "- {$data} <br>";
                                    }
                                }else{
                                    echo($value);
                                }
                                echo "</td>";
                            }
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
        </table>
    </div>



  <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>