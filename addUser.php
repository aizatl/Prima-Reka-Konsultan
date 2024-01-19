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
<style >
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
    $tajuk=$_POST['remarkToAdd'];
    $namaDiterima=$_POST['namaDiterima'];
    echo "ADDING NEW USER";
     ?>
  </a></h1>
 </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="adminView.php">Home</a></li>
          <li><a href="adminDepartment.php"> Department </a></li>
          <li><a href="adminNotCompleted.php">Not Completed</a></li> <li><a href="AdminCompleted.php">Completed</a></li>
          <li class="menu-active"><a href="#">Add User</a></li>
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
        <form action='processUser.php' method='post' style='margin-top:35px' onsubmit= "return confirm('Confirm Submission?');">

            <th style="background-color:#FF5733">
              <h3>ADD USER</h3>
            </th>
            <tr>
              <td>
              <h3>Choose User Type</h3>
              <center>
              <input type="radio" id="admin" name="userType" value="admin">
                         <label for="admin">ADMIN</label>
                         <input type="radio" id="staff" name="userType" value="staff">
              <label for="staff">STAFF</label><br><br></center>

             <h3>Enter User ID for New User</h3>
             <textarea rows='2' cols='55' name="id" placeholder= "User ID for admin start with A (example A101)
             while user ID for staff start with P (example P101)"></textarea><br><br>

             <h3>Enter Password for New User</h3>
             <input type="password" name="password" style="width:365px;"><br><br>

             <h3>Re-Enter Password for New User</h3>
             <input type="password" name="password2" style="width:365px;"><br><br>

             <right><input type="submit" name='submitButton' value="SUBMIT" id="editBtn" class="right" onclick='myFunction()'>
             <br><br>

           </td>
           </tr>


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
