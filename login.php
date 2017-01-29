  <h1>Logga in</h1>
  <form action="" method="post">
    <label for="username">Användarnamn:</label>
    <input type="text" name="username" />

  	<label for="password">Lösenord:</label>
  	<input type="password" name="password" />

    <input type="submit" value="Logga in" />
  </form>


<?php

include ('config.php');

if (isset ($_POST['username'], $_POST['password'])){

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = sha1(mysqli_real_escape_string($db, $_POST['password']));
  $query = "SELECT username, password FROM Users WHERE username = '".$username."' AND password = '".$password."'";

  $result = mysqli_query($db, $query);

  if(mysqli_num_rows($result) > 0){
    $_SESSION['admin'] = TRUE;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (60 * 20);
    header('Location: http://jacobfredriksson.se');
    exit();
  } else {
    echo "<h1>Fel användarnamn eller lösenord.</h1>";
  }
}
?>
