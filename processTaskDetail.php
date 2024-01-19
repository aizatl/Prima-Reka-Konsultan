<?php
$id = $_POST['id'];
$name = $_POST['name'];
$date = $_POST['date'];
$pic = $_POST['pic'];
$taskName = $_POST['taskName'];
if(isset($_POST["submitButton"])){
  include 'function.php';
  $info = viewTaskDetail($taskName);
    while($row=mysqli_fetch_assoc($info)){
      if ($id == $row['taskDetailId']) {
        $check = "same";
      }
    }
    if ($check == "same") {
      echo "<script>
      alert('The task detail ID you entered are exist');
      window.location.href='adminDepartment.php';
      </script>";
    }
    else {
      $con = mysqli_connect("localhost",'web2','web2',"primareka");
      $sql = "insert into taskdetail(taskDetailId, taskName, nameTaskDetail, dueDate, status, submitted, staffInCharge, remark) values('".$id."','".$taskName."','".$name."','".$date."','ongoing','','".$pic."','')";
      $qry=mysqli_query($con,$sql);

      echo "<script>
      alert('Succesfull to add new task detail');
      window.location.href='adminDepartment.php';
      </script>";
    }
}
else {
  echo "<script>
  alert('Failed to add task detail');
  window.location.href='adminDepartment.php';
  </script>";
}
 ?>
