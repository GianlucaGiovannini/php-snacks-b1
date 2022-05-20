<?php 
/*  Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$alunni = [
    [
        'nome' => 'Gianluca',
        'cognome' => 'Giovannini',
        'voti' => [9, 6, 5, 6, 8]
    ],
    [
        'nome' => 'Alessio',
        'cognome' => 'Riccardi',
        'voti' => [7, 8, 5, 6, 8]
    ],
    [
        'nome' => 'Matteo',
        'cognome' => 'Giannetti',
        'voti' => [5, 6, 5, 6, 4]
    ],
    [
        'nome' => 'Lorenzo',
        'cognome' => 'Grassi',
        'voti' => [5, 6, 5, 6, 3]
    ],
];


// var_dump($alunni);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    
    <h1> Alunno / media voti</h1>

    <?php foreach($alunni as $alunno) { ?>
        <h3>
        <?php echo $alunno['nome'];
            echo $alunno['cognome'];
            # posso fare un ciclo facendo così oppure ne faccio due come sotto 
            // echo ' / ' . array_sum($alunno['voti']) / count($alunno['voti']);
            $somma = 0;

            foreach($alunno['voti'] as $voti) {
            $somma += $voti;
            }

            echo ' / ' . $somma / count($alunno['voti']); ?>
        </h3>
    <?php } ?>

</body>
</html>