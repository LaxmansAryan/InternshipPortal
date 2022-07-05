<!-- Name: Aryan S. Sawant
     Class: SY  Div: B  Roll NO. 28
     Topic : Internship Portal -->
<?php 

    include "logic.php"

?>

<!DOCTYPE html>
<html>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <!-- ICON -->
    <link href="images/letter-i.png" rel="icon" />

    <!-- CSS FILE -->
    <link href="css/style.css" rel="stylesheet"  />
        
    
    <!-- Top College Logo-->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        
            <img src="images/logo.svg" alt="College Logo" width="620" height="75" />

        </div>
    </div>
        
    <!-- HEADER -->
    <header>
        <p class="Logo">INTERNSHIP PORTAL</p>
        <input type="checkbox" name="" class="btn" />
        <div class="nav">
            <ol>
                <li><a href="#">Home</a></li>
                <li><a class="nav-link scrollto" href="#body">Log In</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ol>
        </div>
    </header> 
    
    <body>
        
        <div class="row">
            
            <?php foreach ($query as $q){?>
                <div class="#">
                    <div class="#">
                        <div class="#" style="width: 18rem;">
                            <h5 class="#"><?php echo $q['title'];?></h5>
                            <p class="#"><?php echo $q['content'];?></p>
                            <a href="view2.php?id=<?php echo $q['id'];?>" class="#">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <section id="body">
        <!-- STUDENT LOGIN -->
        <div class="main center">
            <div class="card center">
                <p class="heading">STUDENT LOG IN</p>
                <p class="text">
                    Log in with username and password.
                </p>
                <button class="btn2" onclick="window.location.href = 'Student_Login.html'">Click to Proceed</button>
            </div>
        </div>


        <!-- ADMIN LOGIN -->
        <div class="main2 center">
            <div class="card center2">
                <p class="heading">ADMIN LOG IN</p>
                <p class="text">
                    Only for staff and faculty.
                </p>
                <button class="btn2" onclick="window.location.href = 'Admin_Login.html'">Click to Proceed</button>
            </div>
        </div>

        </section>
    
    </body>


    <!-- FOOTER -->
   
    <footer class="footer">
        <div class="main-content">
            <h2><br>CONTACT US:</h2>
            <div class="content">
                <p><br><br>Phone: +91 7021996117, +91 9356558086</br>
                    <br></br>
                    Email: aryan.sawant@somaiya.edu, vaidehi.rajendra@somaiya.edu</br>
                </p>
            </div>
          </div>
        </div>
    
    </footer>
    <section id="contact">    
    </section>

 
</html>