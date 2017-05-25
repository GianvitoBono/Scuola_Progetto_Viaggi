<?php

  /*
  *  @author: Gianvito Bono
  *  @date  : 25-05-2017
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
        <h1 class="center"><?php echo get_string("get_estimate", test_input($_GET['lang'])); ?></h1>
        <?php
          $sql = "SELECT localita
                  FROM viaggi
                  WHERE username LIKE '$c_uname'";
          $result = mysqli_query($conn, $sql);

          if(!$result) {
            echo mysqli_error($conn);
            mysqli_close($conn);
            return false;
          }

          if (mysqli_num_rows($result) > 0) {
            echo "<label>". get_string() ."<select id='select_viaggi'>";
            $i = 0;
            while($row = mysqli_fetch_assoc($result))
              echo "<option id='l$i'>" . $row['localita'] . "</option>";
            }
            echo "</select>";
          } else {
            echo get_string("localita_error", $_GET['lang']);
          }
        ?>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
