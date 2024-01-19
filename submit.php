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

<body>

  <!--==========================
  Header
  ============================-->

  <header id="header">
    <div class="container">
<div id="logo" class="pull-left"><a><h1>
    <?php
    $tajuk=$_POST['idToSubmit'];
    echo "Add file for $tajuk";
     ?>
  </a></h1>
 </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="adminView.php">Home</a></li>
          <li><a href="adminDepartment.php"> Department </a></li>
          <li class="menu-active"><a href="#"> Add File </a></li>
          <li><a href="adminNotCompleted.php">Not Completed </a></li>
          <li><a href="adminCompleted.php"> Completed </a></li>
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
          <table class="table table-bordered table-dark"><thead><th>
           <form action='processSubmit.php' method='post' style='margin-top:35px' enctype="multipart/form-data" >
             <?php
          echo "UPLOAD FILE<br>";
          ?>
          <input type="file" name="myfile">
          <button type="submit" class='submitBtn' style='margin-bottom: 10px' name="save">UPLOAD</button>
          <?php
          echo "
          <input type='hidden' value='$tajuk' name='tajuk'>";?>
        </form>

      </th></thead></table>
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
