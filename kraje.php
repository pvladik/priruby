<?php
require_once "sessions.php";
require_once "config2.php";
require_once "db2.php";



echo "<html>
<head>
<title>eRZet</title>
<link rel='stylesheet' type='text/css' href='style.css'/>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
</head>";
echo "<body bgcolor='#212121'>";

echo "  <div id='horni_lista'>";
       
		require_once "horni_lista.php";
echo "	</div>";
//-------------------------------
echo "<div id='mypage'>";

//--------------------------------
echo "<div id='hlavicka'>";
     
	 require_once "hlavicka.php";
	 
echo "</div>";



//----------------------------------------

echo "<div id='menu'>";
require_once "menu.php";

echo "</div>";


//--------------------------------------
echo "<div id='obsah' >";
$db_connect = dbconnect($db_host, $db_user, $db_pass, $db_name);

$query      = "SELECT * FROM kraje ";
$dotaz      = dbquery($query, $db_connect);

$vysledek =  mysqli_fetch_row($dotaz);



echo "Počet RZ podle krajů";
echo "<br><br>";

echo "<div id='obr_mapa' >";
echo "<img src='mapa.jpg' alt='mapa'>";

echo "<div id='kraj_A' >";
echo $vysledek[0];
echo "</div>";

echo "<div id='kraj_S' >";
echo $vysledek[10];
echo "</div>";

echo "<div id='kraj_K' >";
echo $vysledek[6];
echo "</div>";

echo "<div id='kraj_P' >";
echo $vysledek[9];
echo "</div>";

echo "<div id='kraj_C' >";
echo $vysledek[2];
echo "</div>";

echo "<div id='kraj_U' >";
echo $vysledek[12];
echo "</div>";

echo "<div id='kraj_L' >";
echo $vysledek[7];
echo "</div>";

echo "<div id='kraj_H' >";
echo $vysledek[4];
echo "</div>";

echo "<div id='kraj_E' >";
echo $vysledek[3];
echo "</div>";

echo "<div id='kraj_J' >";
echo $vysledek[5];
echo "</div>";

echo "<div id='kraj_B' >";
echo $vysledek[1];
echo "</div>";

echo "<div id='kraj_Z' >";
echo $vysledek[13];
echo "</div>";

echo "<div id='kraj_M' >";
echo $vysledek[8];
echo "</div>";

echo "<div id='kraj_T' >";
echo $vysledek[11];
echo "</div>";


echo "</div>";

echo "<br><br><br><br>";
echo "</div>";

//---------------------------------------

echo "</div>";


echo "<div id='paticka'>";
require_once "paticka.php";

echo "</div>";
echo "</body>";
	
?>