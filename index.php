<?php session_start();?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <title> Jacob Fredriksson </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="Javascript/jquery.plugin.min.js" ></script>
    <script src="Javascript/jquery.countdown.min.js"> </script>
</head>

<body>
  <?php
    include('config.php');
    include_once ('nav.php');
    include ('message.php');
  ?>

<script src="Javascript/index.js"></script>
<script src="Javascript/easteregg.js"></script>

<?php
  if (isset($_SESSION['admin'])) {
      echo '<script src="Javascript/changetext.js" type="text/javascript"></script>';
  }
  $now = time();
  if ($now > $_SESSION['expire']) {
      session_destroy();
  }
?>
</body>
</html>
