<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="sy_student";

ob_start();

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['but_submit2'])) {
  
  $st_id = mysqli_real_escape_string($conn,$_POST['st_id']);
  $st_pass = mysqli_real_escape_string($conn, $_POST['st_pass']);

  if ($st_id != "" && $st_pass != "") {
    
    $sql_query = "SELECT count(*) AS cntSt FROM student WHERE st_id='$st_id' AND st_pass='$st_pass'"; 
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntSt'];

    if ($count > 0) {
      $_SESSION['st_id'] =$st_id;
      header("location: Student_Page.html");
    } else {
      echo "Invalid credentials..";
    }
  }
}

?>