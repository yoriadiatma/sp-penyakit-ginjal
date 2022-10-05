<table width="100%" border="1">
  <tr>
    <td ><div align="center">GEJALA GANGGUAN (G)</div></td>
    <td><div align="center">GANGGUAN (P)</div></td>
    <td><div align="center">TERAPI (T)</div></td>
  </tr>
  
  <?php


$sql = mysql_query("SELECT * FROM tblgangguan where idgangguan ='$_GET[id]'");
while($hasil=mysql_fetch_array($sql))
{
$id = $hasil['idgangguan'];
$nama = $hasil['namagangguan'];

?>
  <tr>   
    <td valign="top"><?php 
	$sqlg = mysql_query("SELECT * FROM tblgejalagangguan where idgangguan='$id'");
	while($hasilg=mysql_fetch_array($sqlg))
	{
	$sqlg1 = mysql_query("SELECT * FROM tblgejala where idgejala='$hasilg[idgejala]'");
	$hasilg1=mysql_fetch_array($sqlg1);
	$idg = $hasilg['idgejala'];
	$namag = $hasilg1['namagejala'];

	echo "$idg. $namag "; ?> 
	<a href="updateruleg.php?id=<?php echo"$id"; ?>&g=<?php echo"$idg"; ?>">Hapus Gejala</a>
	<?php echo "<br>";} ?>
	<a href="?mod=tambahrulegejala1&id=<?php echo"$id"; ?>">Tambah Gejala</a></td>
	
    <td valign="top"><?php echo "$id. $nama"; ?>
   </td>

	
    <td valign="top"><?php 
	$sqlgt = mysql_query("SELECT * FROM tblgangguanterapi where idgangguan='$id'");
	while($hasilgt=mysql_fetch_array($sqlgt))
	{
	$idgt = $hasilgt['idterapi'];
	
	$sqlt = mysql_query("SELECT * FROM tblterapi where idterapi='$idgt' ");
	while($hasilt=mysql_fetch_array($sqlt))
	{
	$idt = $hasilt['idterapi'];
	$namat = $hasilt['keteranganterapi'];

	echo "$idt. $namat "; ?> 
	<a href="updat.php?id=<?php echo"$id"; ?>&t=<?php echo"$idt"; ?>">Hapus Terapi</a>
	<?php echo "<br>";} }?>
	<a href="?mod=tambaht&id=<?php echo"$id"; ?>">Tambah Terapi</a></td>

  </tr>
<?php } ?>
</table>
