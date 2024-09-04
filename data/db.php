<?php 
require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/Genre.php';


$movies = [
    new Movie('Rocky I', 1976, ['Sylvester Stallone', 'Talia Shire', 'Burt Young'], new Genre('azione')),
    new Movie('Rocky II', 1979, ['Sylvester Stallone', 'Carl Weathers', 'Burgess Meredith'], new Genre('avventura')),
    new Movie('Rocky III', 1982, ['Sylvester Stallone', 'Carl Weathers', 'Mr. T'], new Genre('thriller')),
];