<?php

session_start();
if(isset($_SESSION['uid']))
    header('location:studenthome.php');

?>

    <?php include ('connection.php'); ?>
    <?php 
if(isset($_POST['submit']))
{
$userid=$_POST['userid'];
$userpass=$_POST['userpass'];
$query="SELECT * FROM studentvalid WHERE registrationno='$userid'AND spassword='$userpass'";
   $result= mysqli_query($con,$query);
    $row=mysqli_num_rows($result);

    if ($row<1)
    { ?>


    <script>
        alert('user name and/or password incorrect ');
        window.open('studentlogin.php', '_self');

    </script>

    <?php  }
else{
    $data=mysqli_fetch_assoc($result);
    $id=$data['registrationno'];
    
    $_SESSION['uid']=$id;
    header('location:studenthome.php');
} 


}


?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="studentlogin.js"></script>


    </head>
    <style>
        form {
            color: black;
        }
        
        button li a {
            text-decoration: none;
        }
        
        div.container {
            background-color: burlywood;
        }
        
        body {
            position: relative;
        }

    </style>

    <body data-spy="scroll" data-target="#navbar-example">

        <div class="container">
            <br>
            <?php 
          
          include('header2.php');
          
          
          ?>
            <br>
            <div class="row">
                <div class="col-md-offset-1 col-md-4">
                    <div class="container-fluid">
                        <div class="jumbotron">
<h4 style="color:green;"> For Student Login </h4>
                            <form action="studentlogin.php" class="responsive" method="POST">
                                <div class="form-group">
                                    <label for="SId">Student Id<font color="red" size="4px">*</font></label>
                                    <input type="text" name="userid" class="form-control" id="SId" placeholder="Enter registration no." required onblur="idd('SId','1')">
                                    <span id="1" value=""></span>
                                </div>
                                <div class="form-group">
                                    <label for="SPassword">Password<font color="red" size="4px">*</font></label>
                                    <input type="password" name="userpass" class="form-control" id="SPassword" placeholder="Password" required onblur="pass('SPassword','2')">
                                    <span id="2" value=""></span>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary" onclick=" checkinfo()">Login</button>
                                
                            </form>
                            </br>
                            <button class="btn btn-success" href="studentregistration.php">Sign-Up</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container-fluid">
                        <div class="jumbotron">
                            <div id="bodydesc" style="margin-left:auto; margin-right:auto; width:400px; height: 280px; overflow-y: scroll;">

                                <p id="desc" style="float:left;color: #666666; font-family: Candara,Trebuchet MS,sans-serif; font-size: 12px; font-weight: bold; border-right: thin dotted #666666; line-height: 18px;">

                                    <pre style="color:red">Application Rules:</pre> • All applications to the companies are to be made only through online system of the Campus Recruitment System. If a student does not Register on website , he/she will not be allowed to participate in the Placement Cell.</br>
                                    • A student can apply to a maximum of 10 companies (default) on campus. A warning would be issued as one crosses 8 applications.</br>
                                    • After a student has exhausted his/her quota of 10 applications and desires to make further applications:
                                    </br>
                                    (1) He/she will be required to approach his/her concerned authority and Head and obtain in writing a letter certifying the need of the student to obtain more applications in a standard format. (2) Only on receipt of such a request, would Placement Cell consider and add 5 more applications to the student quota of applications.</br>
                                    • All applications to the companies are to be made only through online system of the Campus Recruitment System. If a student does not Register on website , he/she will not be allowed to participate in the Placement Cell.</br>
                                    • A student can apply to a maximum of 10 companies (default) on campus. A warning would be issued as one crosses 8 applications.</br>
                                    • After a student has exhausted his/her quota of 10 applications and desires to make further applications:
                                    </br>
                                    (1) He/she will be required to approach his/her concerned authority and Head and obtain in writing a letter certifying the need of the student to obtain more applications in a standard format. (2) Only on receipt of such a request, would Placement Cell consider and add 5 more applications to the student quota of applications.</br>
                                    <pre style="color:red">Business Rules for Withdrawing an Application:</pre> The student may withdraw his/her application from a company on campus subject to the following rules and regulations:</br>
                                    • The student can withdraw his/her application to a company only if the last date of application to that particular company is not over.</br>
                                    • The student may withdraw from any or all companies without any limits, but only before the last date of application to company/companies concerned.</br>
                                    • The student may also reapply to a company that he/she had earlier withdrawn from, provided he/she has not exceeded his/her application quota and application deadline for the company is not over.</br>
                                    <pre style="color:green">if you are Agree,Sign-up</pre>

                                </p>

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
        <script type="text/javascript" src="studentlogin.js"></script>
    </body>

    </html>
