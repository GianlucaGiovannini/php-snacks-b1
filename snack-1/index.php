<?php 
/*  Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

// Creo un array con le partite di basket

$risultatiPartite = [
    [
        'home' => 'Olimpia Milano',
        'homeResult' => 55,
        'out' => 'Cantù',
        'outResult' => 60,

    ],
    [
        'home' => 'Underground',
        'homeResult' => 100,
        'out' => 'Miami',
        'outResult' => 110,
    ],
    [
        'home' => 'Nets',
        'homeResult' => 115,
        'out' => 'Brooklin',
        'outResult' => 92,
    ],
    [
        'home' => 'Spurs',
        'homeResult' => 99,
        'out' => 'Chicago Bulls',
        'outResult' => 101,
    ]
];
// var_dump($risultatiPartite)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    
    <h1>Risultati Partite</h1>

    <?php for ($i = 0; $i <= count($risultatiPartite) -1; $i++) { ?>
        <p>
            <?php echo $risultatiPartite[$i]['home'] . ' - ' . $risultatiPartite[$i]['out']  . ' | ' . $risultatiPartite[$i]['homeResult'] . ' - ' . $risultatiPartite[$i]['outResult'] ?>
        </p>
    <?php } ?>
    
    

</body>
</html>