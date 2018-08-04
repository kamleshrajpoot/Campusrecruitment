<?php include ('connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:adminlogin.php');
} ?>
<?php include ('connection.php'); 
  

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
      <div>  <img src="studentt.jpg" class="img-responsive" alt="Responsive image"></div>
           <a style="float:left" style="decoratation:none" href="jobsearch.php" >Back </a> <a style="float:right" href="studentlogout.php">logout</a>
            </div>
                
            
            </div>
      
       <div class="row">
       <div class="col-md-12">
             <div class="container-fluid" >
             <div class="jumbotron">
                   <div class="table-responsive">
                           <table class="table table-condensed">
                                <tr class="success">
    <th class="danger">S.No.</th>                                
  <th class="success">Company Name</th>
  <th class="warning">JOB</th>
  <th class="danger">Salary</th>
  <th class="info">Criteria</th>
   <th class="warning">Email</th> 
 <th class="success" >Posted Time</th>                               
                                    
                               </tr>
                               <?php  
                              
                                 $query="select * from vacancy where jobtype='$a' AND salary BETWEEN $b and $c  ORDER BY 'salary' ASC ";
                                 $query1=mysqli_query($con,$query);
                                $i=0;
                               while($result=mysqli_fetch_array($query1)){
                                   $i++;
                                  ?>
                                   
                               
                                <tr class="success">
    <td class="danger"><?php echo $i ?></td>
  <td class="success"><?php echo $result['cname']; ?></td>
  <td class="warning"><?php echo $result['jobtype']; ?></td>
  <td class="danger"><?php echo $result['salary']; ?></td>
 <td class="success"><?php echo $result['criteria']; ?></td>
<td class="warning"><?php echo $result['email']; ?></td>
  <td class="info"><?php echo $result['posttime']; ?></td>                                  
                                    
  </tr>
<?php } ?>
</table>
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