
<ul>
    <li><a href="index.php?page=index">Hem</a></li>
    <li><a href="index.php?page=cv">Mitt CV</a></li>
    <li><a href="index.php?page=personligtbrev">Personligt brev</a></li>
    <li><a href="index.php?page=login.php"> Admin </a></li>
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

      case 'login':
        $page = "login.php";
        break;

      default:
        $page = "startsida.php";
        break;
    }

    include($page);
  }

 ?>
