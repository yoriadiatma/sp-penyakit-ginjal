<? include "../config.php" ?>
  <?php
 $a = $_GET[idgangguan]; 
$sql = mysql_query("SELECT * FROM tblgangguan where idgangguan = '$a'");
while($hasil=mysql_fetch_array($sql))
{
$a = $hasil['idgangguan'];
$vidgangguan = $hasil['idgangguan'];
$vnamagangguan = $hasil['namagangguan'];
}
?>
<form action= "updatec.php" method="post">
<table width="100%" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="20%">Id Penyakit</td>
    <td width="179"><label>
    <input type="text" name="idgangguan"
value="<? echo $a;?>">
    </label></td>
  </tr>
  <tr>
    <td bordercolor="#000000">Nama Penyakit </td>
    <td bordercolor="#000000"><label>
    <input name="namagangguan" type="text"
value="<? echo $vnamagangguan;?>" size="100">
</label></td>
  </tr>
  <tr>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000"><label>
      <input type="submit" name="Submit" value="Simpan" />
    </label></td>
  </tr>
</table> 
<? include "laporangangguan.php";?>
</form>
