
    <div class="container-cv">
      <article class="mainContent">
        <header>
          <h1 class="header-cv"> Mitt CV </h1>
        </header>
        <footer>
        <p class="info-cv admin" id="resume-text">
          <b> Namn:</b> Jacob Fredriksson<br>
          <b> Födelsedatum:</b> 24 September 1989<br>
          <b> Adress:</b> Kungsholmsgatan 42, 11227 Stockholm<br>
          <b> Email:</b> Jacob.fredriksson@student.kyh.se<br>
          <b> Tel:</b> 0720100065<br>
          <b> Civilstånd:</b> Sambo<br></p>
          <hr>
        </footer>

          <h1> Utbildningar: </h1>
          <button class="toggleButton"><em>Visa mer...</em></button>
           <div class="toggleExperience">
             <h3> KYH: </h3>
             <p class="admin" id="kyh-text">
               <?php
                $query = 'SELECT text FROM textcontent WHERE id = "kyh-text"';
                $result = mysqli_query($db, $query);
                $row = $result->fetch_row();
                $text = (string)$row[0];
                echo $text;
               ?>

             <h3> IT-G Södertörn: </h3>
             <p class="admin" id="itg-text">
               <?php
                $query = 'SELECT text FROM textcontent WHERE id = "itg-text"';
                $result = mysqli_query($db, $query);
                $row = $result->fetch_row();
                $text = (string)$row[0];
                echo $text;
               ?>
             </p><hr>
           </div>


          <h1> Praktikplats: </h1>
          <button class="toggleButton"><em>Visa mer...</em></button>
            <div class="toggleExperience">
             <h4>Jag söker praktik plats!</h4>
             <p class="admin" id="internship-text">
               <?php
                $query = 'SELECT text FROM textcontent WHERE id = "internship-text"';
                $result = mysqli_query($db, $query);
                $row = $result->fetch_row();
                $text = (string)$row[0];
                echo $text;
               ?>
             </p> <hr>
           </div>
           <h1> Arbetsplatser: </h1>
           <button class="toggleButton"><em>Visa mer...</em></button>
              <div class="toggleExperience">
                <h3>Marinshopen:</h3>
                <p class="admin" id="marinshopen-text">
                  <?php
                   $query = 'SELECT text FROM textcontent WHERE id = "marinshopen-text"';
                   $result = mysqli_query($db, $query);
                   $row = $result->fetch_row();
                   $text = (string)$row[0];
                   echo $text;
                  ?>
                </p>
           </div>
      </article>
    </div>


    <script src="Javascript/resume.js"> </script>
