<!--
  @author: Gianvito Bono
  @date  : 21-05-2017
--------------------------->

<?php

  function login($uname, $passwd) {
    $conn = getConnection();

    $sql = "SELECT uid
            FROM users
            WHERE username LIKE '$uname'";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
      echo mysqli_error($conn);
      mysqli_close($conn);
      return false;
    }

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        if(password_verify($passwd, row["password"])) {
          setcookie('uname', $uname);
          setcookie('uid', $row["uid"]);
          mysqli_close($conn);
          return $row["uid"];
        }
      }

    } else {
      mysqli_close($conn);
      return 0;
    }

  }

  function register($uname, $passwd, $name, $surname, $email) {
    $conn = getConnection();
    $uid = get_uid();
    $options = [
      'cost' => 12,
    ];
    $hash_pwd = password_hash($passwd, PASSWORD_BCRYPT, $options);
    $key = gen_key();
    $iv = gen_iv();
    $uid = get_uid();
    save_key($key, $uid);
    save_iv($iv, $uid);

    $c_name = encrypt($name, $key, $iv);
    $c_surname = encrypt($surname, $key, $iv);
    $c_email = encrypt($email, $key, $iv);

    //echo "$c_name<br>$c_surname<br>$c_uname<br>$c_email<br>$hash_pwd";


    $sql = "INSERT INTO users(uid, nome, cognome, password, username, email)
            VALUES(
              '$uid',
              '$c_name',
              '$c_surname',
              '$hash_pwd',
              '$uname',
              '$c_email'
            );";

    if(!mysqli_query($conn, $sql)) {
      echo mysqli_error($conn);
      mysqli_close($conn);
      return false;
    }

    setcookie('uname', $uname);
    setcookie('uid', $uid);

    mysqli_close($conn);
    return true;

  }
 ?>
