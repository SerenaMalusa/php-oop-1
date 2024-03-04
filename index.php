<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/db/Productions.php';

// var_dump($the_fellowshio_of_the_ring, $black_mirror);
// var_dump($the_fellowshio_of_the_ring->title, $the_fellowshio_of_the_ring->get_vote());
// var_dump($black_mirror->title, $black_mirror->get_vote());

// $productions = [
//     $the_fellowshio_of_the_ring,
//     $black_mirror
// ];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <?php include __DIR__ . '/Partials/Html_head.php' ?>
</head>

<body>

    <div class="container">

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Title</th>
                    <th scope="col">Original language</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Best Seller</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productions as $production) : ?>
                    <?php include __DIR__ . '/Partials/Production_row.php' ?>
                <?php endforeach; ?> </tbody>
        </table>

    </div>

</body>

</html>