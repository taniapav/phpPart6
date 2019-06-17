<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP part6 exo2</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe
      et si c'est le cas l'afficher sinon le signaler :
      index.php?lastname=Nemare&firstname=Jean
    </p>
    <!-- Le & dans le lien a été remplacé par &amp; pour que le code passera la validation W3C -->
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Hello !</a>
 <!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et
       si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean -->

    <?php
    /* Fonction isset() teste si une variable existe. */
    if (isset($_GET['age']) && isset($_GET['firstname']) && isset($_GET['lastname'])) { //isset test directement la présence d'un paramètre et permet d'envoyer un message si il n'existe pas.
     echo  $_GET['age'] ; echo $_GET['firstname']; echo $_GET['lastname'];
   } else { ?>
   	<p>Il faut renseigner un age !</p>
   <?php  }
    ?>
  </body>
</html>
