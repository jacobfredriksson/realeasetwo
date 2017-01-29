<?php
  include('includes/header.php');
?>

<nav class="topNav">
  <ul>
    <li><a href="?page=index">Hem</a></li>
    <li><a href="?page=resume">Mitt CV</a></li>
    <li><a href="?page=aboutme">Personligt brev</a></li>
    <l1><a href="?page=portfolio"> Portfolio</a></li>
    <?php if ($_SESSION['admin']):
      echo "<li style='float:right;'><a href='#' name='save' id='save'>
       Spara</a></li>
            <li style='float:right;'><a href='logout.php?page=index'>Logga ut</a></li>";
            ?>
    <?php endif ?>
  </ul>
</nav>
<?php

    switch ($_GET['page']) {
      case 'index':
        $page = "frontpage.php";
        break;

      case 'resume':
        $page = "resume.php";
        break;

      case 'aboutme':
        $page = "aboutme.php";
        break;

      case 'admin':
        $page = "login.php";
        break;

      case 'hangman':
        $page = "hangman.php";
        break;

      case 'portfolio':
        $page = "portfolio.php";
        break;

      default:
        $page = "frontpage.php";
        break;
    }
    include($page);
    include ("footer.php");
 ?>
