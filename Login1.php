
<?php
/*
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'yanghaox-db';
$dbuser = 'yanghaox-db';
$dbpass = 'lPNfSSZbUwZwdD9J';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

echo 'Successfully connected to database!';
*/
function password_verify1($a,$b)
{return $a==$b;}
$connection=mysqli_connect("udm328989166.my3w.com","udm328989166","gaoxiaofei","udm328989166_db");
if (mysqli_connect_errno())
  {
  echo "can't connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($connection,"SELECT * FROM Users WHERE username ='$_POST[username]'");
  if (mysqli_num_rows($result) > 0) 
  {
    printf("Found Users.");
    $row = mysqli_fetch_row($result);
    if(password_verify1($_POST[Password],$row[4]))
    {

      printf("Log in success.\n");

    }
    else
    {
     printf("Password incorrect.\n"); 
    }  
    //     printf ("%s\n",$row[4]);
    // } 


    /* free result set */
    mysqli_free_result($result);
      
  }
  else
  {
   printf("Not Found Users\n"); 
  }



  // $sql = "INSERT INTO Users (username, firstname, lastname, email, password, gender) VALUES ('$_POST[username]', '$_POST[firstname]','$_POST[lastname]', '$_POST[email]','$_POST[password]','$_POST[gender]')";
 // $result = mysql_query($sql);
  // if (!mysqli_query($connection,$sql))
  // {
  // die('Error: Check your data again. :)' . mysqli_error($connection));
  // }

mysqli_close($connection);
?>