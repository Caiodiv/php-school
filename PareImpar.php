<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
     
      $var_recebida=0;
     
     $var_recebida = $_POST['huahua'];
     
    if($var_recebida % 2 == 0){
         echo"<h1><br> <font color='blue' ><b><i>O nº $var_recebida é par </font>
              </b></i></h1>";
    } else {
         echo"<h1><br> <font color='red'> <b><i>O nº $var_recebida é ímpar </font>
              </b><i><h1>";
   }
?>
</body>
</html>