


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
      <div>  <img src="admin22.jpg" class="img-responsive" alt="Responsive image"></br>
          <a  class="btn btn-primary" style="float:left" style="decoratation:none" href="adminhome.php" >Back To Admin Home</a> <a  class="btn btn-success" style="float:right" href="adminlogout.php">Logout</a>
            </div>
            </div>
        </div>
        
         <div class="row">
       <div class="col-md-12">
             <div class="container-fluid" >
             <div class="jumbotron">
                 <h3 style="color:green;">Registred Companies</h3>
                   <div class="table-responsive">
                           <table class="table table-condensed">
                                <tr class="success">
   <th class="danger">S.No.</th>                                
  <th class="success">Company Name</th>
  <th class="warning">Establised Year</th>
  <th class="danger">Hr Name</th>
<th class="info" >Valide</th> 
<th class="info" >Invalide</th> 
<th class="info" >Delete</th>                                     
                                     </tr>
                               <?php 
                               $query="select * from companyregistration";
                               $query1=mysqli_query($con,$query);
                               $i=0;
                               while($result=mysqli_fetch_array($query1)){
                                   $i++;
                                  ?> 
                               
                                <tr class="success">
    <td class="danger"><?php echo $i ?></td>
  <td class="success"><?php echo $result['cname']; ?></td>
  <td class="warning"><?php echo $result['establised']; ?></td>
  <td class="danger"><?php echo $result['hrname']; ?></td>
 <td class="info"><button class="btn btn-danger"><a  href="avalidecompanyquery.php?sid=<?php echo $result['companyrid'];?>">Valide</a></button></td>   
  <td class="info"><button class="btn btn-warning"><a href="afaultycompanyquery.php?sid=<?php echo $result['companyrid'];?>">In_Valide</a></button></td> 
<td class="info"><button class="btn btn-success"><a href="aDeletecompanyquery.php?sid=<?php echo $result['companyrid'];?>">Delete</a></button></td>
                                    


                                    
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
