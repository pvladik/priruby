<?php

function dbconnect ($db_host, $db_user, $db_pass, $db_name)
{
	global $db_connect;
	$db_connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	//$db_select = mysqli_select_db($db_connect, $db_name);
	$db_select = NULL;
		
    if (!$db_connect) {
		echo "spojeni NE<br>";
        die("Unable to establish connection to MySQL<br>".mysqli_error($db_connect));
        }
	//echo "spojeni OK";
	dbquery("SET character_set_server = 'utf8'",$db_connect);
	return $db_connect;
}

function dbquery ($query, $db_connect)
{
     if (!$db_connect) {
		echo "spojeni NE query<br>";
        die("<div style='font-family:Verdana;font-size:11px;text-align:center;'><b>Unable to establish connection to MySQL</b><br>".mysqli_errno()." : ".mysqli_error()."</div>");
      }
	//echo "spojeni OK-query<br>";
    $result = mysqli_query($db_connect, $query) ;
	//echo "provedeno ymsqli query<br>";
	
    if (!$result ) {
		
        echo "error <br>";
     //  echo mysqli_error($db_connect);
        return false;
    }
    else  return $result;
}





//INSERT INTO `mojedb` (`id`, `time`, `vara`, `varb`) VALUES ('1', '1', '1', '1');
?>