<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP part6 exo1</title>
    </head>
    <body>
      <p>Faire une page index.php.
        Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
        index.php?startDate=2/05/2016&endDate=27/11/2016
      </p>
        <!-- Le & dans le lien a été remplacé par &amp; pour que le code passera la validation W3C -->
        <a href='index.php?startDate=2/05/2016&amp;endDate=27/11/2016'>Hi</a>
        <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) //isset test directement la présence d'un paramètre et permet d'envoyer un message si il n'existe pas.
        { ?>
         <p><?= $_GET['startDate'] ?></p>
         <p><?= $_GET['endDate'] ?></p>
         <?php
        } else {
         echo 'Il faut renseigner les dates !';
         }
         ?>

    </body>
</html>
