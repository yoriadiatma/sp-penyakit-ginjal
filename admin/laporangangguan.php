<a href="?mod=entrygangguan">ENTRY PENYAKIT </a>

<table width="100%" border="1" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <td width="27">NO</td>
    <td><div align="center">ID PENYAKIT </div></td>
    <td><div align="center">NAMA PENYAKIT </div></td>
    
    <td width="134"><div align="center">ACTION</div></td>
  </tr>
  
<?php
$no = 1 ;
$noo = 1 ;
$sql = mysql_query("SELECT * FROM tblgangguan order by idgangguan ASC");
while($hasil=mysql_fetch_array($sql))
{
$vidgangguan = $hasil['idgangguan'];
$vnamagangguan = $hasil['namagangguan'];

?>
  <tr>   
    <td align="center" valign="top"><?php echo "$noo"; ?></td>
    <td valign="top"><?php echo "$vidgangguan"; ?></td>
    <td valign="top"><?php echo "$vnamagangguan"; ?></td>
    <td colspan="2" valign="top"><div align="center"><a href="?mod=editpenyakit&idgangguan=<?php echo "$vidgangguan"; ?>"> UPDATE </a>
    <a href="deletegangguan.php?idgangguan=<?php echo $vidgangguan;?> "> DELETE </a></div></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>
