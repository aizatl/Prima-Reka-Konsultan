<?php
$idDigunakan=$_POST['tajuk'];

// connect to the database
$conn = mysqli_connect('localhost', 'web2', 'web2', 'primareka');
$sql = "SELECT * FROM taskdetail where taskDetailId ='".$idDigunakan."'";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
      echo "<script>
      alert('You file extension must be .zip, .pdf or .docx');
      window.location.href='adminDepartment.php';
      </script>";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "<script>
        alert('File too large!');
        window.location.href='adminDepartment.php';
        </script>";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
          //  $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            $sql = "update taskdetail
                    set submitted ='".$filename."'
                        ,status = 'Done'
                    WHERE taskDetailId = '".$idDigunakan."'";

            if (mysqli_query($conn, $sql)) {
                //function_alert("Welcome to Geeks for Geeks");document.location='adminView.php';
                echo "<script>
                alert('Successfully added file');
                window.location.href='staffDepartment.php';
                </script>";
            }
            //header('Location: adminView.php');
        }
        else {
          echo "<script>
          alert('Fail to add file');
          window.location.href='staffDepartment.php';
          </script>";
        }
    }
}

?>
