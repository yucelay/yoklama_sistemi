<?php
include("baglanti.php");
mysql_query("truncate table tmp");
mysql_query("truncate table gunluk");
session_start();
session_destroy();
header("location: index.html");
?>
