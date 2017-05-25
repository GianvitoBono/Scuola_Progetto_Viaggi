<?php

	/*
	*  @author: Gianvito Bono
	*  @date  : 21-05-2017
	*/

	function encrypt($str, $key, $iv) {
		return rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $str, MCRYPT_MODE_CBC, $iv)), "\0\3");
	}

	function decrypt($str, $key, $iv) {
		return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($str), MCRYPT_MODE_CBC, $iv), "\0\3");
	}

	function save_iv($iv, $uname){
    $file = fopen("./data/iv.bin", "a");
    $e_iv = base64_encode($iv);
    fwrite($file, $uname . ";;;" . $e_iv);
    fwrite($file, "\n");
    fclose($file);
  }

  function save_key($key, $uname) {
    $file = fopen("./data/keys.bin", "a");
    $e_key = base64_encode($key);
    fwrite($file, $uname . ";;;" . $e_key);
    fwrite($file, "\n");
    fclose($file);
  }

  function get_key($uname) {
    $keys = file("./data/keys.bin");
		foreach ($keys as $key) {
			$exp_line = explode(";;;", $key);
	    if($exp_line[0] == $uname) {
	      return base64_decode($exp_line[1]);
	    }
		}
		return null;
  }

  function get_iv($uname) {
    $ivs = file("./data/iv.bin");
		foreach ($ivs as $iv) {
			$exp_line = explode(";;;", $iv);
	    if($exp_line[0] == $uname) {
	      return base64_decode($exp_line[1]);
	    }
		}
    return null;
  }

  function gen_key() {
    $secure;
    $bytes = openssl_random_pseudo_bytes(256, $secure);
    return hash('SHA256', $bytes, true);
  }

  function gen_iv() {
    return mcrypt_create_iv(32, MCRYPT_DEV_RANDOM);
  }

	function check_uname($uname) {
		$keys = file("./data/keys.bin");
		foreach ($keys as $key) {
			$exp_line = explode(";;;", $key);
	    if($exp_line[0] == $uname) {
	      return false;
	    }
		}
		return true;
	}

?>
