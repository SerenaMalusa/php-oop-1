<?php

require_once __DIR__ . '/../Models/Production.php';
require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/Serie.php';
require_once __DIR__ . '/../Models/FirstAirDate.php';

try {
    $productions = [
        new Movie([new Genre('fantasy'), new Genre('adventure')], 'The fellowshp of the ring', 'English', '10', 377027325, '71.29', '19/12/2001'),
        new Serie([new Genre('scy-fi'), new Genre('distopic')], 'Black Mirror', 'English', 9, 6, '04/12/2011'),
        new Serie([new Genre('detective'), new Genre('comedy'),], 'Don Matteo', 'Italian', 5, 13),
        new Movie([new Genre('historical'), new Genre('dramatic'), new Genre('war')], 'La vita è bella', 'Italian', 10, 118920, 124, 1997)
    ];
} catch (Exception $e) {

    // echo $error_message;
    header('Location: ./ErrorAlert.php');

    session_start();
    $_SESSION['error_message'] = $e->getMessage();
    // var_dump($_SESSION['error_message']);
    exit;
}
