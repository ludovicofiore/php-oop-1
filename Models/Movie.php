<?php
require_once __DIR__ . '/Genre.php';

class Movie {
    // attributi
    public $title;
    public $year;
    public $actors = [];
    public $genre;

    // costruttore
    function __construct($_title, $_year, $_actors, Genre $_genre) {
        $this->title = $_title;
        $this->year = $_year;
        $this->actors = $_actors;
        $this->genre = $_genre;
    }


    public function printTitle(){
        
        echo $this->title;
    }

    public function printYear(){
        echo $this->year;
    }

    public function printActors(){
        $list = '<ul>';
        
        
        foreach($this->actors as $actor){
            $list .= "<li>$actor</li>";
            
        }
        $list .= '</ul>';
        echo $list;

    }

    public function printGenre(){
        echo $this->genre->name;
    }
}



// istanze
// $movie1 = new Movie('Rocky I', 1976, ['Sylvester Stallone', 'Talia Shire', 'Burt Young']);
// $movie2 = new Movie('Rocky II', 1979, ['Sylvester Stallone', 'Carl Weathers', 'Burgess Meredith']);
// $movie3 = new Movie('Rocky III', 1982, ['Sylvester Stallone', 'Carl Weathers', 'Mr. T']);


// $movies = [
//     new Movie('Rocky I', 1976, ['Sylvester Stallone', 'Talia Shire', 'Burt Young'], new Genre('azione')),
//     new Movie('Rocky II', 1979, ['Sylvester Stallone', 'Carl Weathers', 'Burgess Meredith'], new Genre('avventura')),
//     new Movie('Rocky III', 1982, ['Sylvester Stallone', 'Carl Weathers', 'Mr. T'], new Genre('thriller')),
// ];