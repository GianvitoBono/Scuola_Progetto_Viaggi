<?php
  setcookie('uid', 'null', time() - 1);
  setcookie('uname', 'null', time() - 1);
  header("Location: /bono/Scuola_Progetto_Viaggi/index.php?lang=".$_GET['lang']);
  die();
?>
