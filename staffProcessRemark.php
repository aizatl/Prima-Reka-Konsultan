<?php
$button = $_POST['cancelButton'] . $_POST['submitButton'];
//print_r($_POST);
$complaint = $_POST['complaint'];
$id = $_POST['tajuk'];
$namaDiterima = $_POST['namaDiterima'];

  if(isset($_POST["submitButton"])){

      $con = mysqli_connect("localhost",'web2','web2',"primareka");
            if(mysqli_connect_errno())
          	{
                	echo 'connection error.<br>';
                	echo mysqli_connect_error();
          	}
            else
          	{

                  $sql = "update taskdetail set remark ='".$complaint."'WHERE taskDetailId = '".$id."'";

                	$qry=mysqli_query($con,$sql);//execute qry
                  echo "<script>
                  alert('Successfully added remark');
                  window.location.href='staffDepartment.php';
                  </script>";
            }
                ;//redirect to studet main page
  }
    else {
      echo "<script>
      alert('Failed to add file');
      window.location.href='staffDepartment.php';
      </script>";

    }

  ?>
