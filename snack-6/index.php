<?php 
/*  Snack 
    Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.

*/
  
$elements = $_GET;

var_dump($elements);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
</head>
<body>
    
    <ul>
    <?php 
        foreach($elements as $key => $value) : ?>

            <li> <?= "$key : $value" ?> </li>
        
    <?php endforeach; ?>
    </ul>

</body>
</html>