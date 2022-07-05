<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="sy_student";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['but_submit'])) {
  
  $a_id = mysqli_real_escape_string($conn,$_POST['a_id']);
  $a_pass = mysqli_real_escape_string($conn, $_POST['a_pass']);

  if ($a_id != "" && $a_pass != "") {
    
    $sql_query = "SELECT count(*) AS cntAdmin FROM admin WHERE a_id='$a_id' AND a_pass='$a_pass'"; 
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntAdmin'];

    if ($count > 0) {
      $_SESSION['a_id'] =$a_id;
      header("location: Admin_Page.php");
    } else {
      echo "Invalid credentials..";
    }
  }
}

?>
