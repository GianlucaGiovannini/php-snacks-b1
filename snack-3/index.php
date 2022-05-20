<?php 
/*  Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 */

$numbers = [];

for($i = 0; count($numbers) < 15; $i++) {

    $numberRandom = rand(1, 100);
    // var_dump($numberRandom);

    if(!in_array($numberRandom, $numbers)) {
        $numbers[] = $numberRandom;
    }
}

// var_dump($numbers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>
<body>
    
    <h1>Snack 3 (4 in realtà) - 15 numeri casuali</h1>
   
    <?php for ($i = 0; $i <= count($numbers) -1; $i++) { ?>
        <span>( <?php echo $numbers[$i] ?> )</span>
    <?php } ?>


    


    

</body>
</html>