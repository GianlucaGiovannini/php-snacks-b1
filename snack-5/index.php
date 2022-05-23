<?php 
/*  Snack 
    Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

*/

$password = $_GET['password'];

if ($password) {
    var_dump($password);
}


  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<body>
    
    <h1 style="color: <?php echo $password == 'Boolean' ? 'green' : 'red'; ?>"> 
        <?php echo $password?>
    </h1>

</body>
</html>