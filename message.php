
<form action="" method="post" class="message-form">
  <label > Namn: </label>
    <input placeholder="För - Efternamn" name="fullName" />
  <label > Telefonnummer: </label>
    <input placeholder="telefon nr" name="phone" />
  <label > Email: </label>
    <input placeholder="email" name="email" />
  <label> Meddelande: </label>
    <textarea placeholder="Ditt meddelande" name="message" rows="3"> </textarea>
    <input class="message-button" type="submit" name="close" value="Stäng" id="close-message-box"/>
    <input class="message-button" type="submit" name="send"/>

</form>


<?php
  include ('config.php');

  if(isset($_POST['send'])) {

    if (!$db) {
      die("Något gick fel!: " . mysqli_connect_error());
    }

// gör en foreach real escape string ala tobbes gladaget.
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $sql = "INSERT INTO messages (message, fullname, phone, email)
        VALUES ('$message', '$fullName', '$phone', '$email')";

        if (mysqli_query($db, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
      }
      mysqli_close($db);
?>
