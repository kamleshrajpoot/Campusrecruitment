<?php include ('connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:companylogin.php');
}
?>



<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
     
    </head>
    <style>
        form{
            color:black;
        }
        button li a{
            text-decoration: none;
        
        }
      div.container
        {
            background-color:burlywood;
        }
</style>
    <body> 
        
        <div  class="container">
             <br>
            <div class="panel panel-default">
 
  <div class="panel-body">
      <div>  <img src="company33.jpg" class="img-responsive" alt="Responsive image"></div>
       <h5 style=color:green;style="float:left">Welcome In Company Dashboard</h5>
          <a class="btn btn-success" style="float:right" href="companylogout.php">Logout</a>
            </div>
                
            
            </div>
<div class="row">
                 <div class="col-md-4">
                         <div class="container-fluid" >
                           <div class="jumbotron">
                                 <a  class="btn btn-primary" href="searchstudent.php">view  student details  </a></br>
                                 
                                 <hr>
                                  <a class="btn btn-primary" href="vacancy.php">post new vacancy  </a>
                           </div>
                          </div>
                  </div>
            
 </div>
       <hr>
                    <?php include ("footer.php"); ?>
                    <hr>
    
        
    </div>
        
          <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
        </body>
</html>
