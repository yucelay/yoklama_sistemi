<?php
include "baglanti.php";
$ders=mysql_query("select secili_ders from tmp");
$say=mysql_num_rows($ders);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #003366;
	font-weight: bold;
	font-size: 24px;
}
.style2 {color: #003366}
-->
</style>
</head>

<body background="resim\logo_renkli.jpg">
<table width="709" border="0" align="center">
  <tr>
    <td align="center"><table width="708" height="27" border="0">
     <tr>
        <td colspan="3" align="center"><span class="style1"><h3>AKTİF DERS: 
		<?php 
		
		if(!($say==0))
		echo mysql_result($ders,0);
	  else
	  echo "";
		
		  ?></h3></span></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><span class="style1">Ögrenci Listesi</span></td>
      </tr>
      <tr>
        <td width="85">SIRA</td>
        <td width="190">NO</td>
        <td width="435"><span class="style2">AD SOYAD</span></td>
      </tr>
      <?php
$ad=(mysql_query("select ad_soyad from gunluk"));
$no=(mysql_query("select ogr_no from gunluk"));
$say=mysql_num_rows(mysql_query("select ad_soyad from gunluk"));
$satir=0;
while ($satir<$say)
{
if($satir%2==0)
echo  "<tr bgcolor=#66CCFF><td>",$satir+1,"</td><td>",mysql_result($no,$satir),"</td><td>",mysql_result($ad,$satir),"</td></tr>";
else
echo  "<tr bgcolor=#00FFFF><td >",$satir+1,"</td><td>",mysql_result($no,$satir),"</td><td>",mysql_result($ad,$satir),"</td></tr>";
$satir++;
}
?>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
