<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
     

     $nMeses = $_POST['meses'];
     $nSalario = $_POST['salario'];
     $nBonus = $_POST['bonus'];

     $calc = 0;
     echo "<br>Mês &nbsp;&nbspSál.Atual &nbsp;&nbspBônus &nbsp;&nbspSál.+bônus";
        for($i = 1; $i <= $nMeses; $i++) 
        {
            $calc = $nSalario + $nBonus;
            
            echo"<br>&nbsp  $i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  $nSalario
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  $nBonus&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp  $calc";
                

                   
                                                   
        }
     ?>
</body>
</html>