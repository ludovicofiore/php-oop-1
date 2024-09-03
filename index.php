<?php 
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Genre.php';
// require_once __DIR__ . '/data/db.php';
// var_dump($movies);
// var_dump($genres);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio oop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex">

        <?php foreach($movies as $movie): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">

                    <h5 class="card-title"><?php $movie->printTitle(); ?></h5>

                    <h6 class="card-subtitle mb-2 text-muted"><?php $movie->printYear() ?></h6>

                    <p class="card-text">Attori:
                       <?php $movie->printActors() ?>
                    </p>

                    <h6>Genere: <?php $movie->printGenre()  ?></h6>
                </div>
            </div>
        <?php endforeach; ?>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>