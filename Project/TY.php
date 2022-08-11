<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'sy_student';

// Server is localhost with
// port number 3308
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, o_name, o_domain, o_duration FROM student INNER JOIN o_intern WHERE student.st_id=o_intern.st_id AND st_class='TY'";
$result = $mysqli->query($sql);
// $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Third Year Ongoing Internships</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #2653ce;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #cee2f4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}

		.btn{
  			position: fixed;
  			width: 90px;
  			height: 40px;
  			top: 40px;
			left: 40px;
			background: white;
			border-radius: 50px;
			box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
			padding: 1px;
			border: #2653ce;
			text-align: center;
			font-size: 19px;
		}
		.btn a{
			color: #2653ce;
			background: white;
		}
		.btn2{
			position: relative;
			top: 50px;
			left: 500px;
			width: 120px;
  			height: 40px;
			background: white;
			border-radius: 50px;
			box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
			padding: 1px;
			border: #2653ce;
			text-align: center;
			font-size: 19px;
			color: #2653ce;
			background: white

		}
		.form{
			height:100px
		}
	</style>
</head>

<body>
	<section>
		<h1>Third Year Ongoing Internships</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
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
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['st_id'];?></td>
				<td><?php echo $rows['st_name'];?></td>
				<td><?php echo $rows['st_middle'];?></td>
				<td><?php echo $rows['st_surname'];?></td>
				<td><?php echo $rows['st_div'];?></td>
				<td><?php echo $rows['o_name'];?></td>
				<td><?php echo $rows['o_domain'];?></td>
				<td><?php echo $rows['o_duration'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>

	<form class="form" method="post" action="logic.php">
		<input type="submit" name="exportTYO" class="btn2" value="Download"/>
	</form>

	<?php

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql2 = "SELECT student.st_id, st_name, st_middle, st_surname, st_div, c_name, c_type, c_duration FROM student INNER JOIN c_intern WHERE student.st_id=c_intern.st_id AND st_class='TY'";
$result2 = $mysqli->query($sql2);
$mysqli->close();
?>

	<section>
		<h1>Third Year Completed Internships</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
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
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows2=$result2->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows2['st_id'];?></td>
				<td><?php echo $rows2['st_name'];?></td>
				<td><?php echo $rows2['st_middle'];?></td>
				<td><?php echo $rows2['st_surname'];?></td>
				<td><?php echo $rows2['st_div'];?></td>
				<td><?php echo $rows2['c_name'];?></td>
				<td><?php echo $rows2['c_type'];?></td>
				<td><?php echo $rows2['c_duration'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>

	<form class="form" method="post" action="logic.php">
		<input type="submit" name="exportTYC" class="btn2" value="Download"/>
	</form>
	
	<button class="btn" type="button"><a onclick="window.location.href='Admin_Page.php'">Back</a></button>
</body>

</html>