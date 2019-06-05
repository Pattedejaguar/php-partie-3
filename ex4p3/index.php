<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex4p3</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">

  </div>
  <!-- header -->
  <header>
    <div class="jumbotron">
      <h1 class="display-3">PHP ex4p3</h1>
      <p class="lead">Créer une variable et l'initialiser à 1.
        Tant que cette variable n'atteint pas 10, il faut : l'afficher l'incrementer de la moitié de sa valeur
      </p>
      <hr class="my-2">
    </header>
    <!-- main -->
    <main class="text-center">
      <?php
        // <!-- utilisation d'un tableau array -->
      for($var=1; $var<=10;$var=$var+($var/2)){
        echo '<p> la valeur est de : '.$var.'</p>';
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
