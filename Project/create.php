<?php 

	include "logic.php"

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Blog using PHP and MySQL</title>
</head>
<body>

	<div class="containers mt-5" >
		<form method="GET">
			<input type="text" name="title" placeholder="Title" class="form-control bg-dark text-white my-3 text-center">
			<textarea name="intro" placeholder="Introduction" class="form-control bg-dark text-white my-3 text-center"></textarea>
			<textarea name="content" placeholder="Content" class="form-control bg-dark text-white my-3 text-center"></textarea>
			<button name="new_post" class="btns btns-dark">Add Notification</button>
		</form>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath/bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>