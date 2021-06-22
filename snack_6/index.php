<?php
 
 /*
 Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 */

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>

</head>
<body>
    <div style="background-color: gray; width: 200px;">

    <?php for ($i=0; $i < count($db['teachers']) ; $i++) { ?>
      
    <h2>
    <span><?php echo $db['teachers'][$i]['name']; ?></span>
    <span><?php echo $db['teachers'][$i]['lastname']; ?></span>
    </h2>

    <?php } ?>

    </div>

    <div style="background-color: green; width: 200px;">

    <?php for ($i=0; $i < count($db['pm']) ; $i++) { ?>
      
    <h2>
    <span><?php echo $db['pm'][$i]['name']; ?></span>
    <span><?php echo $db['pm'][$i]['lastname']; ?></span>
    </h2>

    <?php } ?>

    </div>
</body>
</html>