<?php
session_start();
include("baglanti.php");
$durum=$_SESSION['durum'];
$ad=$_SESSION['add'];

$ders=mysql_query("select ders from dersler");
$a=mysql_num_rows($ders);
$ders_adlari=mysql_fetch_array(mysql_query("select ders from dersler"));
$ders4=mysql_query("select secili_ders from tmp");

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #0000FF;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #00FF33;
}
a:active {
	text-decoration: none;
	color: #0000FF;
}
#apDiv1 {
	position:absolute;
	left:281px;
	top:98px;
	width:754px;
	height:600px;
	z-index:1;
	background-color: #38B8DF;
}
#apDiv2 {
	position:absolute;
	left:15px;
	top:98px;
	width:266px;
	height:600px;
	z-index:2;
	background-color: #38B8DF;
}
#apDiv3 {
	position:absolute;
	left:12px;
	top:125px;
	width:197px;
	height:246px;
	z-index:3;
}
.style1 {color: #000000}
#apDiv4 {
	position:absolute;
	left:15px;
	top:6px;
	width:1021px;
	height:80px;
	z-index:3;
}
-->
</style></head>

<body>

<div id="apDiv1">
  <iframe name="aa" width="753" height="600" frameborder="0" style="background-image:url(resim/logo_renkli.jpg)" src="liste.php"> 
  <?php
 if($_POST['sec']){
  if (isset($_POST['secim'])){
 $secili=$_POST['secim'];
     if(mysql_query("TRUNCATE tmp")){
	    $formsinif=mysql_query("select sinif from dersler where ders='$secili'");
		$resulttmp=mysql_result($formsinif,0);
         if(mysql_query("insert into tmp(secili_ders,tmpsinif) values('$secili','$resulttmp')")){
		     $d_sayisi=mysql_query("select ders_say from dersler where ders='$secili'");
			 $sayi=mysql_result($d_sayisi,0);
			 $sayi+=1;
		    mysql_query("UPDATE dersler SET ders_say=$sayi WHERE ders='$secili'");
        }}}
		
		}
 ?>
  </iframe>
</div>
<div id="apDiv2"> <font size="-1">
 
 <a href=cikis.php><img width=30 height=30 border=0 src='resim\exiticon.png'></a>
 <a href=sifre.php target=aa><img width=30 height=30 border=0 src='resim\images.png'>
 </a><font color=#800000><b></font></b><hr size=2 color=blue>
<?
 for($i=0;$i<$a;$i++){ ?>
  
    <form name="dersform" action="dersler.php" method="post">	
    <label>
    <input type="radio" name="secim" value="<? echo mysql_result($ders,$i); ?>">
    <? echo mysql_result($ders,$i);?> 
    </label>
    <br>
    <?
		}
		?>
    <input type="submit" name="sec" value="SEC">
  </form>
   <hr size=2 color=blue>
     <span class="style1"><a href="liste.php" target="aa">Liste(Gunluk)</a><br>
     <a href="sifre.php" target="aa">Sifre degistir</a><br>
   <a href="dersekle.php" target="aa">Ders ekle</a><br>
      <a href="devam.php" target="aa">Devamsizlik Sorgulama</a></span></div>
<div id="apDiv4"><a href="dersler.php"><img src="resim/banner.jpg" width="1021" height="91" border=0></a></div>
</body>
</html>