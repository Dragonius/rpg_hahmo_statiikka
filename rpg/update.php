<?php echo "<a href='index.html'>Takaisin indexsiin</a>"; ?>

<?php
include 'mysql.php';

$id=$_POST['id'];
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

$query = "UPDATE rpg_stats set Etunimi = '$Etunimi', Sukunimi = '$Sukunimi', Ika = '$Ika', pituus ='$Pituus',Paino ='$Paino', Appearance = '$Appearance',Attack = '$Attack',Charisma = '$Charisma',Health_regeneration = '$Health_regeneration',Hp = '$Hp',Initiative = '$Initiative',Intelligence = '$Intelligence',Leadership = '$Leadership',Mana_Power= '$Mana_Power',Mana_regeneration= '$Mana_regeneration',Peacefully ='$Peacefully',Rage_multiply = '$Rage_multiply',Rage = '$Rage',Regeneration = '$Regeneration',Strength ='$Strength', Toughness ='$Toughness',WeaponsSkill = '$WeaponsSkill',Wisdom = '$Wisdom',Wizard_Level = '$Wizard_Level', Wounds = '$Wounds' , Hahmon_numero = '$id' where id = '$id'";
mysql_query($query);
echo "$query <br>";
$query2 = "UPDATE rpg_kordinaatit set Hahmon_numero = '$Hahmon_numero',ccrosh = '$ccrosh', ccrosw = '$ccrosw',Kartta= '$Kartta' where id = '@id'";
mysql_query($query2);
echo "$query2";


mysql_close();
?>
