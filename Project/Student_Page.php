<?php

include 'logic.php';

?>
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- CSS FILE -->
<link href="css/Student_Page.css" rel="stylesheet"  />

    <header>
        <p class="Logo">STUDENT'S PAGE</p>
        <div class="Log_out">
            <ol>
                <li><a href="Student_Login.php">LOG OUT</a>
            </ol>
        </div>

    </header>

    <body>
        <?php
            
        ?>
        
        <div class="containers mt-5">
      
        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "addedo"){?>
                <div class="alert alert-success" role="alert">
                    Your data is stored successfully!!!
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "addedc"){?>
                <div class="alert alert-success" role="alert">
                    Your data is stored successfully!!!
                </div>
            <?php }?>
        <?php } ?>

    </div>


        <!-- ONGOING INTERNSHIPS -->
        <div class="main center">
            <div class="card center">
                <p class="heading">ONGOING INTERNSHIP</p>
                <button class="btn2" onclick="window.location.href = 'Ong_Intn_Page.html'">Click to Proceed</button>
            </div>
        </div>


        <!-- COMPLETED INTERNSHIPS -->
        <div class="main2 center">
            <div class="card center2">
                <p class="heading">COMPLETED INTERNSHIP</p>
                <button class="btn2" onclick="window.location.href = 'Com_Intn_Page.html'">Click to Proceed</button>
            </div>
        </div>
    </body>
</html>

    
    
    
    
    
    
    

