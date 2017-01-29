<h1> Portfolio </h1>
<div class="container">
  <aside class="aside-container">
    <article>
      <h2> Individuellt Projekt </h2>
      <div class="admin" id="proj-one-text">
        <?php
          $query = 'SELECT text FROM textcontent WHERE id = "proj-one-text"';
          $result = mysqli_query($db, $query);
          $row = $result->fetch_row();
          $text = (string)$row[0];
          echo $text;
        ?>
      </div>
    </article>
  </aside>

  <aside class="aside-container">
    <article>
      <h2> Grupp projekt </h2>
      <div class="admin" id="proj-two-text">
        <?php
          $query = 'SELECT text FROM textcontent WHERE id = "proj-two-text"';
          $result = mysqli_query($db, $query);
          $row = $result->fetch_row();
          $text = (string)$row[0];
          echo $text;
        ?>
      </div>
    </article>
  </aside>
