<?php
$department=$_POST['taskNameToAdd'];
 ?>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <title> Add Task </title>
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
 </style>
 <body>

   <!--==========================
   Header
   ============================-->

   <header id="header">
     <div class="container">
 <div id="logo" class="pull-left"><a><h1>
     <?php
     echo "Add Task for<br> ".$department. " Department";
      ?>
   </a></h1>
  </div>
       <nav id="nav-menu-container">
         <ul class="nav-menu">
           <li><a href="adminView.php">Home</a></li>
           <li><a href="adminDepartment.php"> Department </a></li>
           <li class="menu-active"><a href="#"> Add Task </a></li>
           <li><a href="adminNotCompleted.php">Not Completed</a></li> <li><a href="AdminCompleted.php">Completed</a></li>
           <li><a href="user.php">User</a></li>
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

       <center><fieldset class="formm">
        <table class="table table-bordered table-dark">
          <form action='processTask.php' method='post' style='margin-top:35px' onsubmit= "return confirm('Confirm Submission?');">
          <th>
            <h3>Enter Task ID for New Task</h3>
            <textarea rows='2' cols='55' name="id" placeholder= "Task ID start with T (example T101) and should not same as existing task ID"></textarea><br><br>
            <h3>Enter Task Name for New Task</h3>
            <textarea rows='2' cols='55' name="name" placeholder= "Task Name should not same as existing task name"></textarea><br><br>
            <h3>Enter Project Details for New Task</h3>
            <textarea rows='3' cols='55' name="detail" placeholder= "Briefly explain what is project purpose"></textarea><br><br>
          </th>
          <th>
            <h3>Enter Person in Charge</h3>
            <textarea rows='2' cols='55' name="pic" placeholder= "Staff that will be lead for this project"></textarea><br><br>
            <h3>Enter Duration</h3>
            <textarea rows='2' cols='55' name="duration" placeholder= "Expected duration for this project in days(example 30*dont put day just put number)"></textarea><br><br><br><br><br>
            <?php echo "<input type='hidden' value='$department' name='department'>"; ?>
            <right><input type="submit" name='submitButton' value="SUBMIT" id="editBtn" class="right" onclick='myFunction()'>
          </th>
        </form>
        </table>
       </fieldset></center>
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
