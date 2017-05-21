<!--
  @author: Gianvito Bono
  @date  : 19-05-2017
--------------------------->

<?php

  include 'security.php';

  global $str;

  //Italiano-----------------------------------
  $str['home_it'] = "PAGINA INIZIALE";
  $str['login_it'] = "ACCEDI";
  $str['signup_it'] = "REGISTRATI";
  $str['travel_it'] = "PREVENTIVO VIAGGIO";
  $str['welcome_it'] = "BENVENUTO<br><hr>ACCEDI PER AVERE IL TUO PREVENTIVO";

  //Inglese------------------------------------
  $str['home_en'] = "HOME";
  $str['login_en'] = "SIGN-IN";
  $str['signup_en'] = "SIGN-UP";
  $str['travel_en'] = "TRAVEL ESTIMATE";
  $str['welcome_en'] = "WELCOME<br><hr>SIGN-IN FOR OBTAIN A TRAVEL ESTIMATE";

  //Russo--------------------------------------
  $str['home_ru'] = "ГЛАВНАЯ СТРАНИЦА";
  $str['login_ru'] = "ВОЙТИ В СИСТЕМУ";
  $str['signup_ru'] = "ЗАРЕГИСТРИРОВАТЬСЯ";
  $str['travel_ru'] = "ОЦЕНКА ПУТЕШЕСТВИЯ";
  $str['welcome_ru'] = "ПРИГЛАШАЕМ<br><hr>ДОСТУП ПОЛУЧИТЬ ЦЕНУ";


  //Francese-----------------------------------
  $str['home_fr'] = "PAGE D'ACCUEIL";
  $str['login_fr'] = "S'IDENTIFIER";
  $str['signup_fr'] = "REGISTRE";
  $str['travel_fr'] = "ESTIMATION DE VOYAGE";
  $str['welcome_fr'] = "BIENVENUE<br><hr>ACCÈS À OBTENIR UN DEVIS";

  //Cinese-------------------------------------
  $str['home_cn'] = "主页";
  $str['login_cn'] = "登录";
  $str['signup_cn'] = "寄存器";
  $str['travel_cn'] = "旅行估价";
  $str['welcome_cn'] = "欢迎您<br><hr>请登录获得报价";

  function getString($strName, $lang) {
    return $str[$strName.'_'.$lang];
  }

  function test_input($str) {
    $data = trim($str);
    $data = stripslashes($str);
    $data = htmlspecialchars($str);
    return $str;
  }

  function getValue($lang) {
    $values['it'] = 'EUR';
    $values['en'] = 'GBP';
    $values['ru'] = 'RUB';
    $values['fr'] = 'EUR';
    $values['cn'] = 'CNY';

    return $values[$lang];
  }

  function getCurrency($value) {
    $default = 'EUR';
    $query = array($value);

    foreach ($query as $result) {
      $data[] = $default. $result. '=X';
    }

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://download.finance.yahoo.com/d/quotes.csv?s=' . implode(',', $data) . '&f=sl1&e=.csv');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($curl);
    curl_close($curl);

    $lines = explode("\n", trim($content));

    foreach ($lines as $line) {
      $currency = substr($line, 4, 3);
      $value = substr($line, 11, 6);
      if ((float)$value) {
        return $value;
      }
    }
  }

  function getConnection() {
    $m_uname = "u_viaggi";
    $m_passwd = "p_viaggi";
    $m_host = "127.0.0.1";
    $m_db = "viaggi_db";

    $conn = mysqli_connect($m_host, $m_uname, $m_passwd, $m_db);
    if(!$conn) {
      echo mysqli_error($conn);
      die();
    }
    return $conn;
  }

 ?>
