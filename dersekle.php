<?php
session_start();
include("baglanti.php");
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title></head>

<body background="resim\logo_renkli.jpg">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="268" height="61" border="0" align="center" bgcolor="#00CCFF">
   <tr>
      <td colspan="2"><label>
        <div align="center">DERS EKLE</div>
      </label></td>
    </tr>
    <tr>
      <td width="80">Ders Adi</td>
      <td width="205"><label>
        <input type="text" name="ders_adi" id="textfield" />
      </label></td>
    </tr>
     <tr>
      <td width="80">Sinif</td>
      <td width="205">
       
          <label>
            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" />
            1.sinif</label>
       	<br />
          <label>
          <input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" />
          2.sinif</label>
      
        <label>        </label></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="degistir" id="degistir" value="Onayla" />
      </label></td>
    </tr>
  </table>
  <label></label>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
if (isset($_POST['ders_adi']) and isset($_POST['RadioGroup1'])){
 $dersadi=$_POST['ders_adi'];
 $sinifno=$_POST['RadioGroup1'];
if(mysql_query("insert into dersler(ders,sinif) values('$dersadi','$sinifno')")){
echo "eklendi";


}
}







?>



