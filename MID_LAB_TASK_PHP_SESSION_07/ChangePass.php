<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>





<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
  </head>
  <body>
    <table border="1" cellspacing="0" width="80%" >
      <tr>
         <td colspan="2">
          <table width="100%">
              <tr>
                <td><img height="40px" weight="40px" src="logo.png" alt=""></td>
                <td align = "right">
                    Logged in as
                    <a href="ViewProfile.php"><?php $userr = $_SESSION['current_user']; $name= $userr['name']; echo "$name"; ?></a>|
                    <a href="UserLogout.php">Logout</a>
                </td>
              </tr>
          </table>
          </td>
      </tr>
      <tr>
        <td height="150px" weight="150px">
            <b>Account</b>
            <hr>
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="EditProfile.php">Edit Profile</a></li>
                    <li><a href="ProfilePic.php">Change Profile Picture</a></li>
                    <li><a href="ChangePass.php">Change Password</a></li>
                    <li><a href="UserLogout.php">Logout</a></li>
                </ul>

        </td>
        <td>
            <fieldset>
                <legend>CHANGE PASSWORD</legend>
        <form class="" action="PassCheck.php" method="post">
            <table>
            <tr>
            <td>Current Password</td>
            <td>:<input type="password" name="password" value=""></td>
            </tr>
            <tr>
            <td>New Password</td>
            <td>:<input type="password" name="newpassword" value=""></td>
            </tr>
            <tr>
            <td>Retype New Password</td>
            <td>:<input type="password" name="repassword" value=""></td>
            </tr>
            </table>
            <hr>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
            </fieldset>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">Copyright Ⓒ 2017</td>
      </tr>
    </table>

  </body>
</html>


<?php

	}else{
		header('location: Login.html');
	}

?>