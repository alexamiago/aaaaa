
<?php
include "function.php";
date_default_timezone_set('Asia/Jakarta');
echo color("white","☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞\n");
echo color("red","  [♡]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("white","   [♡] TOLONG DIBACA DULU SEBELUM MENGGUNAKAN SC \n");
echo color("white","  [♡] JANGAN LUPA FOLLOW IG GUE YA : @Bananacreamy \n");
echo color("red","[♡] SCRIPT INI BERGUNA UNTUK BUAT AKUN BLIBLI \n");
echo color("white"," [♡] NEMU KENDALA? CHAT TELEGRAM @BANANACREAMY \n");
echo color("red"," [♡] BACA DOA DULU SEBELUM MULAI , OKAY?^.^ \n");
echo color("white","☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞\n");
	echo "\n";
echo  PHP_EOL;
echo "BLIBLI ACCOUNT CREATOR ++(MANUAL VERIV)++". PHP_EOL;
echo  PHP_EOL;

$x='Y';
while($x=='Y' || $x=='y'){

echo "email : ";
$email = trim(fgets(STDIN));
echo "pass  : ";
$pass = trim(fgets(STDIN));

buat($email, $pass);
echo  PHP_EOL;
echo "BIKIN LAGI?(y/n) : ";
$x = trim(fgets(STDIN));
}

function buat($email,$pass){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://api.prakerja.go.id/api/v1/user/register');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "username=".$email."&password=".$pass);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');

	$headers = array();
	$headers[] = 'Accept: application/json';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:86.0) Gecko/20100101 Firefox/86.0)';
	$headers[] = 'Accept-Language: id';
	$headers[] = 'Content-Type: application/json';
	$headers[] = 'Host: api.prakerja.go.id';
	$headers[] = 'Connection: Keep-Alive';
	$headers[] = 'Accept-Encoding: gzip, deflate, br';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = json_decode(curl_exec($ch));
	 print_r($result);

}

?>
© 2021 GitHub, Inc.
