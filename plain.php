<?php
header('Content-Type: text/plain');
$conn = mysql_connect ("localhost", "root", "password") or die ('echo "500 /bin/paste/ Currently unreachable."');
mysql_select_db("db");
$id = mysql_real_escape_string($_GET['id']);
$abfrage = "SELECT * FROM pastes WHERE sha1 = '$id'";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
   echo $row->paste;
   break;
   }
//echo mysql_error();

?>
