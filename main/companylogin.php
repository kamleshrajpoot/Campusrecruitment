

    <?php include ('connection.php'); ?>

<?php 
if(isset($_POST['submit3']))
{
$cuserid=$_POST['userid'];
$cuserpass=$_POST['userpass'];
      // working
    $query="SELECT * FROM companyvalid WHERE hrid='$cuserid'AND cpassword='$cuserpass'";
   $result= mysqli_query($con,$query);
    $row=mysqli_num_rows($result);

    if ($row<1)
    { ?>


    <script>
        alert('user name and/or password incorrect ');
        window.open('companylogin.php', '_self');

    </script>

    <?php  }
else{
    $data=mysqli_fetch_assoc($result);
    $id=$data['hrid'];
    
    $_SESSION['uid']=$id;
    header('location:companyhome.php');
} 



}


?>
<?php

session_start();
if(isset($_SESSION['uid']))
    header('location:companyhome.php');

?>

    <?php include ('connection.php'); ?>
    <?php 
if(isset($_POST['submit']))
{
$userid=$_POST['userid'];
$userpass=$_POST['userpass'];
$query="SELECT * FROM companyvalid WHERE hrid='$userid'AND cpassword='$userpass'";
   $result= mysqli_query($con,$query);
    $row=mysqli_num_rows($result);

    if ($row<1)
    { ?>


    <script>
        alert('user name and/or password incorrect ');
        window.open('companylogin.php', '_self');

    </script>

    <?php  }
else{
    $data=mysqli_fetch_assoc($result);
    $id=$data['hrid'];
    
    $_SESSION['uid']=$id;
    header('location:companyhome.php');
} 


}


?>
<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="companylogin.js"></script>
        
     
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
            text-align: right;
        }
</style>
    <body> 
        
        <div  class="container">
              <br>
 <?php 
          
          include('header2.php');
          
          
          ?>            <br>
      
<div class="row">
              <div class="col-md-offset-1 col-md-4">
                   <div class="container-fluid" >
                        <div class="jumbotron">
                            <h4 style="color:green;">For Company Login</h4>
                            <form  action="" class="responsive" method="post" >
                                 <div class="form-group">
                                   <label for="CId">Company Id<font color="red" size="4px">*</font></label>
                                    <input type="text"  name="userid"class="form-control" id="CId" placeholder="Enter Hr Id" required onblur="idd('CId','1')">
                                     <span id="1" value=""></span>
                                 </div>
                                <div class="form-group">
                                <label for="CPassword">Password<font color="red" size="4px">*</font></label>
                                <input type="password"  name="userpass" class="form-control" id="CPassword" placeholder="Password" required onblur="pass('CPassword','2')">
                                    <span id="2" value=""></span>
                                </div>
                              <button type="submit" name="submit" class="btn btn-primary" onclick=" checkinfo()">Login</button>
                                
                          </form></br>
                        <a  class="btn btn-success" href="companyregistration.php">Sign-Up</a>
                     </div>
               </div>
             </div>
          <div class="col-md-6">
               <div class="container-fluid" >
                     <div class="jumbotron">
                         <div id="bodydesc" style="margin-left:auto; margin-right:auto; width:400px; height: 280px; overflow-y: scroll;">

        <p id="desc" style="float:left;color: #666666; font-family: Candara,Trebuchet MS,sans-serif; font-size: 12px; font-weight: bold; border-right: thin dotted #666666; line-height: 18px;">

        <pre style="color:red">Instructions For Recruiters:</pre> 

  
                             1. Only one registration is allowed for an Industry.  However they can post multiple job or internship opportunities after sign in. If you have visited us last year, you can use the same credentials to log-in.</br>
   2. Please visit other pages in this website for the brochure, and other details of our revised placement process.</br>
   
   3. While announcing the jobs at this portal, please fill in the information requested for in the portal. If their is any specification with respect to the departments to be addressed for the recruitment, please mention in the Job description document as an additional file. You will be able to attach files for additional details.</br>
  

      </p>
           
  </div>

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
        <script type="text/javascript" src="companylogin.js"></script>
        </body>
</html>