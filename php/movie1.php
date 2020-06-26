<!DOCTYPE html>
<html>
<head>
  <?php require '../templates/header.php' ?>
  <title>Cinéma Rodia - Haut-Cloques</title>
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
        <!--  Afficher une date au format jj/mm/aaaa -->
        Date du jour : 
        <time datetime="<?=date('Y-m-d') ;?>">
            <?php 
            // echo date('d/m/Y') ;
            ?>
            <?=date('d/m/Y'); ?>
        </time>
      </p>
      <p>
        <?php 
            // On aimerait créer un tableau avec les horaires d'ouverture
            $hoursFilms = [
                10 => true, // on diffuse
                12 => false, // on ne diffuse pas
                14 => true, // on diffuse
                16 => false, // on ne diffuse pas
                18 => true, // on diffuse
                20 => false, // on ne diffuse pas
                22 => true, // on diffuse
                24 => false // on ne diffuse pas
            ];
        ?>
        <table>
            <thead>
                <th>Horaire</th>
                <th>Diffuse ?</th>
            </thead>
            <tbody>  
                <?php foreach($hoursFilms as $hour=>$diffusion): ?>  
                <?php 
                    // Solution 1
                    // $hasDiffusion = 'Non';
                    // if ($diffusion) {
                    //     $hasDiffusion = 'Oui';
                    // }

                    // Solution 2
                    $hasDiffusion = $diffusion ? 'Oui': 'Non';
                ?>            
                <tr>
                    <td><?=$hour ?>H</td>
                    <td><?=$hasDiffusion ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      </p>
    </section>
  </main>
  <?php require '../templates/footer.php'; ?>
</body>
</html>
