<?php
$button = $_POST['submitButton'];
//print_r($_POST);
$userType = $_POST['userType'];
$id = $_POST['id'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

  if(isset($_POST["submitButton"])){
      include "function.php";
      $idInfo = viewAllID();
      //echo "<h3 id='numOfComplaints'> NO. OF TASK: ".mysqli_num_rows($idInfo). "</h3>";
      while($row=mysqli_fetch_assoc($idInfo))
      {
        if($id == $row['id']){
          $check = "sama";
        }
      }

            if(mysqli_connect_errno())
          	{
                	echo 'connection error.<br>';
                	echo mysqli_connect_error();
          	}
            else
          	{
                  if ($password == $password2) {
                    if ($check == "sama") {
                      echo "<script>
                      alert('The user ID you entered are exist');
                      window.location.href='addUser.php';
                      </script>";
                    }
                    else {
                      $con = mysqli_connect("localhost",'web2','web2',"primareka");
                      $sql = "insert into users(id, password, userType) values('".$id."','".$password."','".$userType."')";
                      $qry=mysqli_query($con,$sql);//execute qry

                      //$qry=mysqli_query($con,$sql);//execute qry
                      echo "<script>
                      alert('Succesfull to add new user');
                      window.location.href='user.php';
                      </script>";
                    }
                  }

                  else {
                    echo "<script>
                    alert('Your password are not the same');
                    window.location.href='addUser.php';
                    </script>";
                  }
            }
          }
    else {
      echo "<script>
      alert('Failed to add file');
      window.location.href='user.php';
      </script>";

    }

  ?>
