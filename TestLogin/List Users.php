<a href="./Sign-Up.php">Sign-Up</a><br> 
<?php


$link = mysql_connect('udm328989166.my3w.com', 'udm328989166', 'gaoxiaofei')
   or die('Could not connect: ' . mysql_error());

echo "\t</tr>\n";
//echo 'welcome';
mysql_select_db('udm328989166_db') or die('Could not select database');


$query = 'SELECT username,firstname, lastname, email FROM Users';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
//echo "<table>\n";
echo "<table><tr><td>username<td><td>First name<td><td>Last name<td><td>E-mail<td><td></tr>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
   echo "\t<tr>\n";
   foreach ($line as $col_value) {
       echo "\t\t<td>$col_value </td><td>\n";
   }
   echo "\t</tr>\n";
}
echo "</table>\n";
?>