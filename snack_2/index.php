<?php 
/* 
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

var_dump($name, $mail, $age);

$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

/* 
^[_a-z0-9-]+(\.[_a-z0-9-]+)*
Ci serve per andare a controllare che nella prima parte del (presunto) indirizzo email 
ci siano solo caretteri alfa-numerici, il punto, il trattino ed il trattino basso; 

[a-z0-9-]+(\.[a-z0-9-]+)*
Ci serve per andare a controllare che nel dominio del sito ci siano solo caratteri alfanumerici, il punto ed il trattino;

(\.[a-z]{2,})
Ci serve per andare a controllare che nel TLD (Top Level Domain) ci siano solo caratteri alfa-numerici, 
il puntino e che ci siano almeno 2 caratteri.
*/

// var_dump(preg_match($pattern, trim.($mail)));

if (strlen($name) > 3 && preg_match($pattern, trim.($mail)) && intval($age) != 0){
    $result = 'Accesso Riuscito!';
} else {
    $result = 'Accesso Negato!';
}

echo $result;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
</body>
</html>