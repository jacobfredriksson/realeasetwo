
<ul>
    <li><a href="index.php?page=index">Hem</a></li>
    <li><a href="index.php?page=cv">Mitt CV</a></li>
    <li><a href="index.php?page=personligtbrev">Personligt brev</a></li>
    <li><a href="index.php?page=message">Kontakta mig</a></li>
</ul>

<?php
  if(isset($_GET['page']) && $_GET['page']!=""){
    $page = "startsida.php";
    switch ($_GET['page']) {
      case 'index':
        $page = "startsida.php";
        break;

      case 'cv':
        $page = "cv.php";
        break;

      case 'personligtbrev':
        $page = "personligtbrev.php";
        break;

      case 'message':
        $page = "message.php";
        break;

      case 'admin':
        $page = "login.php";
        break;

      default:
        $page = "startsida.php";
        break;
    }

    include($page);
  } else {
    include("startsida.php");
  }

include ("footer.inc.php");
 ?>

<?php
  include("config.php");
  if ($_SESSION['admin']) {
    echo '<div class="container">
            <div class="row">
                <button name="save" id="save">Spara</button>
            </div>
          </div>';
        }
 ?>
