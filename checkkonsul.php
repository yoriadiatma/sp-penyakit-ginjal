<?php
include "library/koneksi.php";
session_start();
$sql = mysql_query("SELECT * FROM user where id_user='$_SESSION[namauser]'");
$hasil=mysql_fetch_array($sql);
echo "<h2 align=center>Konsultasi</h2>";
echo "Id Pasien : $hasil[id_user] <br>
Nama Pasien : $hasil[nama_lengkap] <br>";
echo "Umur : $hasil[umur] Thn <br>";
// ================================================================================================
?>
<style type="text/css">

table.judul{
	border-width:2px;
	border-top-style:groove;
	border-bottom-style:none;
	border-right-style:groove;
	border-left-style:groove;
	-moz-border-radius-topleft:8px;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topright:8px;
	-webkit-border-top-right-radius:8px;
	width:700px;
	height:40px;
	background-color: #CCCCCC;
}
table.data{
border-top-style:groove;
border-bottom-style:none;
border-right-style:groove;
border-left-style:groove;
border-color:lightblue;
border-width:2px;
width:679px;
}
table.jumlah{
border-style:groove;
border-color:lightblue;
border-width:2px;
width:700px;
height:40px;
background-image:url('head9.jpg');
-moz-border-radius-bottomleft:15px;
-webkit-border-bottom-left-radius:15px;
-moz-border-radius-bottomright:15px;
-webkit-border-bottom-right-radius:15px;

}
tr.data:hover{
background-color:#99FF66}
div.data{
width:696px;
height:400px;
overflow:auto;
border-top-style:none;
border-bottom-style:groove;
border-right-style:groove;
border-left-style:groove;
border-color:lightblue;
border-width:2px;
}
</style>

<table   class="judul">
    <th colspan="4" align="left"><strong>GEJALA</strong></th>
</table>
<div class="data">
<table   class="data">
  <?php 
$jum=$_POST['jum'];

		   for ($i=0; $i<$jum; $i++){
            $idgejala = $_POST['idgejala'][$i];
		   if (!$idgejala) {echo"";}
		   else {
		   $simpanm="Insert into detailkonsul (idkonsul,idgejala) values 
		   ('','$idgejala')";
		   $hasil=mysql_query($simpanm);   }
            }

	
	 $hasilpilih0=mysql_query("Select * From detailkonsul where idkonsul=''");
	 $no=1;
	 while ($data0=mysql_fetch_array($hasilpilih0))
	 {

	 $hasilpilih=mysql_query("Select * From tblgejala where idgejala='$data0[idgejala]'");
	 $datapilih=mysql_fetch_array($hasilpilih);
	 $persen=$datapilih[persen];
	 
	 $id_kategori=$data['idgejala'];
		 if ($warna==$warna1) {
		 $warna=$warna2;}
		 else {
		 $warna=$warna1;} ?>

<?php	 echo " <tr bgcolor='$warna' class='data'> 
			<td width='10' align='center'>$no</td>
			<td class='data'>$datapilih[idgejala] : $datapilih[namagejala] </td> </tr>";
	$no++;
	$persentot=$persen+$persentot;
	 } 

//================================================================================================================== isi count sebelum ini

			$jj = "SELECT COUNT(*) AS jumData1 FROM detailkonsul where idkonsul=''  "; 
			$jjr = mysql_query($jj) or die('Error');
			$dj = mysql_fetch_array($jjr);
			$dj1 = $dj['jumData1'];		
echo "Data Pilih : $dj1 <br><br><br>";
//==================================================================================================================

//==================================================================================================================
		
		$query3 = "SELECT * FROM tblgangguan where idgangguan='P01'"; 
		$result3 = mysql_query($query3) or die('Error');
		$data3 = mysql_fetch_array($result3);
		echo "$data3[namagangguan]";
		echo "<meta http-equiv=Refresh content=1;url=?menu=oke&id=$_GET[id]&gangguan=P01&persen=$persentot>"; 



//==================================================================================================================


?> 


</table> 
</div>
