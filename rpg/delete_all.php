<?php
include 'mysql.php';


mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

// Poista kaikki stats
$query = "DELETE FROM rpg_stats ";
mysql_query($query);

// Poista kaikki Kordinaatit
$query2 = "DELETE FROM rpg_kordinaatit";
mysql_query($query2);

$query3 = "ALTER TABLE `rpg`.`rpg_kordinaatit` AUTO_INCREMENT = 1";
mysql_query($query3);

$query4 = "ALTER TABLE `rpg`.`rpg_stats` AUTO_INCREMENT = 1";
mysql_query($query4);

//Sulkee verkkoyhteyden
mysql_close();

?>

