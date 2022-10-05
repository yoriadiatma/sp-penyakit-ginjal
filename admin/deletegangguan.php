<?PHP

include "../config.php" ;

$idgangguan = $_GET['idgangguan'];


$sql = "Delete from tblgangguan WHERE  idgangguan='".$idgangguan."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
}
header ('location:media.php?mod=penyakit');
?>


