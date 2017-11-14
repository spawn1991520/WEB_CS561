<?php
//ini_set('display_errors',True);
 session_start();
include("db.php");
if (isset($_SESSION['username'])){


echo "\t</tr>\n";



$query = 'SELECT username,firstname, lastname FROM Users';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
//echo "<table>\n";
echo "<table><tr><td>username<td><td>First name<td><td>Last name<td><td></tr>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	if ($line['username']==$_SESSION['username']){
	   echo "\t<tr>\n";
	   foreach ($line as $col_value) {
		   echo "\t\t<td>$col_value </td><td>\n";
	   }
	   echo "\t</tr>\n";
	}
}
echo "</table>\n";
}