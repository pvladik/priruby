<?php 
require_once "config2.php";
require_once "db2.php";
$db_connect = dbconnect($db_host, $db_user, $db_pass, $db_name);


$query      = "SELECT COUNT(*) FROM pn6;" ;
//$query      = "SELECT * FROM pn6;" ;

$dotaz      = dbquery($query, $db_connect);

$vysledek = mysqli_fetch_row($dotaz);
$pocet_radku = $vysledek[0];

echo $pocet_radku;


echo




"
<style type='text/css'>
.tftable {font-size:12px;color:#333333;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffff99;}
</style>

<table class='tftable' border='1'>
<tr><th width='50px'>DN</th><th width='50px'>D trubky</th><th  width='50px'>d1</th><th width='50px'>a</th><th width='50px'>D</th><th width='50px'>b</th><th width='50px'>f</th><th width='50px'>závit</th><th width='50px'>počet</th><th width='50px'>kg</th><th width='50px'>d2</th><th width='50px'>h</th></tr>
<tr><td><b>1000</b></td><td> :1  :2</td><td> :1  :3</td><td> :1  :4</td><td> :1  :5</td><td> :1  :6</td><td> :1  :7</td><td> :1  :8</td><td> :1  :9</td><td> :1  :10</td><td> :1  :11</td><td> :1  :12</td></tr>

</table>
"
?>