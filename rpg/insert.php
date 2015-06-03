<?php echo "<a href='index.html'>Takaisin indexsiin</a>"; ?>

<?php
include 'mysql.php';

$Etunimi=$_POST['Etunimi'];
$Sukunimi=$_POST['Sukunimi'];
$Ika=$_POST['Ika'];
$Pituus=$_POST['Pituus'];
$Paino=$_POST['Paino'];
$Appearance=$_POST['Appearance'];
$Attack=$_POST['Attack'];
$Charisma=$_POST['Charisma'];
$Health_regeneration=$_POST['Health_regeneration'];
$Hp=$_POST['Hp'];
$Initiative=$_POST['Initiative'];
$Intelligence=$_POST['Intelligence'];
$Leadership=$_POST['Leadership'];
$Mana_Power=$_POST['Mana_Power'];
$Mana_regeneration=$_POST['Mana_regeneration'];
$Peacefully=$_POST['Peacefully'];
$Rage_multiply=$_POST['Rage_multiply'];
$Rage=$_POST['Rage'];
$Regeneration=$_POST['Regeneration'];
$Strength=$_POST['Strength'];
$Toughness=$_POST['Toughness'];
$WeaponsSkill=$_POST['WeaponsSkill'];
$Wisdom=$_POST['Wisdom'];
$Wizard_Level=$_POST['Wizard_Level'];
$Wounds=$_POST['Wounds'];
$Hahmon_numero=$_POST['Hahmon_numero'];
$ccrosh=$_POST['form_x'];
$ccrosw=$_POST['form_y'];
$Kartta=$_POST['Kartta'];



mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO rpg_stats VALUES ('','$Etunimi','$Sukunimi','$Ika','$Pituus','$Paino','$Appearance','$Attack','$Charisma','$Health_regeneration','$Hp','$Initiative','$Intelligence','$Leadership','$Mana_Power','$Mana_regeneration','$Peacefully','$Rage_multiply','$Rage','$Regeneration','$Strength','$Toughness','$WeaponsSkill','$Wisdom','$Wizard_Level','$Wounds','$Hahmon_numero')";
mysql_query($query);

$query2 = "INSERT INTO rpg_kordinaatit VALUES ('','$Hahmon_numero','$ccrosh','$ccrosw','$Kartta')";
mysql_query($query2);

mysql_close();

echo "Etunimi $Etunimi ,Sukunimi $Sukunimi ,Ika $Ika ,Pituus $Pituus ,Paino $Paino ,Appearance $Appearance";
echo "Attack $Attack ,Charisma $Charisma ,Health_regeneration $Health_regeneration ,Hp $Hp ,Initiative $Initiative";
echo "Intelligence $Intelligence ,Leadership $Leadership Mana_Power $Mana_Power ,Mana_regeneration $Mana_regeneration";
echo "Peacefully $Peacefully ,Rage_multiply $Rage_multiply ,Rage $Rage ,Regeneration $Regeneration ,Strength $Strength";
echo "Toughness $Toughness ,WeaponsSkill $WeaponsSkill ,Wisdom $Wisdom ,Wizard_Level $Wizard_Level ,Wounds $Wounds ,Hahmon_numero $Hahmon_numero ";
echo "Hahmon_numero  $Hahmon_numero ,ccrosh $ccrosh ,ccrosw $ccrosw ,Kartta $Kartta ";
?>

