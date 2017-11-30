<?php
ini_set('display_errors',True);
session_start();
include("db.php"); 


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">p
        <tr>`
            <td>
                <form method="post" name="">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>User
                            Login</strong></td>
                        </tr>
                        <tr>
                            <td width="78">email</td>
                            <td width="6">:</td>
                            <td width="294"><input id="email" name=
                            "email" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="Password" name="Password" type=
                            "Password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Login"> <input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <?php

    if (isset($_POST['submit']))
        {     
    
    $email=$_POST['email'];
    $Password=$_POST['Password'];
    $_SESSION['login_user']=$email; 
    $query = mysql_query("SELECT email FROM Users WHERE email='".$email."' and Password='".$Password."'");
     if (mysql_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
</body>
</html>