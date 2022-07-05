<?php
	
	$conn = mysqli_connect("localhost","root","","sy_student");

	if (!$conn){
		echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able establish Database Connection</h3>";
	}

	$sql = "SELECT * FROM post";
	$query = mysqli_query($conn, $sql);

	if (isset($_REQUEST['new_post'])) {
		$title = $_REQUEST['title'];
		$content = $_REQUEST['content'];

		$sql = "INSERT INTO post(title, content) VALUES('$title','$content')";
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
		$content = $_REQUEST['content'];

		$sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = '$id'";
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

?>