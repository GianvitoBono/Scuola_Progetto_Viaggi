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
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/functions.js"></script>
  </head>
  <body class="openSans">
    <?php include './scripts/navbar.php'; ?>
    <div class="content">
      <div class="centered customStyle">
        <?php
          echo "<h1 style='text-align:center'>". get_string('travel', test_input($_GET['lang'])) ."</h1>";
          echo "<br>";
          if(!isset($_COOKIE['uid'])) {
            echo "<script>hide_travels_form();</script>";
            echo "<center>";
            echo "<h3 style='text-align: center' class='error'>".get_string("err_travel", test_input($_GET['lang']))."</h3>";
            echo "<br><br>";
            echo "<div style='display: inline-block' class='err_log_travel'><a href='login.php?lang='".$_GET['lang'].">".get_string("login", test_input($_GET['lang']))."</a>   or   <a href='register.php?lang='".$_GET['lang'].">".get_string("signup", test_input($_GET['lang']))."</a></div>";
            echo "</center>";
          }
        ?>

        <div id="travels_form">
        <?php
          if(isset($_COOKIE['uid'])){
            $conn = getConnection();
            $sql = "SELECT localita
                    FROM viaggi";
            $result = mysqli_query($conn, $sql);

            if(!$result) {
              echo mysqli_error($conn);
              mysqli_close($conn);
              return false;
            }

            if (mysqli_num_rows($result) > 0) {
              echo "<select id='dest' class>";
              echo "<option>" . get_string("local_select", $_GET['lang']) . "</option>";
              while($row = mysqli_fetch_assoc($result))
                echo "<option>" . $row['localita'] . "</option>";
              echo "</select>";
            }

        $tmp = '
          <br>
          <select id="currency">
            <option> '.get_string("sel_currency", $_GET["lang"]) .'</option>
          	<option value="USD">United States Dollars</option>
          	<option value="EUR">Euro</option>
          	<option value="GBP">United Kingdom Pounds</option>
          	<option value="DZD">Algeria Dinars</option>
          	<option value="AUD">Australia Dollars</option>
          	<option value="BSD">Bahamas Dollars</option>
          	<option value="BBD">Barbados Dollars</option>
          	<option value="BMD">Bermuda Dollars</option>
          	<option value="CAD">Canada Dollars</option>
          	<option value="CLP">Chile Pesos</option>
          	<option value="CNY">China Yuan Renmimbi</option>
          	<option value="XCD">Eastern Caribbean Dollars</option>
          	<option value="EGP">Egypt Pounds</option>
          	<option value="FJD">Fiji Dollars</option>
          	<option value="HKD">Hong Kong Dollars</option>
          	<option value="HUF">Hungary Forint</option>
          	<option value="ISK">Iceland Krona</option>
          	<option value="INR">India Rupees</option>
          	<option value="IDR">Indonesia Rupiah</option>
          	<option value="IEP">Ireland Punt</option>
          	<option value="ILS">Israel New Shekels</option>
          	<option value="JMD">Jamaica Dollars</option>
          	<option value="JPY">Japan Yen</option>
          	<option value="JOD">Jordan Dinar</option>
          	<option value="KRW">Korea (South) Won</option>
          	<option value="LBP">Lebanon Pounds</option>
          	<option value="MYR">Malaysia Ringgit</option>
          	<option value="MXP">Mexico Pesos</option>
          	<option value="NZD">New Zealand Dollars</option>
          	<option value="NOK">Norway Kroner</option>
          	<option value="PKR">Pakistan Rupees</option>
          	<option value="XPD">Palladium Ounces</option>
          	<option value="PHP">Philippines Pesos</option>
          	<option value="PLZ">Poland Zloty</option>
          	<option value="PTE">Portugal Escudo</option>
          	<option value="ROL">Romania Leu</option>
          	<option value="RUB">Russia Rubles</option>
          	<option value="SAR">Saudi Arabia Riyal</option>
          	<option value="SGD">Singapore Dollars</option>
          	<option value="SKK">Slovakia Koruna</option>
          	<option value="ZAR">South Africa Rand</option>
          	<option value="KRW">South Korea Won</option>
          	<option value="SEK">Sweden Krona</option>
          	<option value="CHF">Switzerland Francs</option>
          	<option value="TWD">Taiwan Dollars</option>
          	<option value="THB">Thailand Baht</option>
          	<option value="TTD">Trinidad and Tobago Dollars</option>
          	<option value="XCD">Eastern Caribbean Dollars</option>
          </select>
          <br><br>
          <center><input type="button" id="send" value="'.get_string('send', test_input($_GET ['lang'])) .'" style="width=90px"/></center>
          <br><br><br>
          <h1 id="prezzo" style="text-align: center;"></h1>';

          echo $tmp;
        }
        ?>
      </div>
    </div>
    </div>
    <?php include './scripts/footer.php'; ?>
  </body>
</html>
