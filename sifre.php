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
  <table width="295" border="0" align="center" bgcolor="#00CCFF">
     <tr>
      <td colspan="2"><label>
        <div align="center">ŞİFRE DEĞİŞTİR</div>
      </label></td>
    </tr>
    <tr>
      <td width="141">Eski Sifre</td>
      <td width="144"><label>
        <input type="text" name="e_sifre1" id="textfield" />
      </label></td>
    </tr>
     <tr>
      <td>Yeni Sifre </td>
      <td><label>
        <input type="text" name="y_sifre11" id="textfield2" />
      </label></td>
    </tr>
    <tr>
      <td> Yeni Sifre Tekrar</td>
      <td><label>
        <input type="text" name="y_sifre22" id="textfield2" />
      </label></td>
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
$sifreler=mysql_query("select sifre from admin");
$sifre=mysql_result($sifreler,0);
if (isset($_POST['e_sifre1']) and isset($_POST['y_sifre11']) and isset($_POST['y_sifre22'])){

$e_sifre=$_POST['e_sifre1'];
$y_sifre1=$_POST['y_sifre11'];
$y_sifre2=$_POST['y_sifre22'];
if($e_sifre==$sifre) 
   if($y_sifre1==$y_sifre2)
     if(mysql_query("UPDATE admin SET sifre='$y_sifre1'"))
	  echo "sifre degisti";
	  else
	  echo "sifre degismedi";
	else
	  echo "sifreler uyusmadi";  
else
echo "eski sifre gecerli degil";
   
   }

?>
