<?php

class Production
{

    public $type;
    public $title;
    public $og_language;
    public $vote;
    public $is_best_seller;

    function __construct(
        string $type,
        string $title,
        string $language,
        $vote = false
    ) {
        $this->type = $type;
        $this->title = $title;
        $this->og_language = $language;
        $this->vote = $vote;
        $this->set_best_seller();
    }

    public function set_best_seller()
    {
        $this->is_best_seller = $this->vote >= 9 ? true : false;
    }

    public function get_vote()
    {
        if ($this->vote == false) {
            return 'there are no votes for this title yet.';
        } else {
            return $this->vote;
        }
    }
}

$the_fellowshio_of_the_ring = new Production('movie', 'The fellowship of the ring', 'English', 10);

$black_mirror = new Production('serie', 'BlackMirror', 'english');

var_dump($the_fellowshio_of_the_ring, $black_mirror);

var_dump($the_fellowshio_of_the_ring->title, $the_fellowshio_of_the_ring->get_vote());
var_dump($black_mirror->title, $black_mirror->get_vote());

?>

<!DOCTYPE html>
<html lang="it">

<head>

    <!-- characters and viewport tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO tags -->
    <meta name="author" content="Serena Malusà" />
    <meta name="description" content="VueJs exercise" />

    <!-- title and icon -->
    <title>PHP OOP</title>
    <link rel="icon" href="./imgs/logo-small.ico" />

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

</body>

</html>