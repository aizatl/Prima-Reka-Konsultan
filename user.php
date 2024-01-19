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
    echo "USER";
     ?>
  </a></h1>
 </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="adminView.php">Home</a></li>
          <li><a href="adminDepartment.php"> Department </a></li>
          <li><a href="adminNotCompleted.php">Not Completed </a></li>
          <li><a href="adminCompleted.php"> Completed </a></li>
          <li class="menu-active"><a href="#"> User</a></li>
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
        <?php
          include "function.php";
          $allUserList = viewAllID();
         ?>
        <table class="table table-bordered table-dark">
         <thead>
           <th>
             <h3>List of existing user</h3>
             <table class="table table-bordered table-dark">
              <thead>

                <th  scope="col" style="background-color:#007DF2" >USER ID</th>
                <th  scope="col" style="background-color:#007DF2">USER TYPE</th>
                <th  scope="col" style="background-color:#007DF2">OPTION</th>

              </thead>

              <?php
              $count=1;

              while($row=mysqli_fetch_assoc($allUserList))
              {
                //display
                echo"<tr>";
                echo "<td scope='col' style='color:black'>".$row['id']."</td>";
                echo"<td scope='col' style='color:black'>".$row['userType']."</td>";
                $idToEdit=$row['id'];
                 echo '<td>';

                   //echo $idToView;
                 echo '<form action="editUser.php" method="post">';
                 echo "<input type='hidden' value='$idToEdit' name='idToEdit'>";
                 echo '<input type="submit"  name="editButton" value="Change Password">';
                 echo '</form>';



                 echo "</tr>";

              }
              ?>
            </table>
            <form class="" action="addUser.php" method="post">
                <input type="submit" name='addNewUser' value="Add User" id="editBtn" class="right" onclick='myFunction()'>
            </form>
           </thead>
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
