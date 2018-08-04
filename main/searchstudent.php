
<?php include ('connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:companylogin.php');
} ?>

<?php
if(isset($_POST['submit']))
{
   
    $a=$_POST['Aggrigate1'];
    $b=$_POST['Aggrigate2'];
    $c=$_POST['Aggrigate3'];//working
 // $d=$_POST['department'];// working
 // $e=$_POST['stream'];// working
 //  echo $b;
   
   
    
  $d=$_POST['department'];// working
  $e=$_POST['stream'];// working

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
      <div>  <img src="company33.jpg" class="img-responsive" alt="Responsive image"></div></br>
           <a  class="btn btn-primary"style="float:left" style="decoratation:none" href="companyhome.php" >Back To Company Home</a> <a class="btn btn-success" style="float:right" href="companylogout.php">Logout</a>
            </div>
                
            
            </div>
 <div class="row">
              <div class=" col-md-7">
              <div class="container-fluid" >
              <div class="jumbotron">
                  <h3 style=color:green;>Search Students</h3>
                <form class="form-horizontal"   action="searchedstudent.php" method="post" name='form'>
                      <div class="form-group">
                       <label for="Aggrigate" class="col-sm-3 control-label">Aggrigate 10th</label>
                       <div class="col-sm-9">
                       <input type="number" class="form-control" id="Aggerigate" name="Aggrigate1" min="45"  max="100"placeholder=" 10th Aggrigate in %" required>
                       </div>
                      </div>
   
                     <div class="form-group">
                      <label for="Aggrigate1" class="col-sm-3 control-label">Aggrigate 12th</label>
                     <div class="col-sm-9">
                      <input type="number" class="form-control" id="Aggerigate1" name="Aggrigate2"  min="45" max="100" placeholder=" 12th Aggrigate in %" required>
                     </div>
                     </div>
                    
                    <div class="form-group">
                     <label for="Aggrigate2" class="col-sm-3 control-label">Aggrigate UG</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" id="Aggerigate2" name="Aggrigate3" min="45"  max="100"placeholder="Aggrigate UG in %" required>
                     </div>
                   </div>
                    
                   <div class="form-group">
                    <label for="Department" class="col-sm-3 control-label">Department<font color="red" size="4px">*</font></label>
                    <div class="col-sm-9">
                    <select class="form-control" name="department" required>
                        <option value=" ">Select Department</option>
                          <option value="Bio Engineering">Bio Engineering</option>
                         <option value="Chamical Engineering">Chamical Engineering</option>
                          <option value="Civil Engineering">Civil Engineering</option>
                          <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                         <option value="Electrical Engineering">Electrical Engineering</option>
                          <option value="Electronic and Communication Engineering">Electronic and Communication Engineering</option>
                          <option value="Electronic and instrumentation Engineering">Electronic and instrumentation Engineering</option>
                         <option value="Machanical Engineering">Machanical Engineering</option>
                         <option value="production Engineering">production Engineering</option>
                         <option value="Humanities & Social Sciences">Humanities & Social Sciences </option>
                         <option value="Phisics">Phisics</option>
                         <option  value="Chemistry">Chemistry</option>
                        <option value="Mathematics">Mathematics</option>
                    </select>
                    </div>
                   </div>
                    
                  <div class="form-group">
                   <label for="Stream" class="col-sm-3 control-label">Stream<font color="red" size="4px">*</font></label>
                   <div class="col-sm-9">
                   <select class="form-control" name="stream" required>
                        <option value=" "> Select Stream</option>
                        <option value="MCA">MCA</option>
                        <option value="M.TECH">M.TECH</option>
                        <option value="MBA">MBA</option>
                        <option value="B.TECH">B.TECH</option>
                   </select>
                  </div>
                  </div>
         <hr>
                  <div class="form-group">
                  <label for="Search" class="col-sm-6 control-label">For Search</label>
                  <div class="col-sm-6">
                  <input class="btn btn-primary" type="submit" id="Search" name="submit" value="Click Here">
                 </div>
                 </div>
             
                 <div class="form-group">
                 <label for="Submit" class="col-sm-6 control-label">For Clear</label>
                 <div class="col-sm-6">
                 <input class="btn btn-danger" type="reset" id="Submit" value="Click Here">
                 </div>
                 </div>
            </form>
           </div>     
           </div> 
           </div>
        
             <div class="col-md-5">
             <div class="container-fluid" >
            
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
