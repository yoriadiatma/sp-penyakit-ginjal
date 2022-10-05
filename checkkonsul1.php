<?php
include "library/koneksi.php";
session_start();
$tgl= date('d-m-Y');
$sql = mysql_query("SELECT * FROM user where id_user='$_SESSION[namauser]'");
$hasil=mysql_fetch_array($sql);

echo "<table width=78%><tr><td align='right'>$tgl</td></tr></table>";

echo "Id Pasien : $hasil[id_user] <br>
Nama Pasien : $hasil[nama_lengkap] <br>";
echo "Umur : $hasil[umur] Thn <br>";
// =========================================================================================================== PENYAKIT  
echo "<br><br>Gejala yang anda derita :<br>";
$query51 = mysql_query("SELECT * FROM tblkonsultasi where id_pasien= '$_GET[id]' order by id desc "); 
$data51 = mysql_fetch_array($query51);
$cekk=$data51['id_gangguan'];

$query31 = "SELECT * FROM detailkonsul where idkonsul= '$data51[id]' "; 
$result31 = mysql_query($query31) or die('Error');
while($data31 = mysql_fetch_array($result31))
{
//panggil data dari tabel, jadikan variabel
$idkon= $data31['idgejala'] ;


$query3 = "SELECT * FROM tblgejala where idgejala= '$idkon' "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$b= $data3['namagejala'] ;
$no=$no+1; 

echo "$no. $b <br>" ; 


}}

 
$query3 = "SELECT * FROM tblgangguan where idgangguan = '$cekk' "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$namagangguan= $data3['namagangguan'] ;
$ket= $data3['keterangangangguan'] ;
}
echo "<br>Gangguan yang anda derita : ";
echo "$namagangguan <br>
<strong>Dari gejala tersebut anda Menderi Penyakit Ginjal dengan tingkat Keyakinan $data51[persen] %</strong><br>";

echo "<br><strong>Terapi : </strong><br>  ";


if ($data51[persen]<'25') 	{
		$query3 = "SELECT * FROM tblterapi where idterapi = 'S2' or idterapi = 'S5' "; 
		}
if ($data51[persen]>='25' and $data51[persen]<'50') 	{
		$query3 = "SELECT * FROM tblterapi where idterapi = 'S2' or idterapi = 'S5' or idterapi = 'S4' "; 
		}
if ($data51[persen]>='50' and $data51[persen]<'75') 	{
		$query3 = "SELECT * FROM tblterapi where idterapi = 'S2' or idterapi = 'S5' or idterapi = 'S4' or idterapi = 'S1' "; 
		}
if ($data51[persen]>='75' and $data51[persen]<='100') 	{
		$query3 = "SELECT * FROM tblterapi where idterapi = 'S2' or idterapi = 'S5' or idterapi = 'S4' or idterapi = 'S1' or idterapi = 'S3' "; 
		}
		
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$vnamaterapi= $data3['namaterapi'] ;
$vketerangan= $data3['keteranganterapi'] ;
$noo=$noo+1;echo "$noo. ";
echo "$vketerangan <br>";

}


echo "<a href='hasil.php?idgangguan=".($cekk)."&namagangguan=".($namagangguan)."&id=".($_GET['id'])."' target='_blank'> 
CETAK </a>";


?>
