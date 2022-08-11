<?php 

	include "logic.php"

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/style.css">

	<title>Blog using PHP and MySQL</title>
</head>
<body>

	<div class="containers mt-5">
		
		<?php foreach ($query as $q){?>
			<form method="GET">
				<input type="text" hidden name="id" value="<?php echo $q['id'];?>">
				<input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center" style="background-color:#2653ce" value="<?php echo $q['title'];?>">
				<textarea name="intro" class="form-control bg-dark text-white my-3"><?php echo $q['intro'];?></textarea>

				<textarea name="content" class="form-control bg-dark text-white my-3"><?php echo $q['content'];?></textarea>
				<button name="update" class="btns btns-dark">Update</button>
			</form>
		<?php }?>

		
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath/bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>