
<?php 
/*Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$league = [
        [
        'home' => 'Boston Celtics',
        'visitor' => 'Chicago Bulls',
        'hPoints' => '58',
        'vPoints' => '76',
        ],
        [
        'home' => 'Atlanta Hawks',
        'visitor' => 'Denver Nuggets',
        'hPoints' => '69',
        'vPoints' => '70',
        ],
        [
        'home' => 'Golden State Warriors',
        'visitor' => 'Dallas Mavericks',
        'hPoints' => '53',
        'vPoints' => '63',
        ],
        [
        'home' => 'Cleveland Cavaliers',
        'visitor' => 'Detroit Pistons',
        'hPoints' => '66',
        'vPoints' => '59',
        ],
    ];

var_dump($league);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
    <h1>Risultati</h1>

    <?php for ($i=0; $i < count($league) ; $i++) { 
        
        $match = $league[$i];
        ?>
        
        <h2>
        <span><?php echo $match['home'] ?></span> | <span><?php echo $match['visitor'] ?></span>
        <span><?php echo $match['hPoints'] ?></span> - <span><?php echo $match['vPoints'] ?></span>
        </h2>

    <?php } ?>

    
</body>
</html>

