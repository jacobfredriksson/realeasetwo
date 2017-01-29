<div id="message-box" class="message-box">
  <div>
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
  </div>
</div>

<?php

  if(isset($_POST['send'])) {
      foreach($_POST as $k => $v) {
        $clean[$k] = mysqli_real_escape_string($db, $v);
      }

    $sql = "
          INSERT INTO messages (message, fullname, phone, email)
          VALUES
          ('{$clean['message']}',
          '{$clean['fullName']}',
          '{$clean['phone']}',
          '{$clean['email']}')
        ";

          if (mysqli_query($db, $sql)) {
            header('Location: ?page=index');
          } else {
            echo "Något gick fel! Försök igen!";
          }
          $to = "jacobfredriksson@live.se";
          $from = $_POST['email'];
          $fullname = $_POST['fullName'];
          $phone = $_POST['phone'];
          $message = $fullname. "\n\n" .$phone . "\n\n" . " skrev följande:" . "\n\n" . $_POST['message'];
          $headers = "From:" . $from;
          mail($to,$subject,$message,$headers);
        }
        mysqli_close($db);
  ?>
