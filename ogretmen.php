<?php
session_start();
include("baglanti.php");
ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="aadmn"  action="ogretmen.php" method="post">
  <table width="200" border="0" align="center" bgcolor="#38B8DF">
  <tr>
    <td colspan="2" bgcolor="#38B8DF"><img src="resim/ogretmenico.png" width="300" height="75" /></td>
  </tr>
  <tr>
    <td width="99">Kullanici Adi...:</td>
    <td width="195"><input type="text" name="ad" /></td>
  </tr>
  <tr>
    <td>Şifre...............:</td>
    <td><input type="password" name="sifre" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#38B8DF">
      <input type="submit" name="girisyap"  value="BILGILERI GONDER" />
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
$adlar=mysql_query("select kullanici_adi from admin");
$sifreler=mysql_query("select sifre from admin");

$a=mysql_result($adlar,0);
$sf=mysql_result($sifreler,0);
 if (isset($_POST['ad']) and isset($_POST['sifre']) and isset($_POST['girisyap'])){
   $ad=$_POST['ad'];
$sifre=$_POST['sifre'];
         if($ad==$a && $sifre==$sf){
		$_SESSION['durum']="yucel";
		 $_SESSION['add']=$ad;
		header("location: dersler.php");
		 }
		 else
		echo "alanları kontrol edin";	
}
ob_end_flush();		
?>
