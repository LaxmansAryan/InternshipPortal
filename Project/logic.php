<?php
	
	$conn = mysqli_connect("localhost","root","","sy_student");

	if (!$conn){
		echo "<h3 class='containerS bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able establish Database Connection</h3>";
	}

//BLOG SYSTEM

	$sql = "SELECT * FROM post";
	$query = mysqli_query($conn, $sql);

    //creating a post
	if (isset($_REQUEST['new_post'])) {
		$title = $_REQUEST['title'];
        $intro = $_REQUEST['intro'];
		$content = $_REQUEST['content'];

		$sql = "INSERT INTO post(title, intro, content) VALUES('$title','$intro','$content')";
		mysqli_query($conn, $sql);

		header("Location: Admin_Page.php?info=added");
		exit();
	}

	if (isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];

		$sql = "SELECT * FROM post WHERE id=$id";
		$query = mysqli_query($conn, $sql);
	}

	if (isset($_REQUEST['update'])){
		$id = $_REQUEST['id'];
		$title = $_REQUEST['title'];
        $intro = $_REQUEST['intro'];
		$content = $_REQUEST['content'];

		$sql = "UPDATE post SET title = '$title', intro = '$intro',content = '$content' WHERE id = '$id'";
		mysqli_query($conn, $sql);

		header("Location: Admin_Page.php?info=updated");
		exit();
	}

	if (isset($_REQUEST['delete'])){
		$id = $_REQUEST['id'];

		$sql = "DELETE  FROM post WHERE id=$id";
		$query = mysqli_query($conn, $sql);

		header("Location: Admin_Page.php?info=deleted");
		exit();
	}


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

//Completed SY
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

// TY ONGOING
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


// LY ONGOING
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



//LY Completed
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




//STUDENT REGISTRATION
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
        header("Location: Student_Login.php?info=registered");
    }
    else
    {
        header("Location: Student_Login.php?info=notregistered");
    }
    mysqli_close($conn);
    
}

//STUDENT LOGIN
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
        header("location: Student_Page.php");
      } else {
        header("Location: Student_Login.php?info=invalid");
      }
    }
  }


//ADMIN REGISTRATION
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
        header("Location: Admin_Login.php?info=registered");
    }
    else
    {
        header("Location: Admin_Login.php?info=notregistered");
    }
    mysqli_close($conn);


    /*if (mysqli_query($conn, $sql_query))
    {
        echo "You have successfully registered in the portal !!!";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);*/
}

// ADMIN LOGIN
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
      header("Location: Admin_Login.php?info=invalid");
    }
  }
}




//ONGOING INTERNSHIPS
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
        header("Location: Student_Page.php?info=addedo");
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

//COMPLETED INTERNSHIPS
if(isset($_POST['com_intn_page']))
{
    $st_id = $_POST['st_id'];
    $c_name = $_POST['c_name'];
    $c_type = $_POST['c_type'];
    $c_tech = $_POST['c_tech'];
    $c_role = $_POST['c_role'];
    $c_duration = $_POST['c_duration'];
    $c_start = $_POST['c_start'];
    $c_end = $_POST['c_end'];
    $c_file = $_FILES['c_file']['name'];

    $destination = 'uploads/' . $c_file;
    $extension = pathinfo($c_file, PATHINFO_EXTENSION);

    $file = $_FILES['c_file']['tmp_name'];
    $size = $_FILES['c_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "Your file is extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['c_file']['size'] > 2000000) {
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)){
            $sql_query = "INSERT INTO c_intern (st_id, c_name, c_type, c_tech, c_role, c_duration, c_start, c_end, c_file, size, downloads)VALUES ('$st_id', '$c_name', '$c_type', '$c_tech', '$c_role', '$c_duration', '$c_start', '$c_end', '$c_file', '$size', 0)";

                if (mysqli_query($conn, $sql_query))
                {
                    header("Location: Student_Page.php?info=addedc");
                }
                else
                {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                mysqli_close($conn);
        }
    }
}
?>