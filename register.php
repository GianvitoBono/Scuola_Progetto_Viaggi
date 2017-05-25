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
        <form  action="<?php echo $_SERVER['PHP_SELF'] . '?lang=' . $_GET['lang'] ?>" method="post" accept-charset="utf-8">
        <ul id="registration_form" class="customStyle">
            <li>
              <h1 style='text-align:center'><?php echo get_string('signup', test_input($_GET['lang'])) ?></h1>
              <br>
              <span class="error">
                <center>
                  <?php
                    if(isset($_POST['flag'])) {
                      $name = isset($_POST['name']) ? test_input($_POST['name']) : null;
                      $surname = isset($_POST['surname']) ? test_input($_POST['surname']) : null;
                      $uname = isset($_POST['uname']) ? test_input($_POST['uname']) : null;
                      $passwd = isset($_POST['passwd']) ? test_input($_POST['uname']) : null;
                      $re_passwd = isset($_POST['re_passwd']) ? test_input($_POST['re_passwd']) : null;
                      $email = isset($_POST['email']) ? test_input($_POST['email']) : null;

                      $cond = ($name == null || $surname == null || $uname == null || $passwd == null || $re_passwd == null || $email == null);

                      if($cond) {
                        echo get_string('data_error', test_input($_GET['lang']));
                        echo "<br><br>";
                      }

                      if($passwd != $re_passwd) {
                        echo get_string('passwd_err', test_input($_GET['lang']));
                        echo "<br><br>";
                      }

                      if(!$cond)
                        if(register($name, $surname, $uname, $passwd, $email)) {
                          header("Location: index.php?lang=".$_GET['lang']);
                        }

                    }
                  ?>
                </center>
              </span>
              <li><input type="text" name="name" class="field-divided" placeholder="<?php echo get_string('name', test_input($_GET['lang'])) ?>" />&nbsp;<input type="text" name="surname" class="field-divided" placeholder="<?php echo get_string('surname', test_input($_GET['lang'])) ?>" /></li>
              <li><input type="email" name="email" class="field-long" placeholder="<?php echo get_string('email', test_input($_GET['lang'])) ?>"/></li>
              <li><input type="text" name="uname" class="field-long" placeholder="<?php echo get_string('uname', test_input($_GET ['lang'])); ?>" /></li>
              <li><input type="password" name="passwd" class="field-divided" placeholder="<?php echo get_string('passwd', test_input($_GET ['lang'])); ?>" />&nbsp;<input type="password" name="re_passwd" class="field-divided" placeholder="<?php echo get_string('re_passwd', test_input($_GET ['lang'])); ?>" /></li>
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
