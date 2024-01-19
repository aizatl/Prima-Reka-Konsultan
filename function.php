<?php

function getListOfTask()
{
//create connection
 $con = mysqli_connect('localhost','web2','web2','primareka');
 if (mysqli_connect_errno())     //check connection is establish
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;   //terminate the script
  }
  $sql="select * from task";
  $qry = mysqli_query($con,$sql);  //run query
  return $qry;
}

function findDepartment()
{
 $con = mysqli_connect('localhost','web2','web2','primareka');
 if (mysqli_connect_errno())     //check connection is establish
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;   //terminate the script
  }
 //get the registrationNumber to delete
  $idToSearch= $_GET['departmentIdToSearch'];

   $sql="select * from department where departmentId like
     '%".$idToSearch."%'";
 // echo $sql;
  $qry = mysqli_query($con,$sql);  //run query
  return $qry;
}

function getListOfDepartment()
{
//create connection
 $con = mysqli_connect('localhost','web2','web2','primareka');
 if (mysqli_connect_errno())     //check connection is establish
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;   //terminate the script
  }
  $sql="select * from department";
  $qry = mysqli_query($con,$sql);  //run query
  return $qry;
}

function viewTaskUnderDepartment($nameToView)
{
//create connection
	$con = mysqli_connect('localhost', 'web2', 'web2', 'primareka');
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
	$sql="select * from task where department = '".$nameToView."'";


	$qry=mysqli_query($con,$sql);
	return $qry;
}

function viewTaskDetail($nameToView)
{
//create connection
	$con = mysqli_connect('localhost', 'web2', 'web2', 'primareka');
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
	$sql="select * from taskdetail where taskName = '".$nameToView."'";


	$qry=mysqli_query($con,$sql);
	return $qry;
}

function viewAllID(){
  $con = mysqli_connect("localhost",'web2','web2',"primareka");
  if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
  $check = "select * from users";
  $run = mysqli_query($con,$check);
  return $run;
}

function viewOneUser($idToEdit){
  $con = mysqli_connect("localhost",'web2','web2',"primareka");
  if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
  $check = "select * from users where id = '".$idToEdit."'";
  $run = mysqli_query($con,$check);
  return $run;
}

function findCompletedTask(){
  $con = mysqli_connect("localhost",'web2','web2',"primareka");
  if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
  $idToSearch= $_GET['taskIdToSearch'];
  $check = "select * from taskdetail where status = 'Done' and taskdetailId = '".$idToSearch."'";
  $run = mysqli_query($con,$check);
  return $run;
}

function getListOfCompletedTask(){
  $con = mysqli_connect("localhost",'web2','web2',"primareka");
  if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
  $check = "select * from taskdetail where status = 'Done'";
  $run = mysqli_query($con,$check);
  return $run;
}

function getListOfNotCompletedTask(){
  $con = mysqli_connect("localhost",'web2','web2',"primareka");
  if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
  $check = "select * from taskdetail where not status = 'Done'";
  $run = mysqli_query($con,$check);
  return $run;
}

function findNotCompletedTask(){
  $con = mysqli_connect("localhost",'web2','web2',"primareka");
  if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		exit;
	}
  $idToSearch= $_GET['taskIdToSearch'];
  $check = "select * from taskdetail where not status = 'Done' and taskdetailId = '".$idToSearch."'";
  $run = mysqli_query($con,$check);
  return $run;
}



 ?>
