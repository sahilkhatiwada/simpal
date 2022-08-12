<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound interest</title>
</head>
<body>
    <?php
 $p=10000;
 $r=10;
 $t=2;
 $cp= $p * pow( 1+$r/100 ,$t);

  echo $cp ;




    ?>
    
</body>
</html>