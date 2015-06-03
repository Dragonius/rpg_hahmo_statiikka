<?php

include 'mysql.php';

mysql_connect($host,$username,$password);
mysql_select_db($database) or die( "Unable to select database");

// Avaa stats nimi
$query3="SELECT CONCAT(Etunimi,', ',Sukunimi) AS Etunimi FROM rpg_stats;";
$result3=mysql_query($query3);
$num3=mysql_numrows($result3);

// Avaa kordinaatit Pohjoista
$query="SELECT Pohjoista FROM rpg_kordinaatit  HAVING Pohjoista;";
$result=mysql_query($query);
$num=mysql_numrows($result);

// Avaa kordinaatit itäistä 
$query2="SELECT itaista FROM rpg_kordinaatit HAVING itaista;";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);

//Sulkee verkkoyhteyden
mysql_close();

// Katsoo kuvan leveyden ja korkeuden sekä mikä tyyppi se on.
list($width, $height, $type, $attr) = getimagesize("./pic/imagen.jpg");


// Ilmoittaa selaimelle että kyseessä on kuva
header("Content-type: image/jpg ");


$im = imagecreatefromjpeg('./pic/imagen.jpg');


$pi=0;
$pi2=0;
$pi3=0;
$number=0;

while ($number < $num3) {

$Pkordinaatti=mysql_result($result,$pi,"Pohjoista");
$Ikordinaatti=mysql_result($result2,$pi2,"itaista");
$Etunimi_kord=mysql_result($result3,$pi3,"Etunimi");

// Ristin kordinaatit ja Hahmon nimi
$ccrosw = $Pkordinaatti;
$ccrosh = $Ikordinaatti;



$chartername = $Etunimi_kord;
$cordinatesh = $ccrosh;
$cordinatesw = $ccrosw;

//Ristille omat määritykset
$polyh1 = $ccrosw;
$polyh2 = $ccrosw - 3;
$polyh3 = $ccrosw + 3;
$polyh4 = $ccrosw - 15;
$polyh5 = $ccrosw + 15;

$polyw1 = $ccrosh;
$polyw2 = $ccrosh - 3;
$polyw3 = $ccrosh + 3;
$polyw4 = $ccrosh - 15;
$polyw5 = $ccrosh + 15;

// Väri asetukset Valkoinen , musta, punainen , vihreä ja sininen
$col_poly = imagecolorallocate($im, 255, 255, 255);
$col_poly2 = imagecolorallocate($im, 0, 0, 0);
$col_poly3 = imagecolorallocate($im, 255,0,0);
$col_poly4 = imagecolorallocate($im, 0,255,0);
$col_poly5 = imagecolorallocate($im, 0,0,255);

// Itse se risti
imageline($im, $polyh2, $polyw1, $polyh4, $polyw1, $col_poly);
imageline($im, $polyh3, $polyw1, $polyh5, $polyw1, $col_poly);
imageline($im, $polyh1, $polyw2, $polyh1, $polyw4, $col_poly);
imageline($im, $polyh1, $polyw3, $polyh1, $polyw5, $col_poly);

// Pisteitä ristin alkuun
imagesetpixel($im , $polyh1, $polyw1, $col_poly3);
imagesetpixel($im , $polyh2, $polyw1, $col_poly3);
imagesetpixel($im , $polyh1, $polyw2, $col_poly3);
imagesetpixel($im , $polyh3, $polyw1, $col_poly3);
imagesetpixel($im , $polyh1, $polyw3, $col_poly3);

// hahmon nimi tulee tähän
$len=strlen($chartername);
$nimih1 = $ccrosw + 5 ;
$nimiw1 = $ccrosh - 15 ;
for($i=0;$i<$len;$i++)
{
imagechar($im, 2 , $nimih1,$nimiw1,$chartername,$col_poly4);
    $chartername = substr($chartername,1);
$nimih1 = $nimih1 + 5 ;
}

// hahmon itäinen-koordinaatti tulee tähän
$len2=strlen($cordinatesh);
$pohjoish1 = $ccrosw - 25 ;
$pohjoisw1 = $ccrosh + 0 ;
for($i=0;$i<$len2;$i++)
{
imagechar($im, 2 , $pohjoish1,$pohjoisw1,$cordinatesh,$col_poly3);
    $cordinatesh = substr($cordinatesh,1);
$pohjoish1 = $pohjoish1 + 5 ;
}


// hahmon pohjois-koordinaatti tulee tähän
$len3=strlen($cordinatesw);
$itäistäh1 = $ccrosw - 25 ;
$itäistäw1 = $ccrosh - 15  ;
for($i=0;$i<$len3;$i++)
{
imagechar($im, 2 , $itäistäh1,$itäistäw1,$cordinatesw,$col_poly5);
    $cordinatesw = substr($cordinatesw,1);
$itäistäh1 = $itäistäh1 + 5 ;
}

$pi++;
$pi2++;
$pi3++;

$num3=$num3 - 1;


}



//tee progresiivinen kuva sekä näytä kuva ja poista kuva muistista
Imageinterlace($im, 1);
imagejpeg($im, NULL, 100);
imagedestroy($im);

?>
