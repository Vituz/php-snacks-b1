<?php

$invitati = [
    'mario',
    'luca',
    'silvia',
    'sara'
];

var_dump($invitati);


$name = $_GET['name'];


if (in_array($name, $invitati)) {

    echo 'OK';
} else {
    echo 'KO';
}
