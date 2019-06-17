<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part6 exo4</title>
  </head>
  <body>
    <p>Faire une page index.php. 
      Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
      index.php?language=PHP&server=LAMP
    </p>
    <!-- Le & dans le lien a été remplacé par &amp; pour que le code passera la validation W3C -->
    <a href='index.php?=PHP&amp;server=LAMP'>Hi</a>

    <?php
    if (isset($_GET['language']) && isset($_GET['server'])){ ?>
    <p><?= $_GET['language'] . ' ' . $_GET['server'] ?></p>
      <?php } else { ?>
    <p>Afficher le language et le server </p>
      <?php }
    ?>
  </body>
</html>
