<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Completed Task </title>
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

</head>
<style >
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    float: right;
    text-decoration: none;
    color: green;
}
input.right {
      float: right;
}
a.right {
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

      <div id="logo" class="pull-left">
        <h1><a href="#hero"> Completed Task </a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="staffView.php">Home</a></li>
          <li ><a href="staffDepartment.php">Department</a></li>

          <li><a href="staffNotCompleted.php">Not Completed</a></li>
          <li class="menu-active"><a href="staffCompleted.php">Completed</a></li>
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
        ?>

        <div class = search-panel>
          <form action="" method="GET">
            <input type="text"  id = "search" name="taskIdToSearch">
            <input type="submit" id="id" name="searchTaskID" value="Search Task ID">
            <input type="submit" id ="display"  name="displayAll" value="Display All">
          </form>

        </div>
        <?php
        if(isSet($_GET['searchTaskID']))
          $completedList = findCompletedTask();
        else
          $completedList = getListOfCompletedTask();

        echo "<h3 id='numOfComplaints'> NO. OF COMPLETED TASK: ".mysqli_num_rows($completedList). "</h3>";
         ?>
         <table class="table table-bordered table-dark">
           <thead>
             <tr>
               <th scope="col" style="background-color:#FF5733">Task Details ID</th>
               <th scope="col" style="background-color:#FF5733">Task Detail Name</th>
               <th scope="col" style="background-color:#FF5733">Under Task</i></th>
               <th scope="col" style="background-color:#FF5733">Due Date</i></th>
               <th scope="col" style="background-color:#FF5733">Status</i></th>
               <th scope="col" style="background-color:#FF5733">Staff In Charge</i></th>
               <th scope="col" style="background-color:#FF5733">Submitted</i></th>
               <th scope="col" style="background-color:#FF5733">Remarks</i></th>
             </tr>
           </thead>
           <?php
           $count=1;

           while($row=mysqli_fetch_assoc($completedList))
           {
             //display
             echo"<tr>";
             echo "<td>".$row['taskDetailId']."</td>";
             echo"<td>".$row['nameTaskDetail']."</td>";
             echo"<td>".$row['taskName']."</td>";
             echo"<td>".$row['dueDate']."</td>";
             echo"<td>".$row['status']."</td>";
             echo"<td>".$row['staffInCharge']."</td>";
             ?>
             <td><a href="staffDownload.php?file_id=<?php echo $row['taskDetailId'] ?>">Download</a></td><?php

             if ($row['remark']=="") {
               echo "<td>";
               $remarkToAdd = $row['taskDetailId'];
               $tajuk = $row['taskName'];
               echo "<form action=staffAddRemark.php method=post>";
               echo "<input type='hidden' value='$tajuk' name='namaDiterima'>";
               echo "<input type='hidden' value='$remarkToAdd' name='remarkToAdd'>";
               echo '<input type="submit" id="" name="editButton" value="Add Remark">';
               echo "</form></td>";
             }
             else {
               echo"<td>".$row['remark']."</td>";
             }
           }
           ?>
         </tr>

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
