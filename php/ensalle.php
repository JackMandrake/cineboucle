<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Cinéma Rodia</h1>
    <!-- Nav -->
    <?php 
        /**
         * Include
         */
        // include '../template/s/navs.php';

        /**
         * Require
         */
        require '../templates/nav.php';
    ?>
  </header>
  <main>
    <section>
      <p>
          <?php 
            // $movies = [
            //     'Interstellar', // Index : 0
            //     'Batman', // Index : 1
            //     'Seul sur mars',  // Index : 2
            //     'Avengers',  // Index : 3
            //     'Seigneur des anneaux',  // Index : 4
            //     'Matrix', // Index : 5,
            //     '5e element', // 
            //     'Bienvenue chez ch\'tis',
            //     'Grrr',
            //     'Tree of life',
            //     'Jurassic park',
            //     'Inception',
            //     'Replicant',
            //     'Retour vers le futur',
            //     'Blade runner',
            //     'Ghost in the Shell'
            // ];
            $movies = [
                'Interstellar'=>'movie0.php', // Index : chemin vers le fichier 1
                'Batman'=>'movie1.php', // Index : chemin vers le fichier 2
                'Seul sur mars'=>'movie2.php',  // Index : chemin vers le fichier 3
                'Avengers'=>'movie3.php',  // Index : chemin vers le fichier 4
                'Seigneur des anneaux'=>'movie4.php',  // Index : chemin vers le fichier 5
            ];
            
            // Nommer les films en : movie{$index}.php

            // Combien de films dans mon tableau ?
            // $totalFilms = count($movies);
          ?>   
          <!--  Affichage de la liste des films -->
          <ul>
            <?php             
                // $indexMovie++ ==> $indexMovie = $indexMovie + 1;
                // fonction PHP count
                // for($indexMovie = 0; $indexMovie < $totalFilms; $indexMovie++) {
                //     echo '<li>'.$movies[$indexMovie].'</li>';
                // }
                foreach($movies as $nomFilm => $fichierFilm) {
                    # Affichage de la liste des films
                    // echo '<li><a>'.$nomFilm.'</a></li>';

                    // Option 1
                    // echo "<li><a href='{$fichierFilm}'>{$nomFilm}</a></li>";

                    // Option 2
                    echo '<li><a href="'. $fichierFilm. '">'.$nomFilm. '</a></li>';
                }
            ?>
          </ul>

      </p>
    </section>
  </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
