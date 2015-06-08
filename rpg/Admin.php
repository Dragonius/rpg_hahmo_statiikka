<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!-- jsProgressBarHandler prerequisites : prototype.js -->
<script type="text/javascript" src="js/prototype/prototype.js"></script>
<script type="text/javascript" src="js/bramus/jsProgressBarHandler.js"></script>
<title>Status</title>
</head>
<body>
<?php

include 'mysql.php';

mysql_connect($host,$username,$password);
mysql_select_db($database) or die( "Unable to select database");

// Avaa stats paikka ja laske m‰‰r‰t sek‰ n‰yt‰ se
$query="SELECT * FROM rpg_stats;";
$result=mysql_query($query);
$num=mysql_numrows($result);

// Avaa kordinaatit paikka ja laske m‰‰r‰t sek‰ n‰yt‰ se
$query2="SELECT * FROM rpg_kordinaatit;";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);

// Avaa kordinaatit paikka ja laskee keskiarvon pohjoiskordinaatille
$query7="SELECT ROUND(MAX(pohjoista),2) FROM rpg_kordinaatit;" ;
$result7=mysql_query($query7);

// Avaa kordinaatit paikka ja laskee keskiarvon it‰kordinaatille
$query8="SELECT ROUND(MAX(itaista),2) FROM rpg_kordinaatit;" ;
$result8=mysql_query($query8);

// Avaa kordinaatit paikka ja laskee keskiarvon pohjoiskordinaatille
$query3="SELECT ROUND(AVG(pohjoista),2) FROM rpg_kordinaatit;" ;
$result3=mysql_query($query3);

// Avaa kordinaatit paikka ja laskee keskiarvon it‰kordinaatille
$query4="SELECT ROUND(AVG(itaista),2) FROM rpg_kordinaatit;" ;
$result4=mysql_query($query4);

// Avaa kordinaatit paikka ja laskee keskiarvon pohjoiskordinaatille
$query5="SELECT ROUND(MIN(pohjoista),2) FROM rpg_kordinaatit;" ;
$result5=mysql_query($query5);

// Avaa kordinaatit paikka ja laskee keskiarvon it‰kordinaatille
$query6="SELECT ROUND(MIN(itaista),2) FROM rpg_kordinaatit;" ;
$result6=mysql_query($query6);

//Sulkee verkkoyhteyden
mysql_close();


$Pmaxarvo=mysql_result($result7,$number,"ROUND(MAX(pohjoista),2)");
$Imaxarvo=mysql_result($result8,$number,"ROUND(MAX(itaista),2)");
$Pkeskiarvo=mysql_result($result3,$number,"ROUND(AVG(pohjoista),2)");
$Ikeskiarvo=mysql_result($result4,$number,"ROUND(AVG(itaista),2)");
$Pminarvo=mysql_result($result5,$number,"ROUND(MIN(pohjoista),2)");
$Iminarvo=mysql_result($result6,$number,"ROUND(MIN(itaista),2)");


echo "Pohjoiskordinattien maksimiarvo ","$Pmaxarvo","<br>";
echo "It‰kordinaattien maksimiarvo ","$Imaxarvo","<br>";
echo "Pohjoiskordinattien keskiarvo ","$Pkeskiarvo","<br>";
echo "It‰kordinaattien keskiarvo ","$Ikeskiarvo","<br>";
echo "Pohjoiskordinattien minimiarvo ","$Pminarvo","<br>";
echo "It‰kordinaattien minimiarvo ","$Iminarvo","<br>";



echo "Statsien rivien m‰‰r‰ ", "$num","<br>";
echo "Kordinaattien rivien m‰‰r‰ ", "$num2","<br>";
?>
<div style="width:540px;margin : 0 left; text-align:left;" >
<div id="demo">

<?php
include 'mysql.php';
mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$queryprogress0="SELECT Rpg_kehitys FROM rpg_progress;";
$rpg_progress0=mysql_query($queryprogress0);
$queryprogress1="SELECT Rpg_kartta FROM rpg_progress;";
$rpg_progress1=mysql_query($queryprogress1);
$queryprogress2="SELECT Rpg_lisaakartta FROM rpg_progress;";
$rpg_progress2=mysql_query($queryprogress2);
$tulos1=mysql_result($rpg_progress0,0);
$tulos2=mysql_result($rpg_progress1,0);
$tulos3=mysql_result($rpg_progress2,0);
echo "<span style=color:#006600;font-weight:bold;\">Rpg hahmojen statiikka valmis</span> <br>";
echo "<span class='progressBar' id='element1'>","$tulos1","%</span><br>";
echo "<span style=color:#660000;font-weight:bold;\">Rpg kartta-j‰rjestelm‰ valmis</span> <br>";
echo "<span class='progressBar' id='element2'>","$tulos2","%</span><br>";
echo "<span style=color:#000066;font-weight:bold;\">Rpg karttojen lis‰‰minen</span> <br>";
echo "<span class='progressBar' id='element3'>","$tulos3","%</span><br>";
?>
<?php
$query1 = "UPDATE rpg_progress Set Rpg_kehitys=Rpg_kehitys+5";
$query2 = "UPDATE rpg_progress Set Rpg_kehitys=Rpg_kehitys-5";

mysql_close();
?>
"'UPDATE progress Set Rpg_kehitys=Rpg_kehitys+1' Lis‰‰ 1 ekaan sarakkeeseen"
"toivat ohjeet lˆytyy http://www.tizag.com/ajaxTutorial/ajax-mysql-database.php"

</div>
</body>
</html>
