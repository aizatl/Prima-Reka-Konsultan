<?php

// connect to the database
/*$conn = mysqli_connect('localhost', 'web2', 'web2', 'primareka');
$sql = "SELECT * FROM taskdetail";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);*/


// Uploads files

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    $conn = mysqli_connect('localhost', 'web2', 'web2', 'primareka');
    $sql = "SELECT * FROM taskdetail WHERE taskDetailId='".$id."'";
    $result = mysqli_query($conn, $sql);
    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['submitted'];


    if (mysqli_connect_errno())     //check connection is establish
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit;   //terminate the script
     }

    // fetch file to download from database
    if (file_exists($filepath)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . basename($filepath));
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize('uploads/' . $file['submitted']));
      readfile('uploads/' . $file['submitted']);
    }
    else {
      echo "takde";
    }




}
?>
