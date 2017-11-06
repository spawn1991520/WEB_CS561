<!-- 
<a href="./Sign-Up.php">Sign-Up</a><br> 
-->
<?php


$link = mysql_connect('classmysql.engr.oregonstate.edu', 'cs340_yanghaox', '0722')
   or die('Could not connect: ' . mysql_error());

echo "\t</tr>\n";
//echo 'welcome';
mysql_select_db('cs340_yanghaox') or die('Could not select database');


$query = 'SELECT username,firstname, lastname FROM Users';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
//echo "<table>\n";
echo "<table><tr><td>username<td><td>First name<td><td>Last name<td><td></tr>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
   echo "\t<tr>\n";
   foreach ($line as $col_value) {
       echo "\t\t<td>$col_value </td><td>\n";
   }
   echo "\t</tr>\n";
}
echo "</table>\n";