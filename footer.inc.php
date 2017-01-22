<?php session_start()?>
<footer class="mainFooter">
  <!-- this is where the plugin take place -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <div class="addthis_inline_share_toolbox_t0le"></div>

  <!-- Share this page plugin -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581359d51303aee4"></script>
  <li><a href="index.php?page=message"><img class ="email-picture"src="bilder/email.png" /></a></li>
  <?php if ($_SESSION['admin']):
    echo "<a href='logout.php?page=index' style='float:left;'>Logga ut</a>";
    ?>
  <?php else:
    echo "<a href='login.php?page=admin' style='float:left;'>Admin</a>";
    ?>
  <?php endif ?>
</footer>
