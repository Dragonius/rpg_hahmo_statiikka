<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<?php
include "mysql.php";
mysql_connect($host,$username,$password);
mysql_select_db($database) or die( "Unable to select database");

// Avaa stats paikka ja laske määrät sekä näytä se
$query="SELECT * FROM rpg_stats";
$result=mysql_query($query);
$num=mysql_numrows($result);

//Sulkee verkkoyhteyden
mysql_close();


echo "<b><center>Database Charters Output</center></b><br><br>";
echo "<hr>";
echo "Hahmon etu , sukunimi, ikä , pituus , paino, hyökkäys , hp , Mana voima , voimakkuus, kestävyys , älykkyys<br>";
echo "<table border=2 ><tr>";
$i=0;
$i2=0;
while ($i2 < $num) {
echo "<td>";
echo "<form name='$i2' action='update.php' method='post'>";
echo "<table>";
echo "<tr BGCOLOR='#C0DCC0'>";
$id=mysql_result($result,$i2,"id");
echo "<td>Id: <input type='text' name='id' value='$id'> </td>" ;
echo "<tr BGCOLOR='#C0DCC0'>";
$Hahmon_numero=mysql_result($result,$i2,"Hahmon_numero");
echo "<td>Hahmon_numero: <input type='text' name='Hahmon_numero' value='$Hahmon_numero'> </td>" ;
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Etunimi=mysql_result($result,$i2,"etunimi");
echo "<td>Etunimi: <input type='text' name='Etunimi' value='$Etunimi'> </td>" ;
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Sukunimi=mysql_result($result,$i2,"sukunimi");
echo "<td>Sukunimi: <input type='text' name='Sukunimi' value='$Sukunimi'> </td>";
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Ika=mysql_result($result,$i2,"ika");
echo "<td>Ikä: <input type='text' name='Ika' value='$Ika'> </td>";
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Pituus=mysql_result($result,$i2,"pituus");
echo "<td>Pituus: <input type='text' name='Pituus' value='$Pituus'> </td>";
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Paino=mysql_result($result,$i2,"paino");
echo "<td>Paino: <input type='text' name='Paino' value='$Paino'> </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Appearance=mysql_result($result,$i2,"Appearance");
echo "<td>Appearance: <input type='text' name='Appearance' value='$Appearance'> </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Attack=mysql_result($result,$i2,"Attack");
echo "<td>Attack: <input type='text' name='Attack' value='$Attack'> </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Charisma=mysql_result($result,$i2,"Charisma");
echo "<td>Charisma: <input type='text' name='Charisma' value='$Charisma'> </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Health_regeneration=mysql_result($result,$i2,"Health_regeneration");
echo "<td>Health_regeneration: <input type='text' name='Health_regeneration' value='$Health_regeneration'> </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Hp=mysql_result($result,$i2,"Hp");
echo "<td>Hp: <input type='text' name='Hp' value='$Hp'> </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Initiative=mysql_result($result,$i2,"Initiative");
echo "<td>Initiative: <input type='text' name='Initiative' value='$Initiative'> </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Intelligence=mysql_result($result,$i2,"Intelligence");
echo "<td>Intelligence: <input type='text' name='Intelligence' value='$Intelligence'> </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Leadership=mysql_result($result,$i2,"Leadership");
echo "<td>Leadership: <input type='text' name='Leadership' value='$Leadership'> </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Mana_Power=mysql_result($result,$i2,"Mana_Power");
echo "<td>Mana_Power: <input type='text' name='Mana_Power' value='$Mana_Power'> </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Mana_regeneration=mysql_result($result,$i2,"Mana_regeneration");
echo "<td>Mana_regeneration: <input type='text' name='Mana_regeneration' value='$Mana_regeneration'> </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Peacefully=mysql_result($result,$i2,"Peacefully");
echo "<td>Peacefully: <input type='text' name='Peacefully' value='$Peacefully'> </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Rage_multiply=mysql_result($result,$i2,"Rage_multiply");
echo "<td>Rage_multiply: <input type='text' name='Rage_multiply' value='$Rage_multiply'> </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Rage=mysql_result($result,$i2,"Rage");
echo "<td>Rage: <input type='text' name='Rage' value='$Rage'> </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Regeneration=mysql_result($result,$i2,"Regeneration");
echo "<td>Regeneratio: <input type='text' name='Regeneration' value='$Regeneration'> </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Strength=mysql_result($result,$i2,"Strength");
echo "<td>Strength: <input type='text' name='Strength' value='$Strength'> </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Toughness=mysql_result($result,$i2,"Toughness");
echo "<td>Toughness: <input type='text' name='Toughness' value='$Toughness'> </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$WeaponsSkill=mysql_result($result,$i2,"WeaponsSkill");
echo "<td>Weapons Skill: <input type='text' name='WeaponsSkill' value='$WeaponsSkill'> </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$Wisdom=mysql_result($result,$i2,"Wisdom");
echo "<td>Wisdom: <input type='text' name='Wisdom' value='$Wisdom'> </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$Wizard_Level=mysql_result($result,$i2,"Wizard_Level");
echo "<td>Wizard Level: <input type='text' name='Wizard_Level' value='$Wizard_Level'> </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$Wounds=mysql_result($result,$i2,"Wounds");
echo "<td>Wounds: <input type='text' name='Wounds' value='$Wounds'></td>";



echo "</tr><tr><td><input type='Submit' name='$i2' VALUE='Tallenna'></form></td>";
echo "</yd></tr></table>";
echo "</td>";
$i2++;
}
echo "</tr>";
echo "<hr>";
echo "</table>";
echo "<img src='picture_mysql.php'>";
echo "<hr>";

?>
