<?php

session_start();
if(isset($_SESSION['uid']))
    header('location:adminhome.php');

?>

<?php include ('connection.php'); 
if(isset($_POST['submit']))
{
$useridd=$_POST['aid'];
$userpasss=$_POST['apass'];
        // working
$query="SELECT * FROM admin WHERE adminname='$useridd'AND password='$userpasss'";
   $result= mysqli_query($con,$query);
    $row=mysqli_num_rows($result);

    if ($row<1)
    { ?>


<script>
    alert('user name and/or password incorrect ');
    window.open('adminlogin.php','_self');
    
        </script>
        
  <?php  }
else{
    $data=mysqli_fetch_assoc($result);
    $id=$data['id'];
    
    $_SESSION['uid']=$id;
    header('location:adminhome.php');
} 


}


?>
<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="adminlogin.js"></script>
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

    <body> 
          
          <div  class="container">
                  <br>
          
             <?php 
          
          include('header2.php');
          
          
          ?>
              <br>
 
<div class="row" >
         <div class="col-md-4">
             <div class="container-fluid" >
                     <div class="jumbotron">
                      <h4 style=color:green;> For Admin Login</h4>
                            <form class="responsive" action="" method="post">
                              <div class="form-group">
                            <label for="AId">Admin Id<font color="red" size="4px">*</font></label>
                             <input type="text" class="form-control" id="AId" name="aid" placeholder="Enter Id" required onblur="idd('AId','1')">
                                  <span id="1" value=""></span>
                              </div>
                              <div class="form-group">
                                <label for="APassword">Password<font color="red" size="4px">*</font></label>
                               <input type="password" class="form-control" id="APassword" name="apass" placeholder="Password" required onblur="pass('APassword','2')">
                                  <span id="2" value=""></span>
                             </div>
                            <button class="btn btn-primary" type="submit" name="submit" class="btn btn-default" onclick="admin()">Login</button>
                                </br></br>
                           <button class="btn btn-success" input type="reset">Clear</button>
                           </form>
                    </div>
               </div>
           </div>
           <div class="col-md-8">
                     <div class="container-fluid" >
                       
                    </div>
           </div>
 </div>           <hr>
                         <?php include ("footer.php"); ?>
                    <hr>
    
        
          </div>
                   <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery-3.1.1.min.js"></script>
                <script type="text/javascript" src="adminlogin.js"></script>

   
    </body>
</html>