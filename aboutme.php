
    <div class="container">
      <article class="mainContent">
        <header>
          <h1>Personligt brev</h1>
        </header>
          <p class="info admin" id="pl-text">
            <?php
            $query = 'SELECT text FROM textcontent WHERE id = "pl-text"';
            $result = mysqli_query($db, $query);
            $row = $result->fetch_row();
            $text = (string)$row[0];
            echo $text;
            ?>
          </p>

          <div class="admin" id="personal-letter-text"><p><b></b><br>
            <?php
            $query = 'SELECT text FROM textcontent WHERE id = "personal-letter-text"';
            $result = mysqli_query($db, $query);
            $row = $result->fetch_row();
            $text = (string)$row[0];
            echo $text;
            ?>
          </p></div><hr>
      </article>
    </div>
