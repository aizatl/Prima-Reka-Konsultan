<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> List of Task </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/replyComplaintBtn.css" rel="stylesheet">

</head>
<style>
input.right {
      float: right;
    }
    #editBtn {
      background-color:#808080;
    	-moz-border-radius:20px;
    	-webkit-border-radius:20px;
    	border-radius:20px;
    	border:1px ;
    	display:inline-block;
    	cursor:pointer;
    	color:#464F4C;
    	font-family:Verdana;
    	font-size:10px;
    	padding:8px;
    	text-decoration:none;
    	text-shadow:0px 1px 15px #02dca9;
    }
    #editBtn:hover {
    	background-color:#a6bbb6;
    }
    #editBtn:active {
    	position:relative;
    	top:1px;
    }
    #numOfComplaints
    {
      font-family: "Open Sans", sans-serif;
      color: #ffffff;
      font-size: 24px;
    }
</style>
<body>

  <!--==========================
  Header
  ============================-->

  <header id="header">
    <div class="container">
<div id="logo" class="pull-left"><a><h1>
    <?php
    $tajuk=$_POST['taskDetailToView'];


    echo " $tajuk <br> TASK";
     ?>
  </a></h1>
 </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="staffView.php">Home</a></li>
          <li ><a href="staffDepartment.php">Department</a></li>
          <li class="menu-active"><a href="#"> Task Detail </a></li>

          <li><a href="staffNotCompleted.php">Not Completed</a></li>
          <li><a href="staffCompleted.php">Completed</a></li>
          <li><a href="logout.php"> Logout </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div>
        <?php
        include "function.php";
        $taskToView=$_POST['taskDetailToView'];
        $info=viewTaskDetail($taskToView);

        $conn = mysqli_connect('localhost', 'web2', 'web2', 'primareka');
        $sql = "SELECT * FROM taskdetail where taskName = '".$tajuk."'";

        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //$row=mysqli_fetch_assoc($taskInfo);
        echo "<h3 id='numOfComplaints'> NO. OF TASK: ".mysqli_num_rows($info). "</h3>";
        ?>
        <table class="table table-bordered table-dark">
        <thead>
            <th  style="background-color:#FF5733">Due Date</th>
            <th style="background-color:#FF5733">Task</th>
            <th style="background-color:#FF5733">Status</th>
            <th style="background-color:#FF5733">Submitted</th>
            <th style="background-color:#FF5733">PIC/EIC</th>
            <th style="background-color:#FF5733">Remark</th>
        </thead>
        <tbody>
          <?php
           $date_now = date("Y-m-d");
           ?>

          <?php foreach ($rows as $file): ?>
            <tr>
              <td><?php echo $file['dueDate']; ?></td>
              <td><?php echo $file['nameTaskDetail']; ?></td>

              <?php
              if ($date_now < $file['dueDate'] && $file['status'] == 'Done') {
                echo "<td>Done</td>";
              }
              elseif ($date_now > $file['dueDate'] && $file['status'] == 'Done') {
                echo "<td>Done</td>";
              }
              elseif ($date_now < $file['dueDate']) {
                echo "<td>Ongoing</td>";
              }
              else {
                echo "<td>Late</td>";
              }

               ?>

              <?php
              if ($file['submitted']==""){
                echo "<td>";
                $idToSubmit = $file['taskDetailId'];
                echo '<form action="staffSubmit.php" method="post">';
                echo "<input type='hidden' value='$idToSubmit' name='idToSubmit'>";
                echo '<input type="submit" id="" name="editButton" value="Click to Add File">';
                echo "</form></td>";
              ?>

              <?php
              }
              else {?>
                <td><a href="staffDownload.php?file_id=<?php echo $file['taskDetailId'] ?>">Download</a></td><?php
              }

              ?>


              <td><?php echo $file['staffInCharge']; ?></td>
              <?php
              if ($file['remark']=="") {
                echo "<td>";
                $remarkToAdd = $file['taskDetailId'];
                echo "<form action=staffAddRemark.php method=post>";
                echo "<input type='hidden' value='$tajuk' name='namaDiterima'>";
                echo "<input type='hidden' value='$remarkToAdd' name='remarkToAdd'>";
                echo '<input type="submit" id="" name="editButton" value="Add Remark">';
                echo "</form></td>";
              }
              else {
                echo"<td>".$file['remark']."</td>";
              }
               ?>
            </tr>

          <?php endforeach;?>
          <tr>
            <form action="staffAddTaskDetail.php" method="post">
            <td colspan="6">
              <?php
              echo "<input type='hidden' value='$tajuk' name='taskNameToAdd'>";
              echo "<input type=submit id=editBtn name=editButton class=right value='Add Task Under $tajuk'>";
                ?>
            </td>
          </form>
          </tr>
        </tbody>
        </table>


    </div>


  </div>
  </section><!-- #hero -->

  <main id="main">

  </main>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
