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

	<title>Blog using PHP and Mysql</title>
</head>
<body>
	<div class="containers mt-5">
		
		<?php foreach($query as $q){?>
			<div class="bg-dark p-5 rounded-lg text-white text-center">
				<h1><?php echo $q['title'];?></h1>

			</div>
			<p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
		<?php }?>

	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath/bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>