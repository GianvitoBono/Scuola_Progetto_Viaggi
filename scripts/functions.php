<?php

  /*
  *  @author: Gianvito Bono
  *  @date  : 19-05-2017
  */

  include 'security.php';

  function get_string($str_key, $lang) {
    $conn = getConnection();
    $str_key = test_input($str_key);
    $lang = test_input($lang);

    $sql = "SELECT descrizione
            FROM translations
            WHERE lang_key LIKE '$str_key' AND
                  lang LIKE '$lang'";

    $result = mysqli_query($conn, $sql);

    if(!$result) {
      echo mysqli_error($conn);
      mysqli_close($conn);
      return false;
    }

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      return $row['descrizione'];

    } else {
      mysqli_close($conn);
      return false;

    }

  }

  function test_input($str) {
    $data = trim($str);
    $data = stripslashes($str);
    $data = htmlspecialchars($str, ENT_NOQUOTES, "UTF-8");
    return $data;
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
    $m_uname = "root";
    $m_passwd = "";
    $m_host = "127.0.0.1";
    $m_db = "viaggi_db";

    $conn = mysqli_connect($m_host, $m_uname, $m_passwd, $m_db);
    mysqli_set_charset($conn, "utf8");

    if(!$conn) {
      echo mysqli_error($conn);
      die();
    }
    return $conn;
  }

 ?>
