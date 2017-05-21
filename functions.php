<!--
  @author: Gianvito Bono
  @date  : 19-05-2017
--------------------------->

<?php

  include 'security.php';

  function get_string($strName, $lang) {

    //Italiano-----------------------------------
    $str['home_it'] = "PAGINA INIZIALE";
    $str['login_it'] = "ACCEDI";
    $str['signup_it'] = "REGISTRATI";
    $str['travel_it'] = "PREVENTIVO VIAGGIO";
    $str['welcome_it'] = "BENVENUTO<br><hr>ACCEDI PER AVERE IL TUO PREVENTIVO";
    $str['uname_it'] = "Nome utente";
    $str['passwd_it'] = "Password";
    $str['send_it'] = "Invia";
    $str['data_error_it'] = "Inserire nome utente e password";
    $str['login_error_it'] = "Nome utente o password errati";

    //Inglese------------------------------------
    $str['home_en'] = "HOME";
    $str['login_en'] = "SIGN-IN";
    $str['signup_en'] = "SIGN-UP";
    $str['travel_en'] = "TRAVEL ESTIMATE";
    $str['welcome_en'] = "WELCOME<br><hr>SIGN-IN FOR OBTAIN A TRAVEL ESTIMATE";
    $str['uname_en'] = "Username";
    $str['passwd_en'] = "Password";
    $str['send_en'] = "Send";
    $str['data_error_en'] = "Enter username and password";
    $str['login_error_en'] = "Incorrect username or password";

    //Russo--------------------------------------
    $str['home_ru'] = "ГЛАВНАЯ СТРАНИЦА";
    $str['login_ru'] = "ВОЙТИ В СИСТЕМУ";
    $str['signup_ru'] = "ЗАРЕГИСТРИРОВАТЬСЯ";
    $str['travel_ru'] = "ОЦЕНКА ПУТЕШЕСТВИЯ";
    $str['welcome_ru'] = "ПРИГЛАШАЕМ<br><hr>ДОСТУП ПОЛУЧИТЬ ЦЕНУ";
    $str['uname_ru'] = "Имя пользователя";
    $str['passwd_ru'] = "Пароль";
    $str['send_ru'] = "послать";
    $str['data_error_ru'] = "Введите имя пользователя и пароль";
    $str['login_error_ru'] = "Неверное имя пользователя или пароль";

    //Francese-----------------------------------
    $str['home_fr'] = "PAGE D'ACCUEIL";
    $str['login_fr'] = "S'IDENTIFIER";
    $str['signup_fr'] = "REGISTRE";
    $str['travel_fr'] = "ESTIMATION DE VOYAGE";
    $str['welcome_fr'] = "BIENVENUE<br><hr>ACCÈS À OBTENIR UN DEVIS";
    $str['uname_fr'] = "Nom d'utilisateur";
    $str['passwd_fr'] = "Mot de passe";
    $str['send_fr'] = "Envoyer";
    $str['data_error_fr'] = "Entrez votre nom d'utilisateur et mot de passe";
    $str['login_error_fr'] = "Nom d'utilisateur ou mot de passe incorrect";

    //Cinese-------------------------------------
    $str['home_cn'] = "主页";
    $str['login_cn'] = "登录";
    $str['signup_cn'] = "寄存器";
    $str['travel_cn'] = "旅行估价";
    $str['welcome_cn'] = "欢迎您<br><hr>请登录获得报价";
    $str['uname_cn'] = "用户名";
    $str['passwd_cn'] = "密码";
    $str['send_cn'] = "发送";
    $str['data_error_cn'] = "输入您的用户名和密码";
    $str['login_error_cn'] = "无效的用户名或密码";

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
