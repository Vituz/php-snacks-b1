<?php 
/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Officiis suscipit est et assumenda impedit facilis dolorem, numquam omnis mollitia alias, 
reiciendis placeat minima voluptatum voluptatibus quod recusandae maiores facere exercitationem.
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Officiis suscipit est et assumenda impedit facilis dolorem, numquam omnis mollitia alias, 
reiciendis placeat minima voluptatum voluptatibus quod recusandae maiores facere exercitationem.';

$newList = explode('.', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    
    <?php for ($i=0 ; $i < count($newList) ; $i++) {
    
    $par = $newList[$i];
    ?>
       
        <p><?php echo $par ?></p>

    <?php } ?>


</body>
</html>