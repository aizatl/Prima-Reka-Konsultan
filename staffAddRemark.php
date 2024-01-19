<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Add Remark </title>
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

<body>

  <!--==========================
  Header
  ============================-->

  <header id="header">
    <div class="container">
<div id="logo" class="pull-left"><a><h1>
    <?php
    $tajuk=$_POST['remarkToAdd'];
    $namaDiterima=$_POST['namaDiterima'];
    echo "Add Remark for <br>$tajuk";
     ?>
  </a></h1>
 </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="staffView.php">Home</a></li>
          <li ><a href="staffDepartment.php">Department</a></li>
          <li class="menu-active"><a href="#"> Add Remark </a></li>

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
      <center><fieldset class="formm">

           <form action='staffProcessRemark.php' method='post' style='margin-top:35px' onsubmit= "return confirm('Confirm Submission?');">
             <?php
          echo "REMARKS<br>";
          echo "<textarea rows='5' cols='55' placeholder='What's your remark? Write here!' id='complaint' name='complaint' ></textarea>
          <input type='hidden' value='$tajuk' name='tajuk'>
          <input type='hidden' value='$namaDiterima' name='namaDiterima'>
          <br>

          <input type='submit' class='submitBtn' style='margin-bottom: 10px' name='submitButton' value='Submit' onclick='myFunction()'>
          ";
 ?>


        </form>
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
