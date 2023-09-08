<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/s1.css">
  </head>
  <body>
    <div id="full">
      <div id="inner_full">
          <div id="header"><h2>Blood Bank Management System</h2></div>
            <div id="body">
              <br><br>
     <form class="" action="" method="post">
              <table align="center">
              <tr class=hlw>  <th>Admin Login System </th></tr>
                <tr>
                  <td width ="200px"height="70px"><b>Enter Email:</b></td>
                  <td width ="200px" height ="70px">
                    <input type="text" name="un" placeholder="Enter Email.." style="width: 180px;height: 30px; border-radius: 8px;">
                  </td>
                </tr>
                <tr>
                  <td width ="200px"height="70px"><b>Enter Password:</b></td>
                  <td width ="200px" height ="70px">
                    <input type="text" name="ps" placeholder="Enter Password.."
                    style="width:180px; height:30px;
                    border-radius:8px;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="sub" value="Login" style="width: 70px; height: 29px; border-radius:5px;">
                  </td>
                </tr>

              </table>
            </form>
     <?php

     if(isset($_POST['sub']))
     {
        $un = $_POST['un'];
        $ps = $_POST['ps'];
        $q = $db->prepare("SELECT * FROM admin WHERE uname = '$un' && pass='$ps'");
        $q->execute();
        $res = $q-> fetchALL(PDO::FETCH_OBJ);
        if($res)
        {
          $_SESSION['un'] = $un;
          header("Location:admin-home.php");
        }
        else
        {
          echo "<script>alert('Wrong User') </script";
        }
     }
     ?>

            </div>
              <div id="footer">
              <h4 align="center">
                <br>
                Copyright@Soumik Datta CSE'17
              </h4>
              </div>


      </div>
    </div>
  </body>
</html>
