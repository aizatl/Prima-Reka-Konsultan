<?php
$button = $_POST['submitButton'];
//print_r($_POST);
$id = $_POST['id'];
$name = $_POST['name'];
$detail = $_POST['detail'];
$pic = $_POST['pic'];
$duration = $_POST['duration'];
$department = $_POST['department'];

  if(isset($_POST["submitButton"])){
    include "function.php";
    $idInfo = getListOfTask();
    //echo "<h3 id='numOfComplaints'> NO. OF TASK: ".mysqli_num_rows($idInfo). "</h3>";
    while($row=mysqli_fetch_assoc($idInfo))
    {
      if($id == $row['taskId']){
        $check = "sama";
      }
      if($name == $row['taskName']){
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

                  if ($check == "sama") {
                    echo "<script>
                    alert('The task ID or Task Name you entered are exist');
                    window.location.href='staffDepartment.php';
                    </script>";
                  }
                  else {
                    $con = mysqli_connect("localhost",'web2','web2',"primareka");
                    $sql = "insert into task(taskId, taskName, projectDetail, pic, department, duration) values('".$id."','".$name."','".$detail."','".$pic."','".$department."','".$duration." days')";

                    $qry=mysqli_query($con,$sql);//execute qry
                    echo "<script>
                    alert('Succesfull to add new task');
                    window.location.href='staffDepartment.php';
                    </script>";
                  }
          }
  }
    else {
      echo "<script>
      alert('Failed to task');
      window.location.href='staffDepartment.php';
      </script>";

    }

  ?>
