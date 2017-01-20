
<form action="" method="post">
  <label > Namn: </label>
  <input placeholder="För - Efternamn" name="fullName" required="true"/>
  <label > Telefonnummer: </label>
  <input placeholder="telefon nr" name="phone" required="true"/>
  <label > E-mail </label>
  <input placeholder="email" name="email" required="true"/>
  <label> Meddelande: </label>
  <textarea placeholder="Ditt meddelande" name="message"> </textarea>
  <input type="submit" name="send"/>
</form>


<?php
 include ('config.php');

if ($db->connect_error) {
  die('misslyckades: ' . $db->connect_error);
}

$message = mysqli_real_escape_string($db, $_POST['message']);
$fullName = mysqli_real_escape_string($db, $_POST['fullName']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);

$sql = "INSERT INTO messages (message, fullname, phone, email)
        VALUES ('$message', '$fullName', '$phone', '$email')";

if ($db->query($sql) === TRUE) {

  //echo "JOVARS! GICK JU BRA!";
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
