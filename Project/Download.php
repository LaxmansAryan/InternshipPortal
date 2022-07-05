<?php  
//Download.php  
$connect = mysqli_connect("localhost", "root", "", "sy_student");
$output = '';
if(isset($_POST["exportSYO"]))
{
 $query = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, o_name, o_domain, o_duration FROM student INNER JOIN o_intern WHERE student.st_id=o_intern.st_id AND st_class='SY'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Middle Name</th>  
                        <th>Surname</th>
                        <th>Division</th>
                        <th>Internship Name</th>
                        <th>Internship Domain</th>
                        <th>Internship Duration</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["st_id"].'</td>  
                        <td>'.$row["st_name"].'</td>  
                        <td>'.$row["st_middle"].'</td>  
                        <td>'.$row["st_surname"].'</td>  
                        <td>'.$row["st_div"].'</td>
                        <td>'.$row["o_name"].'</td>
                        <td>'.$row["o_domain"].'</td>
                        <td>'.$row["o_duration"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}

//Completed
else if(isset($_POST["exportSYC"]))
{
 $query2 = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, c_name, c_type, c_duration FROM student INNER JOIN c_intern WHERE student.st_id=c_intern.st_id AND st_class='SY'";
 $result = mysqli_query($connect, $query2);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Middle Name</th>  
                        <th>Surname</th>
                        <th>Division</th>
                        <th>Internship Name</th>
                        <th>Internship Type</th>
                        <th>Internship Duration</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["st_id"].'</td>  
                        <td>'.$row["st_name"].'</td>  
                        <td>'.$row["st_middle"].'</td>  
                        <td>'.$row["st_surname"].'</td>  
                        <td>'.$row["st_div"].'</td>
                        <td>'.$row["c_name"].'</td>
                        <td>'.$row["c_type"].'</td>
                        <td>'.$row["c_duration"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}

// TY upcoming
if(isset($_POST["exportTYO"]))
{
 $query3 = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, o_name, o_domain, o_duration FROM student INNER JOIN o_intern WHERE student.st_id=o_intern.st_id AND st_class='TY'";
 $result = mysqli_query($connect, $query3);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Middle Name</th>  
                        <th>Surname</th>
                        <th>Division</th>
                        <th>Internship Name</th>
                        <th>Internship Domain</th>
                        <th>Internship Duration</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["st_id"].'</td>  
                        <td>'.$row["st_name"].'</td>  
                        <td>'.$row["st_middle"].'</td>  
                        <td>'.$row["st_surname"].'</td>  
                        <td>'.$row["st_div"].'</td>
                        <td>'.$row["o_name"].'</td>
                        <td>'.$row["o_domain"].'</td>
                        <td>'.$row["o_duration"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}



//TY Completed
else if(isset($_POST["exportTYC"]))
{
 $query4 = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, c_name, c_type, c_duration FROM student INNER JOIN c_intern WHERE student.st_id=c_intern.st_id AND st_class='TY'";
 $result = mysqli_query($connect, $query4);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Middle Name</th>  
                        <th>Surname</th>
                        <th>Division</th>
                        <th>Internship Name</th>
                        <th>Internship Type</th>
                        <th>Internship Duration</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["st_id"].'</td>  
                        <td>'.$row["st_name"].'</td>  
                        <td>'.$row["st_middle"].'</td>  
                        <td>'.$row["st_surname"].'</td>  
                        <td>'.$row["st_div"].'</td>
                        <td>'.$row["c_name"].'</td>
                        <td>'.$row["c_type"].'</td>
                        <td>'.$row["c_duration"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}


// TY upcoming
if(isset($_POST["exportLYO"]))
{
 $query5 = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, o_name, o_domain, o_duration FROM student INNER JOIN o_intern WHERE student.st_id=o_intern.st_id AND st_class='LY'";
 $result = mysqli_query($connect, $query5);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Middle Name</th>  
                        <th>Surname</th>
                        <th>Division</th>
                        <th>Internship Name</th>
                        <th>Internship Domain</th>
                        <th>Internship Duration</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["st_id"].'</td>  
                        <td>'.$row["st_name"].'</td>  
                        <td>'.$row["st_middle"].'</td>  
                        <td>'.$row["st_surname"].'</td>  
                        <td>'.$row["st_div"].'</td>
                        <td>'.$row["o_name"].'</td>
                        <td>'.$row["o_domain"].'</td>
                        <td>'.$row["o_duration"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}



//TY Completed
else if(isset($_POST["exportLYC"]))
{
 $query6 = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, c_name, c_type, c_duration FROM student INNER JOIN c_intern WHERE student.st_id=c_intern.st_id AND st_class='LY'";
 $result = mysqli_query($connect, $query6);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Student ID</th>  
                        <th>Name</th>  
                        <th>Middle Name</th>  
                        <th>Surname</th>
                        <th>Division</th>
                        <th>Internship Name</th>
                        <th>Internship Type</th>
                        <th>Internship Duration</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["st_id"].'</td>  
                        <td>'.$row["st_name"].'</td>  
                        <td>'.$row["st_middle"].'</td>  
                        <td>'.$row["st_surname"].'</td>  
                        <td>'.$row["st_div"].'</td>
                        <td>'.$row["c_name"].'</td>
                        <td>'.$row["c_type"].'</td>
                        <td>'.$row["c_duration"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>