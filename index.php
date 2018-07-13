
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>accueil</title>
  <meta name="description" content="exercice de site e-commerce">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php
  include "templates/nav.php";
  include "templates/header.php";
   ?>
  <main>
    <?php include "products.php";
   ?>
  <!-- présentation des produits -->
    <div class="carte"> <!--class="card d-flex flex-wrap" style="width: 18rem;"> -->
      <div class="card-body">
        <h5 class="card-title text-center"><?php  echo $products[0]["name"];?> </h5>
        <h6 class="card-subtitle mb-2 text-muted text-center"><?php  echo $products[0]["category"];?></h6>
        <p class="card-text"><?php  echo $products[0]["description"];?></p>
        <p><?php echo $products[0]["price"]?> €</p>
        <a href="presentation.php" class="card-link">présentation du produit</a>
      </div>
      <div class="carte"> <!--class="card" style="width: 18rem;">-->
        <div class="card-body">
          <h5 class="card-title text-center"><?php  echo $products[1]["name"];?> </h5>
          <h6 class="card-subtitle mb-2 text-muted text-center"><?php  echo $products[1]["category"];?></h6>
          <p class="card-text"><?php  echo $products[1]["description"];?></p>
          <p><?php echo $products[1]["price"]?> €</p>
          <a href="presentation.php" class="card-link">présentation du produit</a>
      </div>
      <div class="carte">
        <div class="card-body">
          <h5 class="card-title text-center"><?php  echo $products[2]["name"];?> </h5>
          <h6 class="card-subtitle mb-2 text-muted text-center"><?php  echo $products[2]["category"];?></h6>
          <p class="card-text"><?php  echo $products[2]["description"];?></p>
          <p><?php echo $products[2]["price"]?> €</p>
          <a href="presentation.php" class="card-link">présentation du produit</a>
      </div>
      <div class="carte">
        <div class="card-body">
          <h5 class="card-title text-center"><?php  echo $products[3]["name"];?> </h5>
          <h6 class="card-subtitle mb-2 text-muted text-center"><?php  echo $products[3]["category"];?></h6>
          <p class="card-text"><?php  echo $products[3]["description"];?></p>
          <p><?php echo $products[3]["price"]?> €</p>
          <a href="presentation.php" class="card-link">présentation du produit</a>
      </div>
      <div class="carte">
        <div class="card-body">
          <h5 class="card-title text-center"><?php  echo $products[4]["name"];?> </h5>
          <h6 class="card-subtitle mb-2 text-muted text-center"><?php  echo $products[4]["category"];?></h6>
          <p class="card-text"><?php  echo $products[4]["description"];?></p>
          <p><?php echo $products[4]["price"]?> €</p>
          <a href="presentation.php" class="card-link">présentation du produit</a>
      </div>
      <div class="carte">
        <div class="card-body">
          <h5 class="card-title text-center"><?php  echo $products[5]["name"];?> </h5>
          <h6 class="card-subtitle mb-2 text-muted text-center"><?php  echo $products[5]["category"];?></h6>
          <p class="card-text"><?php  echo $products[5]["description"];?></p>
          <p><?php echo $products[5]["price"]?> €</p>
          <a href="presentation.php" class="card-link">présentation du produit</a>
      </div>
  </main>

<?php
include "templates/footer.php";
 ?>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
