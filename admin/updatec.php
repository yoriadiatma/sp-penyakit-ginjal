<?PHP include "../config.php";

$a = $_POST["idgangguan"];
$b = $_POST["namagangguan"];

mysql_query(" update tblgangguan SET  
idgangguan='$a',namagangguan='$b' where idgangguan='$a'");

header ('location:media.php?mod=penyakit');
?>