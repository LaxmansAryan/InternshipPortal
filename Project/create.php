<?php 

	include "logic.php"

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<title>Blog using PHP and MySQL</title>
</head>
<body>

	<div class="container mt-5" >
		<form method="GET">
			<input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center">
			<textarea name="content" class="form-control bg-dark text-white my-3" style="background-color: #cee2f4" ></textarea>
			<button name="new_post" class="btn btn-dark" style="background-color:#cee2f4 ;">>Add Post</button>
		</form>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath/bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>