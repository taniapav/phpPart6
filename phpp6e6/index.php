<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part6 exo1</title>
  </head>
  <body>
    <p>Faire une page index.php. 
      Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
      index.php?building=12&room=101
    </p>
    <!-- Le & dans le lien a été remplacé par &amp; pour que le code passera la validation W3C -->
    <a href='index.php?building=12&amp;room=101'>Hi</a>

    <?php if (isset($_GET['building']) && isset($_GET['room'])) { ?>
      <p><?= $_GET['building'] . ' ,' . $_GET['room'] ?></p>
    <?php } else { ?>
      <p>Afficher 'building' et 'room' </p>
    <?php }
    ?>
  </body>
</html>