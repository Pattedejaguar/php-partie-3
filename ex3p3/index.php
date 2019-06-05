<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex3p3</title>
</head>
<body>
  <!-- container Bootstrap -->
      <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex3p3</h1>
          <p class="lead">Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieure ou égale à 10 : multiplier la première variable avec la deuxième
            afficher le résultat
            décrémenter la première variable
          </p>
          <hr class="my-2">
        </div>
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
      $random= rand(1,100);
      for($initiale=100; $initiale>= 10;$initiale--){
        echo '<p>le résultat est : '.$initiale*$random.'</p>';
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
