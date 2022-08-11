<?php

  include "logic.php";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Login Form </title>
    <link href="css/Student_Login.css" rel="stylesheet">
    
    <!-- Back button-->
    <button class="btn"><a onclick="window.location.href='index.php'"><strong>Home</strong></a></button>

    <div class="containers mt-5">
      
      <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "registered"){?>
                <div class="alert alert-success" role="alert">
                    You have successfully registered!!!
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "notregistered"){?>
                <div class="alert alert-danger" role="alert">
                    Not Registered!!!
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "invalid"){?>
                <div class="alert alert-danger" role="alert">
                    Invalid credentials!!
                </div>
            <?php }?>
        <?php } ?>

    </div>

  </head>
  
  
  <body>
    
    <div class="center">
      <h1>Student Login</h1>
      <form method="post" action="logic.php">
        <div class="txt_field">
          <input type="text" name="st_id" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="st_pass" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="but_submit2" id="but_submit2">
        <div class="signup_link">
          Not registered? <a onclick="window.location.href='Student_Reg.html'">Register</a>
        </div>
      </form>
    </div>

  </body>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath/bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>