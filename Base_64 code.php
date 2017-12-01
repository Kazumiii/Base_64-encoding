<?php

define('SALT','pinch of salt');


function encrypt($text)
{
	
	return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,SALT,$text,MCRYPT_MODE_ECB,
	mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256,MCRYPT_MODE_ECB),MCRYPT_RAND))));
	
}


function decrypt($text)
{
	return trim (mcrypt_decrypt(MCRYPT_RIJNDAEL_256,SALT,base64_decode($text),MCRYPT_MODE_ECB,
	mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256,MCRYPT_MODE_ECB),MCRYPT_RAND)));
	
}



$encrypted_message=encrypt("something to encrypt");
echo $encrypted_message;
echo decrypt($encrypted_message);
?>
