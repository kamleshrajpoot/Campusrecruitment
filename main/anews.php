


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
          <a  class="btn btn-primary" style="float:left" style="decoratation:none" href="adminhome.php" >Back To Admin Home</a>  <a  class="btn btn-success" style="float:right" href="adminlogout.php">Logout</a>
            </div>
                
            
            </div>
            <div class="row">
       <div class="col-md-12">
             <div class="container-fluid" >
             <div class="jumbotron">
                 <h3 style="color:green;">Post Latest News</h3>
                   <div class="table-responsive">
                           <table class="table table-condensed">
                                <tr class="success">
    <th class="danger">S.No</th>
     <th class="success">Latest News</th>

                              </tr>
                               <?php   
                                 $query="select * from news";
                               $query1=mysqli_query($con,$query);
                                $i=0;
                               while($result=mysqli_fetch_array($query1)){
                                   $i++;
                                  ?>
                                   
                               
                                <tr class="success">
 <td class="danger"><?php echo $i ?></td>
 <td class="success">
     <form action="updatenews.php" method="post">
     <input type="text" size="100px;" value="<?php echo $result['lnews'];?>" name="newss"/>
         <input type="hidden" value="<?php echo $result['sn']; ?>" name="sno"/>
         <input  class="btn btn-warning" type="submit" name="submit" value="Update" />
     </form>
     </td>
     

                                    
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
