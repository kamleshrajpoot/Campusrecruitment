<?php include ('connection.php'); ?>
<!DOCTYPE html>

    <html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
    </head>
   <style>
    div.container
        {
            background-color:burlywood;
        }
        ul li a{
            color:blueviolet;
        }
        div container d1 h1{
            text-align:center;
        }
  </style>
    <body> 
     <?php include ('header.php'); ?>
    <div class="container" >
        <div class="jumbotron">
           <div class="row">
               <br>
                   <div class="col-md-4">
                      <div class="container-fluid" >
                          <div class="jumbotron">
                              <a  id="1" class="btn btn-primary" href="studentlogin.php">Student login or Sign-Up</a>
                          </div>
                       </div>
                   </div>
                
                 <div class="col-md-4">
                     <div class="container-fluid" >
                         <div class="jumbotron">
                              <a  id="1"  class="btn btn-primary" href="companylogin.php">Company login or Sign-Up</a>
                          </div>
                     </div>
                </div>
                
                 <div class="col-md-4">
                     <div class="container-fluid" >
                          <div class="jumbotron">
                              <a id="1"  class="btn btn-primary" href="adminlogin.php">Admin login</a>
                           </div>
                     </div>
                </div>
          </div>
        </div>
    <hr>
     <?php include ('footer.php'); ?>
    <hr>
      </div>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.1.1.min.js"></script>   
   
    </body>
</html>
