


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
      <div>  <img src="admin22.jpg" class="img-responsive" alt="Responsive image"></div></br>
          <a  class="btn btn-primary"style="float:left" style="decoratation:none" href="adminhome.php" >Back To Admin Home</a>  <a class="btn btn-success" style="float:right" href="adminlogout.php">Logout</a>
            </div>
                
            
            </div>
            <div class="row">
       <div class="col-md-12">
             <div class="container-fluid" >
             <div class="jumbotron">
                 <h3 style="color:green;">Valid Students</h3>
                   <div class="table-responsive">
                           <table class="table table-condensed">
                                <tr class="success">
    <th class="danger">S.No.</th>                                
  <th class="success"> Name</th>
  <th class="warning">Dob</th>
  <th class="danger">Gender</th>
  <th class="info">Email</th>
   <th class="warning">Contact</th> 
 <th class="success" >10th Percentage</th> 
    <th class="info" >10th Passing year</th> 
 <th class="danger" >12th Percentage</th>
     <th class="warning" >12th Passing year</th>                                  
<th class="success" > Ug Percentage</th> 
<th class="info" >Stream</th> 
 <th class="success" >Placed student</th>                                    
 <th class="info" >Remove</th>                               </tr>
                               <?php   
                                 $query="select * from studentvalid";
                               $query1=mysqli_query($con,$query);
                                $i=0;
                               while($result=mysqli_fetch_array($query1)){
                                   $i++;
                                  ?>
                                   
                               
                                <tr class="success">
 <td class="danger"><?php echo $i ?></td>
 <td class="success"><?php echo $result['fname']." ".$result['mname']." ".$result['lname']; ?></td>
 <td class="warning"><?php echo $result['dob']; ?></td>
  <td class="danger"><?php echo $result['gender']; ?></td>
<td class="info"><a><?php echo $result['email']; ?></a></td>
 <td class="warning"><?php echo $result['contact']; ?></td>
 <td class="success"><?php echo $result['aggerigate1']; ?></td>   
 <td class="info"><?php echo $result['year1']; ?></td>
 <td class="danger"><?php echo $result['aggerigate2']; ?></td>   
 <td class="warning"><?php echo $result['year2']; ?></td>
 <td class="success"><?php echo $result['aggerigate3']; ?></td>
 <td class="info"><?php echo $result['stream']; ?></td>   
 <td class="primary"><button ><a href="studentplacedquery.php?sid=<?php echo $result['registrationno']; ?>"> Move </a></button></td>   
 <td class="primary"><button ><a href="studentunregisteredquery.php?sid=<?php echo $result['registrationno']; ?>">Delete</a></button></td>   

                                    
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
