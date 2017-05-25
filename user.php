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
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  </head>
  <body class="openSans">
    <?php include 'navbar.php'; ?>
    <div class="content">
      <div class="centered">
        <?php
        $uname = $_COOKIE[]
        $key = get_key($uname);
        $iv = get_iv($uname);

        c
        $sql = "SELECT *
                FROM users
                WHERE username LIKE '$c_uname'";
        $result = mysqli_query($conn, $sql);

        if(!$result) {
          echo mysqli_error($conn);
          mysqli_close($conn);
          return false;
        }

        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            if(password_verify($passwd, $row["password"])) {
              setcookie('uname', $uname);
              setcookie('uid', $row["uid"]);
              mysqli_close($conn);
              return $res;
            }
          }

          echo "<h1>" . get_string("welcome2", $_GET['lang']) . " $name $surname</h1><br><hr><br>";
          echo "<h3>" . get_string("riepilogo", $_GET['lang']) . "</h3>";
          echo "";
        ?>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
