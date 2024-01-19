<?php
session_start();
include "checkLoginUser.php";
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
//$_SESSION['currentTime']=$_POST['

$username=$_POST['username'];
$password=$_POST['password'];

$isValidUser = validatePassword($username,$password);

if ($isValidUser)
  {
    $userType = getUserType ($username);
    if ($userType == 'admin'){
      echo "<script>
      alert('Succesfull Login As Admin');
      window.location.href='adminView.php';
      </script>";
    }
    else if ($userType == 'staff'){
      echo "<script>
      alert('Succesfull Login As Staff');
      window.location.href='staffView.php';
      </script>";
    }


  }//if
  else {
        echo "<script>
        alert('Wrong Username or Password');
        window.location.href='index.php';
        </script>";
  }

?>
