<?
include "../config.php";
$a = $_POST['a'];
$d = $_POST['b'];

$query = "INSERT INTO tblgangguanterapi      
          (idgangguan,idterapi) 
VALUES ('$b','$a')";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";

header ('location:index.php?mod=rule');

?>
