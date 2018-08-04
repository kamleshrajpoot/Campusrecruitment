


<?php include ('connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:adminlogin.php');
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
     <div>  <img src="admin22.jpg" class="img-responsive" alt="Responsive image"></div>
       <h5 style=color:green;>Welcome In Admin Dashboard</h5>
          <a  class="btn btn-success" style="float:right" href="adminlogout.php">Logout</a>
            </div>
                
            
            </div>
             <div class="row">
      <div class="col-lg-4">
          <div class="container-fluid" > 
                             <div class="jumbotron">
                               
          <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Student Informatin
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-success" href="aregisreredstudent.php"> Registered Students</a></li>
    <li><a class="btn btn-success" href="afaultystudent.php">faulty students</a></li>
    <li><a class="btn btn-success" href="avalidestudent.php">valid students</a></li>
      <li><a class="btn btn-success" href="studentplaced.php">Placed students</a></li>
  </ul>
                                 </div></div>
          </div>
              
              </div>
      <div class="col-lg-4">
          <div class="container-fluid" >
                             <div class="jumbotron">
          <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Company Information
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a class="btn btn-success" href="aregisteredcompany.php"> Registered companies</a></li>
    <li><a class="btn btn-success" href="afaultycompany.php">faulty companies</a></li>
    <li><a  class="btn btn-success"href="avalidecompany.php">valid companies</a></li>
    
   
  </ul>
</div>
      </div>
          </div>
              </div>
      <div class="col-lg-4">
          <div class="container-fluid" >
                             <div class="jumbotron">
            <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Admin Panel
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
       <li><a class="btn btn-success" href="#">Id Password</a></li>
      <li><a class="btn btn-success" href="anews.php">Post Latest News</a></li>
      <li><a class="btn btn-success" href="#">Manage Student Details</a></li>
      <li><a class="btn btn-success" href="#">Manage Company Details</a></li>
  </ul>
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
