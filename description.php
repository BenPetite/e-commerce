<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>produit</title>
  </head>
  <body>
    <?php include "templates/nav.php"; include "templates/header.php"; ?>
<article class="">
  <?php
    foreach ($products as $key => $value) {
      echo $key." : ".$value;
    }
   ?>

</article>

    <?php include "templates/footer.php"; ?>
  </body>
</html>
