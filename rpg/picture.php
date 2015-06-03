<?php

// Katsoo kuvan leveyden ja korkeuden sekä mikä tyyppi se on.
list($width, $height, $type, $attr) = getimagesize("./pic/imagen.jpg");





$im = imagecreatefromjpeg('./pic/imagen.jpg');

$number=0;
$num=10;
while ($number < $num) {

// Ristin kordinaatit ja Hahmon nimi
$ccrosw = rand(1,$width);
$ccrosh = rand(1,$height);


$chartername = $num;
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

$num=$num - 1;

}



//tee progresiivinen kuva sekä näytä kuva ja poista kuva muistista
Imageinterlace($im, 1);

// Ilmoittaa selaimelle että kyseessä on kuva
header("Content-type: image/jpg ");
imagejpeg($im, NULL, 100);
imagedestroy($im);

 imagestring($im, 1, 5, 5, "Error loading $imgname", $im);

?>