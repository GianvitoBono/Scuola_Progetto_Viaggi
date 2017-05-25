<?php

  /*
  *  @author: Gianvito Bono
  *  @date  : 21-05-2017
  */

  $lang = isset($_GET['lang']) ? $_GET['lang'] : null;
  header('Content-Type: text/html; charset=utf-8');
  if($lang == null) {
    header("Location: " . rtrim($_SERVER['PHP_SELF']) . "?lang=en");

    die();
  }

  include './scripts/user_manager.php';

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
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?lang=' . $_GET['lang'] ?>" method="post" accept-charset="utf-8">
        <ul class="customStyle">
            <li>
              <h1 style='text-align:center'><?php echo get_string('login', test_input($_GET['lang'])) ?></h1>
              <br>
              <span class="error">
                <center>
                  <?php
                    if(isset($_POST['flag'])) {
                      $uname = isset($_POST['uname']) ? test_input($_POST['uname']) : null;
                      $passwd = isset($_POST['passwd']) ? test_input($_POST['uname']) : null;

                      if($uname == null || $passwd == null) {
                        echo get_string('data_error', test_input($_GET['lang']));
                        echo "<br><br>";
                      }

                      if(login($uname, $passwd)) {
                        header("Location: index.php?lang=".$_GET['lang']);
                        die();
                      } else {
                        echo get_string('login_error', test_input($_GET ['lang'])) ;
                        echo "<br><br>";
                      }
                    }
                  ?>
                </center>
              </span>
              <input type="text" name="uname" class="field-long" placeholder="<?php echo get_string('uname', test_input($_GET ['lang'])); ?>" />
              <br><br>
              <input type="password" name="passwd" class="field-long" placeholder="<?php echo get_string('passwd', test_input($_GET ['lang'])); ?>" />
              <br><br>
            </li>
            <li>
              <center>
                <input type="submit" value="<?php echo get_string('send', test_input($_GET ['lang'])); ?>"/>
              </center>
            </li>
        </ul>
        <input type="hidden" name="flag" value="1"/>
        </form>
      </div>
    </div>
    <?php include './scripts/footer.php'; ?>
  </body>
</html>
