<?php session_start(); ?>
<header class="mainHeader">
  <img src="bilder/tjeckien.jpeg" alt="Utsikt över katedral 2016">
  <img src="bilder/goldengate.jpg" alt="Utsikt över goldengate 2015">
  <img src="bilder/grandcanyon.jpg" alt="Grand canyon 2015">
</header>

  <div class="container">
    <div class="content">
      <article class="mainContent">
        <header>
          <h1> Jacob Fredriksson <br> Front End Developer </h1>
        </header>

          <p class="admin" id="welcome-text">
            <?php
              include('config.php');
              $query = 'SELECT text FROM textcontent WHERE id = "welcome-text"';
              $result = mysqli_query($db, $query);
              $row = $result->fetch_row();
              $text = (string)$row[0];
              echo $text;
            ?>
          <p>

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
