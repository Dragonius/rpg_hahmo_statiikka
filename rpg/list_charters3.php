<html>
<body>
<script src="./js/Chart.js"></script>

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
echo "<table><tr>";
$i2=0;
while ($i2 < $num) {
echo "<td>";
echo "<table border='1'>";
echo "<form name='pointform' action='update.php' method='post'>";
echo "<tr BGCOLOR='#C0DCC0' width='300'>";
$First=mysql_result($result,$i2,"etunimi");
echo "<td width='300'>Etunimi: $First </td>" ;
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Last=mysql_result($result,$i2,"sukunimi");
echo "<td>Sukunimi: $Last </td>";
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Old=mysql_result($result,$i2,"ika");
echo "<td>Ikä: $Old </td>";
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Height=mysql_result($result,$i2,"pituus");
echo "<td>Pituus: $Height </td>";
echo "</tr><tr BGCOLOR='#C0DCC0'>";
$Weight=mysql_result($result,$i2,"paino");
echo "<td>Paino: $Weight </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Appearance=mysql_result($result,$i2,"Appearance");
echo "<td>Appearance: $Appearance </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Attack=mysql_result($result,$i2,"Attack");
echo "<td>Attack: $Attack </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Charisma=mysql_result($result,$i2,"Charisma");
echo "<td>Charisma: $Charisma </td>";
echo "</tr><tr BGCOLOR='#DCC0DC'>";
$Health_regeneration=mysql_result($result,$i2,"Health_regeneration");
echo "<td>Health_regeneration: $Health_regeneration </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Hp=mysql_result($result,$i2,"Hp");
echo "<td>Hp: $Hp </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Initiative=mysql_result($result,$i2,"Initiative");
echo "<td>Initiative: $Initiative </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Intelligence=mysql_result($result,$i2,"Intelligence");
echo "<td>Intelligence: $Intelligence </td>";
echo "</tr><tr BGCOLOR='#DCC0C0'>";
$Leadership=mysql_result($result,$i2,"Leadership");
echo "<td>Leadership: $Leadership </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Mana_Power=mysql_result($result,$i2,"Mana_Power");
echo "<td>Mana_Power: $Mana_Power </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Mana_regeneration=mysql_result($result,$i2,"Mana_regeneration");
echo "<td>Mana_regeneration: $Mana_regeneration </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Peacefully=mysql_result($result,$i2,"Peacefully");
echo "<td>Peacefully: $Peacefully </td>";
echo "</tr><tr BGCOLOR='#DCDCC0'>";
$Rage_multiply=mysql_result($result,$i2,"Rage_multiply");
echo "<td>Rage_multiply: $Rage_multiply </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Rage=mysql_result($result,$i2,"Rage");
echo "<td>Rage: $Rage </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Regeneration=mysql_result($result,$i2,"Regeneration");
echo "<td>Regeneratio: $Regeneration </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Strength=mysql_result($result,$i2,"Strength");
echo "<td>Strength: $Strength </td>";
echo "</tr><tr BGCOLOR='#C0C0DC'>";
$Toughness=mysql_result($result,$i2,"Toughness");
echo "<td>Toughness: $Toughness </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$WeaponsSkill=mysql_result($result,$i2,"WeaponsSkill");
echo "<td>Weapons Skill: $WeaponsSkill </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$Wisdom=mysql_result($result,$i2,"Wisdom");
echo "<td>Wisdom: $Wisdom </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$Wizard_Level=mysql_result($result,$i2,"Wizard_Level");
echo "<td>Wizard Level: $Wizard_Level </td>";
echo "</tr><tr BGCOLOR='#C0DCDC'>";
$Wounds=mysql_result($result,$i2,"Wounds");
echo "<td>Wounds: $Wounds </td>";

echo "</tr><tr><td><canvas id='$i2' height='300' width='300'></canvas>";
echo "<script>

		var radarChartData = {
			labels : ['Appearance','Wisdom','Wounds','Peacefully','Mana_regeneration','Leadership','Mana_Power'],
			datasets : [
				{
					fillColor : 'rgba(250,001,001,0.5)',
					strokeColor : 'rgba(200,001,001,1)',
					pointColor : 'rgba(120,020,020,1)',
					pointStrokeColor : '#fff',
					data : [$Appearance,$Wisdom,$Wounds,$Peacefully,$Mana_regeneration,$Leadership,$Mana_Power]
				}
			]

		}

	var myRadar = new Chart(document.getElementById('$i2').getContext('2d')).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});

	</script></td>";
echo "</tr></table>";
echo "</td>";
$i2++;
}

echo "<hr>";

?>

</body>
</html>