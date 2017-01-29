
  <div class="container">
    <div class="content">
      <article class="mainContent">
        <header>
          <h1> Jacob Fredriksson <br> Front End Developer </h1>
        </header>
          <div class="admin" id="welcome-text">
            <?php
              $query = 'SELECT text FROM textcontent WHERE id = "welcome-text"';
              $result = mysqli_query($db, $query);
              $row = $result->fetch_row();
              $text = (string)$row[0];
              echo $text;
            ?>
          </div>
      </article>
    </div>
  </div>

  <aside class="aside-container" id="internship">
    <article>
      <h2> Praktik </h2>
      <p class="info"> 2018-01-15 </p>
      <p class="deadline" id="internshipBegins"></p>
    </article>
  </aside>

  <aside class="aside-container">
    <article>
      <h2> Examen </h2>
      <p class="info"> 2018-05-31 </p>
      <p class ="deadline" id="degreeBegins"></p>
    </article>
  </aside>

  <aside class="aside-container aside-video">
    <article>
      <iframe class="iframe" allowfullscreen src="https://www.youtube.com/embed/SmUjzUAhWLA">
      </iframe>
    </article>
  </aside>
