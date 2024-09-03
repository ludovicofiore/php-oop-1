<?php

class Genre{
    public $name;

    function __construct($_name) {
        $this->name = $_name;
    }
}

// $genres = [
//     new Genre('azione'),
//     new Genre('avventura'),
//     new Genre('thriller'),
// ];
