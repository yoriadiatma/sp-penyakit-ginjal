<table width="100%" border="1">
  <tr>
    <td>KODE RULE </td>
    <td ><div align="center">GEJALA </div></td>
    <td><div align="center">PENYAKIT</div></td>
    <td><div align="center">SOLUSI</div></td>
    <td><div align="center">Aksi</div></td>
  </tr>
  
  <?php
$no = 1 ; 
$noo = 1 ;

$sql = mysql_query("SELECT * FROM tblgangguan order by idgangguan ASC");
while($hasil=mysql_fetch_array($sql))
{
$id = $hasil['idgangguan'];
$nama = $hasil['namagangguan'];

?>
  <tr>   
    <td valign="top"><?php echo "R$noo"; ?></td>
    <td valign="top"><?php 
	$sqlg = mysql_query("SELECT * FROM tblgejalagangguan where idgangguan='$id'");
	while($hasilg=mysql_fetch_array($sqlg))
	{
	$sqlg1 = mysql_query("SELECT * FROM tblgejala where idgejala='$hasilg[idgejala]'");
	$hasilg1=mysql_fetch_array($sqlg1);
	$idg = $hasilg['idgejala'];
	$namag = $hasilg1['namagejala'];

	echo "$idg. $namag <br>"; } ?></td>
	
    <td valign="top"><?php echo "$id. $nama"; ?></td>
	
    <td valign="top"><?php 
	$sqlgt = mysql_query("SELECT * FROM tblgangguanterapi where idgangguan='$id'");
	while($hasilgt=mysql_fetch_array($sqlgt))
	{
	$idgt = $hasilgt['idterapi'];
	
	$sqlt = mysql_query("SELECT * FROM tblterapi where idterapi='$idgt'");
	while($hasilt=mysql_fetch_array($sqlt))
	{
	$idt = $hasilt['idterapi'];
	$namat = $hasilt['keteranganterapi'];

	echo "$idt. $namat <br>"; } } ?></td>

    <td valign="top"><a href="?mod=tambahrulegejala&id=<?php echo"$id"; ?>">EDIT</a></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>
