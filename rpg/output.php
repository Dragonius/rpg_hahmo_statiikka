<?php
include 'mysql.php';

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");

// Avaa stats paikka ja laske määrät sekä näytä se
$query="SELECT * FROM rpg_stats";
$result=mysql_query($query);
$num=mysql_numrows($result);

// Avaa kordinaatit paikka ja laske määrät sekä näytä se
$query2="SELECT * FROM rpg_kordinaatit";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);

//Sulkee verkkoyhteyden
mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$First=mysql_result($result,$i,"etunimi");
$Last=mysql_result($result,$i,"sukunimi");
$Old=mysql_result($result,$i,"ika");
$Height=mysql_result($result,$i,"pituus");
$Weight=mysql_result($result,$i,"paino");
$Appearance=mysql_result($result,$i,"Appearance");
$Attack=mysql_result($result,$i,"Attack");
$Charisma=mysql_result($result,$i,"Charisma");
$Health_regeneration=mysql_result($result,$i,"Health_regeneration");
$Hp=mysql_result($result,$i,"Hp");
$Initiative=mysql_result($result,$i,"Initiative");
$Intelligence=mysql_result($result,$i,"Intelligence");
$Leadership=mysql_result($result,$i,"Leadership");
$Mana_Power=mysql_result($result,$i,"Mana_Power");
$Mana_regeneration=mysql_result($result,$i,"Mana_regeneration");
$Peacefully=mysql_result($result,$i,"Peacefully");
$Rage_multiply=mysql_result($result,$i,"Rage_multiply");
$Rage=mysql_result($result,$i,"Rage");
$Regeneration=mysql_result($result,$i,"Regeneration");
$Strength=mysql_result($result,$i,"Strength");
$Toughness=mysql_result($result,$i,"Toughness");
$WeaponsSkill=mysql_result($result,$i,"WeaponsSkill");
$Wisdom=mysql_result($result,$i,"Wisdom");
$Wizard_Level=mysql_result($result,$i,"Wizard_Level");
$Wounds=mysql_result($result,$i,"Wounds");
$Hahmon_numero=mysql_result($result,$i,"Hahmon_numero");

$Pohjoiskord=mysql_result($result2,$i,"pohjoista");
$itaistakord=mysql_result($result2,$i,"itaista");
$isokartta=mysql_result($result2,$i,"kartta");

$AP2 = round( ($Appearance + $Intelligence)  /2 );
$HR2 = round( ($Hp /4) * ($Regeneration) +1);
$HP2 = round( ($Strength /2 )+ ($Toughness * 2));
$MR2 = round( ($Mana_Power /2)* ($Regeneration));
$RM2 = round( ($Rage / 4));
$WL2 = round( ($Mana_Power + $Wisdom) /2 );
$W2 =  round( ($Hp / 10) + 1);



echo "<table border='1'><tr BGCOLOR='#C0DCC0'><td>Etunimi: $First </td><td>Sukunimi: $Last </td><td>Ikä: $Old </td><td>Pituus: $Height </td><td>Paino: $Weight </td></tr><tr BGCOLOR='#E0ACE0'><td>Appearance: $Appearance </td><td>Attack: $Attack </td><td>Charisma: $Charisma </td><td>Health_regeneration: $Health_regeneration </td><td>Hp: $Hp </td></tr><tr BGCOLOR='#E0ACE0'><td>Initiative: $Initiative </td><td>Intelligence: $Intelligence </td><td>Leadership: $Leadership </td><td>Mana_Power: $Mana_Power </td><td>Mana_regeneration: $Mana_regeneration </td></tr><tr BGCOLOR='#E0ACE0'><td>Peacefully: $Peacefully </td><td>Rage_multiply: $Rage_multiply </td><td>Rage: $Rage </td><td>Regeneratio: $Regeneration </td><td>Strength: $Strength </td></tr><tr BGCOLOR='#E0ACE0'><td>Toughness: $Toughness </td><td>Weapons Skill: $WeaponsSkill </td><td>Wisdom: $Wisdom </td><td>Wizard Level: $Wizard_Level </td><td>Wounds: $Wounds </td></tr>";

echo "<tr BGCOLOR='#E07C70'><td>pohjoista: ", $Pohjoiskord,"</td><td> itäistä: ",$itaistakord, "</td><td>Kartta:",$isokartta, "</td><td> Hahmon numero ",$Hahmon_numero,"</td></tr></table>";

echo "<table border='1'><tr><td><b>lasketut arvot:</b></td><td> Appearance: ",$AP2," </td><td> Health regeneration: ",$HR2," </td><td> HP: ",$HP2,"  </td><td> Mana regeneration: ",$MR2," </td><td> Rage multiply: ",$RM2," </td><td> Wizard Level: ",$WL2," </td><td> Wounds: ",$W2," </td></tr></table>";
echo "<hr>";

$i++;
}

echo "<img src='picture_mysql.php' ALT='Map'>";
?>