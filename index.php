<?php

$parola = $_GET['parolaDaCensurare'];

$testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$parolaCensurata = str_replace($parola, "***", $testo);

// echo $testo;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore</title>
  </head>
  <body>
    <form class="" action="index.php" method="get">
      <input type="text" name="parolaDaCensurare" value="">
      <input type="submit" value="Censura">
    </form>
    <h2><?php echo $parolaCensurata ?></h2>
  </body>
</html>
