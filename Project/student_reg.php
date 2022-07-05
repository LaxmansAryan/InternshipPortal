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

if(isset($_POST['student_reg']))
{
    $st_name = $_POST['st_name'];
    $st_middle = $_POST['st_middle'];
    $st_surname = $_POST['st_surname'];
    $st_email = $_POST['st_email'];
    $st_class = $_POST['st_class'];
    $st_div = $_POST['st_div'];
    $st_roll = $_POST['st_roll'];
    $st_id = $_POST['st_id'];
    $st_pass = $_POST['st_pass'];

    $sql_query = "INSERT INTO student (st_name,st_middle,st_surname, st_email, st_class, st_div, st_roll, st_id, st_pass)
    VALUES ('$st_name','$st_middle','$st_surname','$st_email','$st_class','$st_div','$st_roll','$st_id','$st_pass')";

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
