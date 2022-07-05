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

if(isset($_POST['com_intn_page']))
{
    $st_id = $_POST['st_id'];
    $c_name = $_POST['c_name'];
    $c_type = $_POST['c_type'];
    $c_tech = $_POST['c_tech'];
    $c_role = $_POST['c_role'];
    $c_duration = $_POST['c_duration'];
    $c_start= $_POST['c_start'];
    $c_end= $_POST['c_end'];
    $c_file= $_FILES['c_file'];

    $sql_query = "INSERT INTO c_intern (st_id, c_name, c_type, c_tech, c_role, c_duration, c_start, c_end, c_file)
    VALUES ('$st_id', '$c_name', '$c_type', '$c_tech', '$c_role', '$c_duration', '$c_start', '$c_end', '$c_file')";
    if (mysqli_query($conn, $sql_query))
    {
        echo "Your data is saved successfully!!!";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}