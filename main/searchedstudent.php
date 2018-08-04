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
</style>
    <body> 
  <div  class="container">
            
              <br> 
            <div class="panel panel-default">
 
  <div class="panel-body">
      <div>  <img src="company33.jpg" class="img-responsive" alt="Responsive image"></div>
          <a style="float:left" style="decoratation:none" href="searchstudent.php" >Back </a>  <a style="float:right" href="companylogout.php">logout</a>
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
                                    
                               </tr>
                               <?php   
                                 $query="select * from studentvalid where aggerigate1>='$a'AND aggerigate2>='$b' AND aggerigate3 >='$c' AND department ='$d' AND stream ='$e'";
                               $query1=mysqli_query($con,$query);
                                $i=0;
                               while($result=mysqli_fetch_array($query1)){
                                   $i++;
                                  ?>
                                   
                               
                                <tr class="success">
 <td class="danger"><?php echo $i ?></td>
 <td class="success"><?php echo $result['fname']; ?></td>
 <td class="warning"><?php echo $result['dob']; ?></td>
  <td class="danger"><?php echo $result['gender']; ?></td>
<td class="info"><?php echo $result['email']; ?></td>
 <td class="warning"><?php echo $result['contact']; ?></td>
 <td class="success"><?php echo $result['aggerigate1']; ?></td>   
 <td class="info"><?php echo $result['year1']; ?></td>
 <td class="danger"><?php echo $result['aggerigate2']; ?></td>   
 <td class="warning"><?php echo $result['year2']; ?></td>
 <td class="success"><?php echo $result['aggerigate3']; ?></td>
 <td class="info"><?php echo $result['stream']; ?></td>   


                                    
  </tr>
<?php } ?>
</table>
                            </div>    
             </div>
             </div>
            </div>
      </div>
         <div class="row">
                 <div class="col-md-12">
                 <div class="container-fluid" >
                 <div class="jumbotron">
                
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">From</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Company Email Address" value="">
		</div>
                     </div><br><br>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		</div>
	</div><br><br>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"></textarea>
		</div>
                     </div><br><br><br><br><br>
	<div class="form-group">
		<div class="col-sm-2 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	
		<div class="col-sm-2 col-sm-offset-2">
			<input id="submit" name="submit" type="reset" value="cancel" class="btn btn-danger">
		</div>
        
	</div>
	
                    </div>
<
                 
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
