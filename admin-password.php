<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Changing Password</title>
    <link rel="stylesheet" href="css/s1.css">
  </head>
  <body>
  <?php
include_once('connection.php');

if(isset($_POST['submit'])){
    $opwd = $_POST['pass'];
    $npwd = $_POST['npwd'];
    $cpwd =$_POST['cpwd'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname="mypro_bbms";
    $connect = mysqli_connect($hostname,$username,$password,$dbname);

$query = mysqli_query($connect,"SELECT pass from admin where pass ='$opwd'");
  $num = mysqli_fetch_array($query);
  if($num >0)
  {
      $con = mysqli_query($connect,"UPDATE admin set pass ='$npwd' where pass='$opwd'");
      $_SESSION['msg1'] = "Password Change Successfully";
      echo "<script>alert('New Password Added Successfully')</script>";
    }
    else{
        $_SESSION['msg1'] = "Password does not match Successfully";
        echo "<script>alert('New Password Added UnSuccessfully')</script>";
    }
}

?>
    <div id="full">
      <div id="inner_full">
          <div id="header"><h2>Blood Bank Management System</h2></div>
            <div id="body">
              <br><br>
     <form name="chngpwd" action="" method="post"onSubmit ="return valid();">
              <table align="center">
              <tr class=hlw>  <th>Hello Admin </th></tr>
                <tr>
                  <td width ="200px"height="70px"><b>Enter Old Password:</b></td>
                  <td width ="200px" height ="70px">
                    <input type="text" name="pass" placeholder="Old Password..." style="width: 180px;height: 30px; border-radius: 8px;">
                  </td>
                </tr>
                <tr>
                  <td width ="200px"height="70px"><b>Enter New Password:</b></td>
                  <td width ="200px" height ="70px">
                    <input type="text" name="npwd" placeholder="Enter new Password.."
                    style="width:180px; height:30px;
                    border-radius:8px;">
                  </td>
                </tr>
                <tr>
                  <td width ="200px"height="70px"><b>Enter Confirm Password:</b></td>
                  <td width ="200px" height ="70px">
                    <input type="text" name="cpwd" placeholder="Enter confirm Password.."
                    style="width:180px; height:30px;
                    border-radius:8px;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="submit" value="Change" style="width: 70px; height: 29px; border-radius:5px;">
                  </td>
                </tr>

              </table>
            </form>
     

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