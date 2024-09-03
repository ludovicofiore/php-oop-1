<?php

class Movie {
    // attributi
    public $title;
    public $year;
    public $actors = [];

    // costruttore
    function __construct($_title, $_year, $_actors) {
        $this->title = $_title;
        $this->year = $_year;
        $this->actors = $_actors;
    }
}

// istanze
// $movie1 = new Movie('Rocky I', 1976, ['Sylvester Stallone', 'Talia Shire', 'Burt Young']);
// $movie2 = new Movie('Rocky II', 1979, ['Sylvester Stallone', 'Carl Weathers', 'Burgess Meredith']);
// $movie3 = new Movie('Rocky III', 1982, ['Sylvester Stallone', 'Carl Weathers', 'Mr. T']);

$movies = [
    new Movie('Rocky I', 1976, ['Sylvester Stallone', 'Talia Shire', 'Burt Young']),
    new Movie('Rocky II', 1979, ['Sylvester Stallone', 'Carl Weathers', 'Burgess Meredith']),
    new Movie('Rocky III', 1982, ['Sylvester Stallone', 'Carl Weathers', 'Mr. T']),
];