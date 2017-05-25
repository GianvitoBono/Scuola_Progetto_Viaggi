<?php

  /*
  *  @author: Gianvito Bono
  *  @date  : 19-05-2017
  */

  $lang = isset($_GET['lang']) ? $_GET['lang'] : null;
  header('Content-Type: text/html; charset=utf-8');
  if($lang == null) {
    header("Location: " . rtrim($_SERVER['PHP_SELF']) . "?lang=en");
    die();
  }
?>

<html>
  <head>
    <title>Agenzia Viaggi</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  </head>
  <body class="openSans">
    <?php include './scripts/navbar.php'; ?>
    <div class="content">
      <div class="centered">
        <h1 class="center center-vert"><?php echo get_string("welcome", test_input($_GET['lang'])); ?></h1>
      </div>
    </div>
    <?php include './scripts/footer.php'; ?>
  </body>
</html>
