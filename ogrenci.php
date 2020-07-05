<?php
include("baglanti.php");
//$ip_yerel="193.255.220.114";
$ip_yerel="::1";

function ipbul2 () { 
$ziyaretciip_2 = getenv("REMOTE_ADDR"); 
return $ziyaretciip_2; 
} 
$ip_2=ipbul2();


if (!($ip_yerel==$ip_2)){
echo "<center><h3><font color='red'><br><br>BU SAYFAYA FARKLI IP DEN GIRIS YASAKTIR...<br><img src='resim/kilitli.jpg'>";

}
else
{
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="ogr" action="ogrenci.php" method="post">
<table width="200" border="0" align="center" bgcolor="#38B8DF">
  <tr>
    <td colspan="2" bgcolor="#38B8DF"><img src="resim/ogrenciico.png" width="300" height="75" /></td>
  </tr>
  <tr>
    <td width="99">AD&nbsp; SOYAD...:</td>
    <td width="195"><input type="text" name="ad" /></td>
  </tr>
  <tr>
    <td>NO..................:</td>
    <td><input type="text" name="no" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#38B8DF"><label>
      <input type="submit" name="gonder" id="button" value="BILGILERI GONDER" />
    </label></td>
  </tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST['ad']) and isset($_POST['no']) and isset($_POST['gonder'])){
$ders=mysql_query("select secili_ders from tmp");
$ad=$_POST['ad'];
$no=$_POST['no'];
$tarih=date("d".'.'."m".'.'."Y");

function ipbul () { 
$ziyaretciip = getenv("REMOTE_ADDR"); 
return $ziyaretciip; 
} 
$ip=ipbul();

$ders_2=mysql_result ($ders,0);
   if($_POST['gonder']){
   
   $formsinif=mysql_query("select tmpsinif from tmp");
	$sinifi=mysql_result($formsinif,0);	
	
       if(mysql_query("insert into ogrenci(kullanici_adi,sifre,ders,devamsizlik,tarih,ip_adresi,ogrsinif) values('$ad','$no','$ders_2','1','$tarih','$ip','$sinifi')") && mysql_query("insert into gunluk(ad_soyad,ogr_no) values('$ad','$no')"))
		 echo '<meta http-equiv="refresh" content="0;URL=liste.php">';	 
}
	
	
	
}
}
?>