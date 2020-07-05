<?php
$vt_host       = "localhost";
$vt_kullanici  = "root";
$vt_sifre      = "";
$vt_adi        = "yoklama_sistemi";
$dbconnect = @mysql_connect($vt_host,$vt_kullanici,$vt_sifre) or die("Veritabani baglantisi saglanamadi!");
mysql_select_db($vt_adi,$dbconnect) or die("Veritabani bulunamadi!");
?>