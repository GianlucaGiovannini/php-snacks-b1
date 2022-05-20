<?php 
/*  Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

$userLogin = [
        'name' => $_GET['name'],
        'mail' => $_GET['mail'],
        'age' => $_GET['age'],
];
// var_dump($userLogin);
// var_dump(strlen($userLogin['name']));
// var_dump(strpos($userLogin['mail'], '.'));
// var_dump(strpos($userLogin['mail'], '@'));
// var_dump(is_numeric($userLogin['age']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body style="background-color:#6755ad;">
    
    <h1>Snack 2 - login </h1>

    <?php  if ($userLogin['name'] == null || $userLogin['mail'] == null || $userLogin['age'] == null) : ?>

        <p> 
            <strong>Scrivi così alla fine dell'url ==></strong>
            ?name=(tuo nome)&mail=(tua mail)&age=(tua età) alla fine dell'url
        </p>

    <?php elseif (strlen($userLogin['name'] > 3) && strpos($userLogin['mail'], '.') && strpos($userLogin['mail'], '@') && is_numeric($userLogin['age']) ) :?>

        <h2 style="color:lightgreen;"> Accesso riuscito </h2>

    <?php else : ?>

        <h2 style="color:#800916;"> Accesso negato </h2>

    <?php endif ?>
    

</body>
</html>