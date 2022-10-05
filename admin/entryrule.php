<form action= "saverule.php" method="post">
<table width="80%" border="1" align="center" bgcolor="#FFFFFF">

  <tr>
    <td width="20%">Id Solusi </td>
    <td width="179"><label>
      <select name="a" id="a">
        <? include "config.php";
	$query = "SELECT * FROM tblterapi order by idterapi ASC"; 
	$result = mysql_query($query) or die('Error');
	while($data = mysql_fetch_array($result))
	{ ?>
        <option value="<? echo"$data[idterapi]"; ?>"><? echo"$data[idterapi]"; ?></option>
        <? } ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Id Gangguan </td>
    <td><label>
    <select name="b" id="b">
      <? include "config.php";
	$query = "SELECT * FROM tblgangguan order by idgangguan ASC"; 
	$result = mysql_query($query) or die('Error');
	while($data = mysql_fetch_array($result))
	{ ?>
      <option value="<? echo"$data[idgangguan]"; ?>"><? echo"$data[idgangguan]"; ?></option>
      <? } ?>
    </select>

</label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
        <div align="right">
          <input type="submit" name="Submit" value="Simpan" />
        </div>
      </label></td>
  </tr>
</table> 
</form>
