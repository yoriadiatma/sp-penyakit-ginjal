<?
include "../config.php";
$a = $_POST['a'];
$d = $_POST['b'];

$query = "INSERT INTO tblgangguan      
          (idgangguan,namagangguan) 
VALUES ('$a','$d')";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=penyakit');

?>
