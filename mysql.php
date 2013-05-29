<?php

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
$hostname="dbo472076999";
$database="db472076999";
$username="dbo472076999";
$password="ch4ll3ng3";

//DO NOT EDIT BELOW THIS LINE
$link = mysql_connect($hostname, $username, $password);
if (!$link) {
die('Connection failed: ' . mysql_error());
}
else{
     echo "Connection to MySQL server " .$hostname . " successful!
" . PHP_EOL;
}

$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('Can\'t select database: ' . mysql_error());
}
else {
    echo 'Database ' . $database . ' successfully selected!';
}

mysql_close($link);

?>
