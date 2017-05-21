<!--
  @author: Gianvito Bono
  @date  : 21-05-2017
--------------------------->

<?php

	function encrypt($str, $key, $iv) {
		return rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $str, MCRYPT_MODE_CBC, $iv)), "\0\3");
	}

	function decrypt($str, $key, $iv) {
		return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($str), MCRYPT_MODE_CBC, $iv), "\0\3");
	}

	function save_iv($iv, $uid){
    $file = fopen("./data/iv.bin", "a");
    $e_iv = base64_encode($iv);
    fwrite($file, $uid . ";;;" . $e_iv);
    fwrite($file, "\n");
    fclose($file);
  }

  function save_key($key, $uid) {
    $file = fopen("./data/keys.bin", "a");
    $e_key = base64_encode($key);
    fwrite($file, $uid . ";;;" . $e_key);
    fwrite($file, "\n");
    fclose($file);
  }

  function get_key($uid) {
    $keys = file("./data/keys.bin");
    $exp_line = explode(";;;", $keys[$uid + 1]);
    if($exp_line[0] == $uid) {
      return base64_decode($exp_line[1]);
    }
    return null;
  }

  function get_iv($uid) {
    $ivs = file("./data/iv.bin");
    $exp_line = explode(";;;", $ivs[$uid + 1]);
    if($exp_line[0] == $uid) {
      return base64_decode($exp_line[1]);
    }
    return null;
  }

  function get_uid() {
    $file = fopen("./data/ucount.txt","r");
    $count = fgets($file,1000);
    fclose($file);
    $tmp = $count;
    $count++;
    $file = fopen("./data/ucount.txt","w");
    fwrite($file, $count);
    fclose($file);

    return $tmp;
  }

  function gen_key() {
    $secure;
    $bytes = openssl_random_pseudo_bytes(10, $secure);
    return hash('SHA256', $bytes, true);
  }

  function gen_iv() {
    return mcrypt_create_iv(32, MCRYPT_DEV_RANDOM);
  }

?>
