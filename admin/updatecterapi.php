<?PHP include "../config.php";

$a = $_POST["idterapi"];
$c= $_POST["keteranganterapi"];

mysql_query(" update tblterapi SET  
idterapi='$a',keteranganterapi='$c' where idterapi='$a'");

header ('location:media.php?mod=solusi');
?>