<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part6 exo5</title>
  </head>
  <body>
    <p>Faire une page index.php. 
      Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
      index.php?week=12
    </p>
    <a href='index.php?week=12'>Hi</a>

    <?php 
    if(isset($_GET['week'])){ ?>
      <p> <?= $_GET['week'] ?></p>
    <?php } else { ?>
      <p>Afficher 'week' </p>
    <?php }
    ?>
  </body>
</html>