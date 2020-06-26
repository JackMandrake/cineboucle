<!DOCTYPE html>
<html>
<head>
  <?php require '../templates/header.php' ?>
  <title>Cinéma Rodia - Tarifs</title>
</head>
<body>
  <header>
    <h1>Cinéma Rodia</h1>
    <!-- Nav -->
    <?php 
        require '../templates/nav.php';
    ?>
  </header>
  <main>
    <section id="tarifs">
      <h2>Tarifs</h2>
        <div class="flex">
          <?php 
          $tableauAssocTarifs = [
            'Tarif Plein'=>8.3,
            'Tarif Réduit'=>6.8,
            'Tarif Enfant'=>4.5,
            'Supplément 3D'=>1
          ];
          // var_dump($tableauAssocTarifs['Tarif Plein']);
          ?>
          <ul>
            <!-- <li>Tarif Plein : 8,30 &euro;</li>
            <li>Tarif Réduit : 6,80 &euro;</li>
            <li>Tarif Enfant : 4,50 &euro;</li>
            <li>Supplément 3D : 1 &euro;</li> -->
            <?php 
              foreach ($tableauAssocTarifs as $nomTarif => $valueTarif) {
                # Affiche les tarifs des tickets
                echo '<li>'.$nomTarif .' : '.$valueTarif. ' €</li>';
              }
            ?>
          </ul>

          <?php 
            $tarifsAbo = [
              'Abonnement 5 places' => 10,
              'Abonnement 5 places -25ans' => 20,
            ];
          ?>
          <ul>
            <!-- <li>Abonnement 5 places : -10%</li>
            <li>Abonnement 5 places -25ans : -20%</li> -->
            <?php 
              foreach ($tarifsAbo as $nomTarifAbo => $valueTarifAbo) {
                # Affiche l'abonnement 5 places avec pourcentage de réduction
                echo '<li>'. $nomTarifAbo . ' : -' .$valueTarifAbo. '%</li>';
              }
            ?>
          </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
          Tarif Enfant pour les - de 14 ans
        </p>
      
      <h2>Selon votre âge</h2>
      <p>
        <?php 
          $montant = 0;
          // TARIF PLEIN : 8,30 €
          // TARIF REDUIT : 6,80 € (pour +60ans et -16ans)
          // TARIF ENFANT : 4,50 € (pour -14ans)
          // TON CODE ICI
          $age = 43;
          $tarifPlein = 8.3;
          $tarifReduit = 6.8;
          $tarifEnfant = 4.5;       
          if ($age<14) { // si true
            // TARIF ENFANT : 4,50 € (pour -14ans)
            $montant = $tarifEnfant;		
          } elseif ($age <16 || $age >=60) {
            // TARIF REDUIT : 6,80 € (pour +60ans et -16ans)
            $montant = $tarifReduit;
          } else {
            $montant = $tarifPlein;
          }

          //var_dump($montant);
          // echo $montant . ' €';
          echo 'Si vous avez : ' .$age . ' ans, le montant sera de : ' . $montant. ' €';
        ?>
      </p>
      <p>
        <?php 
        // Afficher les $âges de 1 à 99 + tarif correspondant.
        // Solution 1 : Boucle while
        $age = 1;
        while($age <= 99) {
          echo '<br />';

          if ($age<14) { // si true
            // TARIF ENFANT : 4,50 € (pour -14ans)
            $montant = $tarifEnfant;		
          } elseif ($age <16 || $age >=60) {
            // TARIF REDUIT : 6,80 € (pour +60ans et -16ans)
            $montant = $tarifReduit;
          } else {
            $montant = $tarifPlein;
          }

          // Tarif pour cinq places de cinéma
          $prixAbo = $montant*5;

          // On applique une ristourne en fonction de l'âge
          if ($age < 25) {
            // Si j'ai moins de 25 ans, j'appliquer une
            // ristourne de -20%
            $ristourneAbo = 20;
          } else {
            // Sinon, j'applique une ristourne de -10%
            $ristourneAbo = 10;
          }

          $prixAboAvecRistourne = $prixAbo - $prixAbo*$ristourneAbo/100;

          // € 8.3

          // On affiche le tarif en fonction de l'âge
          echo 'Si vous avez : ' .$age . ' ans, le montant sera de : ' . $montant. ' €' . ', Tarif Abonnement + ristourne de ' .$ristourneAbo. ' % sera de '. $prixAboAvecRistourne . ' €';

          // Incrementation 1
          $age = $age + 1;

          echo '<br />';

          // Incrémentation 2
          // $nombre += 1;

          // Incrémentation 2
          // $nombre++;
        }
        ?>
      </p>

      <p>
        <?php 
           // Tableau est une liste d'éléments
          //  $nomVariable = ['Val1', 'val2', ];
           $rooms = [
             'Valeur 1', // index : 0
             'Valeur 2' // index : 1
           ];
           echo $rooms[0];
           echo $rooms[1];

          //  var_dump($rooms);

          //  $numSalle = 0;
          //  while($)
        ?>
        <ul>
          <li><?php echo $rooms[0] ?></li>
          <li><?php echo $rooms[1] ?></li>
          <li>...</li>
          <li></li>
          <li></li>
        </ul>
      </p>
      <h3>Consommation</h3>
      <?php 
      $extras = [
        // indexExtra : 0
        // valueExtra : tableau 0
        [
          'Popcorn', // index 0 0
          'L', // index 0 1
          2.9 // index 0 2
        ],

        // indexExtra : 1
        // valueExtra : tableau 1
        [
          'Popcorn', // index 1 0
          'XL', // index 1 1
          4 // index 1 2
        ],
        
        [
          'Chips', // index 2 0
          '50g', // index 2 1
          2.5 // index 2 2 
        ],
        [
          'M&M\'s',
          '100g',
          4
        ],
        [
          'Soda',
          '33cl',
          3.2
        ],
        [
          'Evian',
          '33cl',
          3
        ]
      ];

      //var_dump($extras[0]);

      //echo $extras[0];

      ?>
      <p>
        <!-- Consommation 1 : volume + montant 
        Conso : <?php echo $extras[0][0] ?> <br />
        Volume : <?php echo $extras[0][1] ?> <br />
        Montant : <?php echo $extras[0][2] ?> <br />
        -->
      </p>

      <p>
        <!-- Consommation 2 : volume + montant 
        Conso : <?php echo $extras[1][0] ?> <br />
        Volume : <?php echo $extras[1][1] ?> <br />
        Montant : <?php echo $extras[1][2] ?> <br />
        -->
      </p>

      <?php 
        // Affichage avec foreach
        foreach ($extras as $indexExtra => $valueExtra) {
          # Je boucle sur le premier
          //var_dump($indexExtra);
          //var_dump($valueExtra[0]);
          echo '<p>';
          echo 'Conso : ' . $valueExtra[0]. '<br >';
          echo 'Volume : ' . $valueExtra[1]. '<br >';
          echo 'Montant : ' . $valueExtra[2]. '<br >';
          echo '</p>';
        }
      ?>

      <?php
        for($indexExtra=0; $indexExtra<6; $indexExtra++) {
          echo '<p>';
          echo 'Conso : ' . $extras[$indexExtra][0]. '<br >';
          echo 'Volume : ' . $extras[$indexExtra][1]. '<br >';
          echo 'Montant : ' . $extras[$indexExtra][2]. '<br >';
          echo '</p>';
        }
      ?>

    </section>
  </main>
  <?php require '../templates/footer.php' ?>
</body>
</html>
