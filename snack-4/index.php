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
        'voti' => [7, 3, 5, 6, 5]
    ],
    [
        'nome' => 'Matteo',
        'cognome' => 'Giannetti',
        'voti' => [5, 4, 5, 6, 4]
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

        <div> <?php foreach($alunni as $alunno) { ?>
            <h3>
                <?php 
                    echo $alunno['nome'] . ' ' . $alunno['cognome'];

                    // media dei voti sommando con il metodo array_sum tutti i voti e poi dividendoli per la lunghezza dell'array stesso
                    echo ' / ' . array_sum($alunno['voti']) / count($alunno['voti']);

                    /* Oppure si può fare così 

                    $somma = array_sum($alunno['voti']);
                    $media = $sum / count($alunno['voti']);

                    e nel primo echo aggiungere . ' ' . $media 

                    */

                ?>
            </h3>
        </div> <?php } ?>
    

</body>
</html>