<?php session_start(); ?>
  <h1>Logga in</h1>

  <form action="" method="post">
    <label for="username">Användarnamn:</label>
    <input type="text" name="username" />

  	<label for="password">Lösenord:</label>
  	<input type="password" name="password" />

    <input type="submit" value="Logga in" />
  </form>


<?php

include 'config.php';

if (isset ($_POST['username'], $_POST['password'])){

  $username = $_POST['user'];
  $password = $_POST['password'];
  $query = "SELECT user, password FROM admin WHERE user = '".$username."' AND password = '".$password."'";

  $result = mysqli_query($db, $query);

  if(mysqli_num_rows($result) > 0){
    $_SESSION['admin'] = TRUE;
    header('Location: http://jacobfredriksson.se');
    exit();
  } else {
    echo "<h1>Fel användarnamn eller lösenord.</h1>";
  }
}
?>

<footer class="mainFooter">
  <!-- this is where the plugin take place -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <div class="addthis_inline_share_toolbox_t0le"></div>
</footer>
