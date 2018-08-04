<?php include ('connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:studentlogin.php');
}
  

 if(isset($_POST['submit']))
{
    $a=$_POST['jname'];
    $b=$_POST['salary'];
    $c=$_POST['salary1'];
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
           div container d1 h1{
            text-align:center;
        }
</style>
<body >
    
  <div  class="container">
           <br> 
            <div class="panel panel-default">
  
  <div class="panel-body">
      <div>  <img src="studentt.jpg" class="img-responsive" alt="Responsive image"></div></br>
                <a class="btn btn-primary" style="float:left" style="decoratation:none" href="studenthome.php" > Back To Student</a>  <a class="btn btn-success"style="float:right" href="studentlogout.php">Logout</a>
            </div>
                
            
            </div>
      <div class="row">
              <div class="col-md-offset-3 col-md-6">
              <div class="container-fluid" >
              <div class="jumbotron">
                  <h3 style=color:green;>Search Job</h3>
                   <form class="form-horizontal" action="jobsearched.php" method="post">
                       
                        
                      <div class="form-group">
                   <label for="jname" class="col-sm-3 control-label">Job<font color="red" size="4px">*</font></label>
                   <div class="col-sm-9">
                   <select class="form-control" name="jname" required>
                       <option value="">Select job</option>
                       <?php
                       $query="select DISTINCT jobtype from vacancy";
$result=mysqli_query($con,$query);
while($result1=mysqli_fetch_array($result))
{ ?>
                       
                        <option value="<?php echo $job=$result1['jobtype'];?> "> <?php  echo $job=$result1['jobtype'];?></option>
                         <?php   } ?>
                       
                   </select>
                  
                  </div>
                  </div>
                         <div class="form-group">
                        <label for="Salary" class="col-sm-2 control-label">Salary </label>
                        <div class="col-sm-4">
                        <input type="number"  name="salary" class="form-control" id="Salary" placeholder=" Starting Range " required>
                        </div>
                        <div class="form-group">
                       <label for="Salary1" class="col-sm-1 control-label">To </label>
                       <div class="col-sm-4">
                       <input type="number" name="salary1" class="form-control" id="Salary1" placeholder="Ending Range" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="Submit" class="col-sm-7 control-label">Search</label>
                         <div class="col-sm-5">
                         <input class="btn btn-default" name="submit" type="submit" value="Click Here">
                           </div>
                             </div>
    
                       </div>
                  </form>    
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

