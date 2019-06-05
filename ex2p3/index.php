<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex2p3</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex2p3</h1>
        <p class="lead">Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
          Tant que la première variable n'est pas supérieure à 20 :
          multiplier la première variable avec la deuxième
          afficher le résultat
          incrementer la première variable.
        </p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
      $number= 4;
      for($initiale=0; $initiale<= 20;$initiale++){
        echo '<p>le résultat est : '.$initiale*$number.'</p>';
      }
      ?>
    </main>
    <!-- footer -->
    <footer>

    </footer>
  </div>
  <!-- scripts JQuery Popper et Bootstrap-->
  <script src="assets/js/jquery-3.4.0.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- mon script principal -->
  <script src="assets/js/main.js"></script>
</body>
</html>
