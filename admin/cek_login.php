<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include "../library/koneksi.php";
$pass=md5($_POST[password]);
$log=$_POST[login];

if ($log==admin) {

$login=mysql_query("SELECT * FROM user WHERE id_user='$_POST[username]' AND password='$pass' AND level='admin'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0)
{
  session_start();
	
	  $_SESSION[namauser] = $r[id_user];
	  $_SESSION[passuser] = $r[password];
		header('location:media.php?module=home');
  }

else
	{
	  echo "<center>Login gagal! Kemungkinan data yang anda masukkan tidak benar, atau anda tidak terdaftar!!!<br>";
	  echo "<a href=../home.php?menu=home><b>ULANGI LAGI</b></a> ";
	}
	
}

if ($log==pasien) {
$login=mysql_query("SELECT * FROM user WHERE id_user='$_POST[username]' AND password='$pass' AND level='user'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0)
{
  session_start();	
	  $_SESSION[namauser] = $r[id_user];
	  $_SESSION[passuser] = $r[password];
	
		header('location:../homeuser.php?menu=konsul');
  }

else
	{
	  echo "<center>Login gagal! Kemungkinan data yang anda masukkan tidak benar, atau anda tidak terdaftar!!!<br>";
	  echo "<a href=../home.php?menu=home><b>ULANGI LAGI</b></a>|
	  		<a href=../home.php?menu=registrasi>Registrasi</a></center>";
	}

}

else
	{
	  echo "<center>Login gagal! Silahkan Pilih Login terlebih dahulu!<br>";
	  echo "<a href=../home.php?menu=home><b>ULANGI LAGI</b></a></center>";
	}
?>
