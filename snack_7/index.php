<?php 

/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$studenti = [
    [
        'nome' => 'Marco',
        'cognome' => 'Bianchi',
        'voti' => [
            7,
            9,
            5,
            6,
            7,
        ],
    ],
    [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'voti' => [
            6,
            7,
            7,
            6,
            8,
        ],
    ],
    [
        'nome' => 'Elisa',
        'cognome' => 'Verdi',
        'voti' => [
            8,
            9,
            4,
            8,
            7,
        ],
    ],
   [
        'nome' => 'Sara',
        'cognome' => 'Neri',
        'voti' => [
            6,
            9,
            6,
            6,
            8,
        ],
    ],
    [
        'nome' => 'Alessia',
        'cognome' => 'Blu',
        'voti' => [
            5,
            6,
            5,
            6,
            7,
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>

<?php for ($i=0; $i < count($studenti) ; $i++) { 
    
    $studente = $studenti[$i];
    $somma_voti = array_sum($studente['voti']);
    $media = $somma_voti / count($studente['voti']);

    ?>

    <h2><?php echo $studente['nome'] ?> <?php echo $studente['cognome'] ?></h2>
    <span>Media voti: <?php echo $media; ?></span>


<?php } ?>
    
</body>
</html>