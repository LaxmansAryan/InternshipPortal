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

if(isset($_POST['ong_intn_page']))
{
    $st_id = $_POST['st_id'];
    $o_name = $_POST['o_name'];
    $o_domain = $_POST['o_domain'];
    $o_tech = $_POST['o_tech'];
    $o_duration = $_POST['o_duration'];
    $o_start = $_POST['o_start'];
    $o_end = $_POST['o_end'];

    $sql_query = "INSERT INTO o_intern (st_id, o_name, o_domain, o_tech, o_duration, o_start, o_end)
    VALUES ('$st_id', '$o_name', '$o_domain', '$o_tech', '$o_duration', '$o_start', '$o_end')";
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