<?php
include("baglanti.php");


/*$derss=mysql_fetch_array(mysql_query("select "*/
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>




<body background="resim\logo_renkli.jpg">
<form id="form1" name="form1" method="post" action="devam.php">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="730" height="57" border="0" bgcolor="#00CCFF">
  <tr>
    <td width="158">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4">Ogrno
      <input name="frno" type="text" id="frno" size="20" maxlength="15" />
      <label></label>
      <input type="submit" name="sor" id="button" value="Sorgula" />
      <label>
      <?php
      $liste=mysql_query("select distinct(ders) from ogrenci");
       $say=mysql_num_rows($liste);
      ?>
      <select name="derssecim" id="derssecim"><?php 
	  
	  if (isset($_POST['frno']) and isset($_POST['sor']) and isset($_POST['derssecim']))

$tumno=mysql_fetch_array(mysql_query("select * from ogrenci where sifre='1'"));
	  
	  
	   for ($x=0;$x<$say;$x++){ ?>
        <option value="<?php echo mysql_result($liste,$x); ?>"><?php echo mysql_result($liste,$x); ?></option> <?php } ?>
            </select>
      </label></td>
    </tr>
  <tr>
    <td height="11" colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">Ogrenci Numarasi</td>
    <td width="186">Ad Soyad</td>
    <td width="239">Ders</td>
    <td width="129">Devamsizlik</td>
  </tr>
  <tr>
    <td height="23"> <?php   echo $tumno['sifre']; ?>    </td>
    <td><?php echo $tumno['kullanici_adi']; ?></td>
    <td>
    
    <?php
	
	if (isset($_POST['derssecim'])){
	$drs=$_POST['derssecim'];
	echo $drs;
	}
   ?>    </td>
    <td><?php 
	if (isset($_POST['frno']) and isset($_POST['sor']) and isset($_POST['derssecim'])){
	 $sonuc=mysql_query("select count(*) from ogrenci where sifre='$no' and ders='$drs'"); 
	 $devamsizlik=mysql_query("select ders_say from dersler where ders='$drs'"); 
	 
	 if ((!(empty($sonuc))) and (!(empty($devamsizlik)))){
	 $sonuc2=mysql_result($sonuc,0);
	 $sonuc3=mysql_result($devamsizlik,0);
	 $sonuc4=$sonuc3-$sonuc2;
	 echo $sonuc4;  }}?>	 </td>
  </tr>
</table>
</form>
</body>
</html>
