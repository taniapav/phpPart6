<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part6 exo1</title>
  </head>
  <body>
    <p>Faire une page index.php.
      Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
      index.php?lastname=Nemare&firstname=Jean
      <p><?php
      if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
        echo 'Vraiment, ' . $_GET['firstname'] . ' ' . $_GET['lastname'] ;
      } else {
        echo 'ERROR';
      }
      ?> !</p>
  </body>
</html>
