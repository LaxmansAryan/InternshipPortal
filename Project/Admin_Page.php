<?php 

    include "logic.php"

?>
<!DOCTYPE html>
<html>
    
<!-- CSS FILE -->
<link href="css/Admin_Page.css" rel="stylesheet"  />

<head>
    <header>
        <p class="Logo">ADMIN'S PAGE</p>
        <div class="Log_out">
            <ol>
				<li><a href="#intern">Internship Details</a>
                <li><a href="Admin_Login.php">LOG OUT</a>
            </ol>
        </div>
        
    </header>
</head>

<body>
    
	<?php if (isset($_REQUEST['info'])){?>
            <?php if ($_REQUEST['info'] == 'added') {?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully. 
                </div>
            <?php }else if($_REQUEST['info'] == 'updated') {?>
                <div class="alert alert-success" role="alert">
                    Post has been updated successfully. 
                </div>
            <?php }else if($_REQUEST['info'] == 'deleted') {?>
                <div class="alert alert-danger" role="alert">
                    Post has been deleted successfully. 
                </div>
            <?php }?>
    <?php }?>

    

    <div class="row">
            
            <?php foreach ($query as $q){?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="cards text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="cards-body">
                            <h5 class="cards-title"><?php echo $q['title'];?></h5>
                            <p class="cards-text"><?php echo $q['intro'];?></p>
                            <a href="viewp.php?id=<?php echo $q['id'];?>" class="btns btns-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

    </div>

    
    <div class="container2">
        
        <div class="text-center"> 
            <a href="create.php">+ Create a new announcement</a>
        </div>

    </div>
    
    <div id="intern">    
        
        <div class="main center">
            <div class="card center">
                <p class="heading">SECOND YEAR</p>
                <button class="btn2" onclick="window.location.href = 'SY.php'">Click to Proceed</button>
            </div>
        </div>


    
        <div class="main2 center">
            <div class="card center2">
                <p class="heading">THIRD YEAR</p>
                <button class="btn2" onclick="window.location.href = 'TY.php'">Click to Proceed</button>
            </div>
        </div>


        <div class="main3 center">
            <div class="card center3">
                <p class="heading">LAST YEAR</p>
                <button class="btn2" onclick="window.location.href = 'LY.php'">Click to Proceed</button>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath/bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
