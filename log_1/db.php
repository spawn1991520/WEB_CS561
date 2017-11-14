<?php
/*
$dbhost = 'udm328989663.my3w.com';
$dbname = 'udm328989663_db';
$dbuser = 'udm328989663_db';
$dbpass = 'yhx901013';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

echo 'Successfully connected to database!';
*/

$connection=mysql_connect("udm328989663.my3w.com","udm328989663","yhx901013","udm328989663_db");

if (!$connection) 
  {
  echo "can't connect to MySQL: " .  mysql_error();
  }
else{
	
}
$db_selected = mysql_select_db('udm328989663_db', $connection);  
if (!$db_selected) {  
    die ('Cannot use database mydbname : ' . mysql_error());  
}  
 // $sql = "INSERT INTO Users (username, firstname, lastname, email, Password, Gender) VALUES ('$_POST[username]', '$_POST[firstname]','$_POST[lastname]', '$_POST[email]','$_POST[Password]','$_POST[Gender]')";
 // $result = mysql_query($sql);
  //if (!mysqli_query($connection,$sql))
  //{
  //die('Error: your data already exist in the database. Check your data again. :)' . mysqli_error($connection));
  //}

//mysqli_close($connection);