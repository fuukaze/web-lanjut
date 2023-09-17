<HTML>
<HEAD>
<TITLE>Catatan Harian</TITLE>
<?php
if(isset($_POST['simpan'])){
$tanggal=$_POST['tanggal'];
$cerita=$_POST['cerita'];
$file=fopen("ceritaku.txt","a+") or exit("Unable to open file!");
$txt="\n".$tanggal."\n".$cerita;
fwrite($file, $txt);
fclose($file);
}
?>
</HEAD>
<BODY>
<table border="0">
<FORM ACTION="" METHOD="post">
<tr>
<td>Tanggal</td><td>:</td><td>
<INPUT TYPE="date" NAME="tanggal"></td>
</tr>
<tr>
<td>Cerita hari ini</td><td>:</td><td>
<textarea rows="10" cols="100" NAME="cerita"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td><td>&nbsp;</td>
<td>
<INPUT TYPE=SUBMIT VALUE="Simpan" name="simpan">
<INPUT TYPE=SUBMIT VALUE="Reset" name="reset">
<INPUT TYPE=SUBMIT VALUE="Refresh" name="refresh">
</td>
</tr>
</FORM>
</table>
</BODY>
</HTML>