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

if(isset($_POST['admin_reg']))
{
    $a_name = $_POST['a_name'];
    $a_email = $_POST['a_email'];
    $a_id = $_POST['a_id'];
    $a_pass = $_POST['a_pass'];
   

    $sql_query = "INSERT INTO admin (a_name, a_email, a_id, a_pass)
    VALUES ('$a_name','$a_email','$a_id','$a_pass')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "You have successfully registered in the portal !!!";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

