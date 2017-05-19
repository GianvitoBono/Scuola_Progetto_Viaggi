<?php
  $lang = isset($_GET['lang']) ? $_GET['lang'] : null;
  if($lang == null) {
    header("Location: " . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/index.php?lang=en");
    die();
  }
?>

<html>
  <head>
    <title>Agenzia Viaggi</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body class="openSans">
    <?php include 'navbar.php'; ?>
    <div class="content">
      <div class="centered">
        <h1 class="center center-vert"><?php echo getString("welcome", test_input($_GET['lang'])); ?></h1>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
