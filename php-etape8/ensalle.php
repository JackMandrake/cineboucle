<?php

// Dans cette réorganisation
// 1 - On va d'abord préparer les données à afficher

// créer un tableau (array) PHP contenant la liste de 5 films actuellement en salle
// On voit un nouveau type de donnée : tableau (array)
// Un tableau contient plusieurs données, nommées des éléments
// chaque élément est composé d'une clé, et d'une valeur
$movies = [
    'Interstellar'=>'movie0.php', // Index : chemin vers le fichier 1
    'Batman'=>'movie1.php', // Index : chemin vers le fichier 2
    'Seul sur mars'=>'movie2.php',  // Index : chemin vers le fichier 3
    'Avengers'=>'movie3.php',  // Index : chemin vers le fichier 4
    'Seigneur des anneaux'=>'movie4.php',  // Index : chemin vers le fichier 5
];

// Etape 6
// On ajoute un 6e film dans le tableau
$movies[] = 'Le sixième sens'; // index 5
// On ajoute un 7eme film, et on voit si on doit modifier la boucle
$movies[] = 'La 7e compagnie';

// Challenge E02
// On crée le tableau des salles de cinéma
$rooms = [
    'Athéna', // => index 0
    'Dyonisos', // => index 1
    'Hadès', // => index 2
    'Zeus' // => index 3
];

// 2 - Et à la toute fin, on va inclure les templates permettant l'affichage
require 'templates/header.tpl.php';
require 'templates/ensalle.tpl.php';
require 'templates/footer.tpl.php';
