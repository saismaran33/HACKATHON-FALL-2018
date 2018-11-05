<?php
$department = $_POST['department'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

if(!$empty('username') || !$empty('gender'))
{
 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbname = "hackathon";

 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

 if(mysqli.connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
 }else{

  $INSERT = "Insert into register (department,username,phone,gender) values($department,$username,$phone,$gender)";
  if($conn->query($INSERT)){
  echo "Inserted";
  }
  else{
  echo "Error";
  }

$conn->close();
}
}else
{
 echo "All feilds are required";
 die();
}

?>