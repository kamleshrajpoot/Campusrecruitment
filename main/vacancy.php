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
    $a=$_POST['cname'];
    $b=$_POST['companyid'];
    $c=$_POST['job'];
    $d=$_POST['criteria'];
    $e=$_POST['bond'];
    $f=$_POST['email'];
    $g=$_POST['salary'];
    $query="insert into vacancy(cname,companyid,jobtype,salary,criteria,bond,email) VALUES ('$a','$b','$c','$g','$d','$e','$f')
";
$result=mysqli_query($con,$query);
if($result){ ?>
<script>
alert('you are submitted successfully');
    window.open('vacancy.php','_blank');
</script>
<?php
}}
?>
<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script>
    
       function emailvali(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    var format=/.+@.+/;
    id1=id1.trim();
   if(!id1.match(format))
        {

        f1.innerHTML="<font color=red>the Email should be like :kamleshraj@gmail.com </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    
    else{
        f1.innerHTML="";
    }
    
}
    </script>
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
          
            <div class="panel panel-default">
  
  <div class="panel-body">
      <div>  <img src="company33.jpg" class="img-responsive" alt="Responsive image"></div></br>
           <a class="btn btn-primary" style="float:left" style="decoratation:none" href="companyhome.php" >Back To Company Home</a> <a class="btn btn-success" style="float:right" href="companylogout.php">Logout</a>
            </div>
                
            
            </div>
       <div class="row">
              <div class="col-md-offset-2 col-md-8">
            <div class="container-fluid" >
             <div class="jumbotron">
                 <h3 style=color:green;>Post Vacancy</h3>
<form class="form-horizontal" action="vacancy.php" method="post">
    <div class="form-group">
    <label for="inputcname" class="col-sm-3 control-label">Company<font color="red" size="4px" >*</font> </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="cname" id="inputcname" placeholder="Enter Company Name" required>
    </div>
  </div>
     <div class="form-group">
    <label for="inputid" class="col-sm-3 control-label">Company Id<font color="red" size="4px">*</font></label>
    <div class="col-sm-9">
      <input type="text" name="companyid" class="form-control" id="inputid" placeholder="Company id" required>
    </div>
  </div>
     <div class="form-group">
    <label for="inputprofile" class="col-sm-3 control-label">Job Profile<font color="red" size="4px">*</font></label>
    <div class="col-sm-9">
                 <select class="form-control" name="job" required>
                       <option value=" "> Select Job</option>
                        <option value="Web Developer">Web Developer </option>
                        <option value="Civil Engineer">Civil Engineer</option>
                        <option value="Automotive Engineer">Automotive Engineer</option>
                         <option value="Chemical Engineer">Chemical Engineer</option>
                        <option value="Computer Engineer">Computer Engineer</option>
                        <option value="Electrical engineer">Electrical engineer</option>
                        <option value="Mechanical engineer">Mechanical engineer</option></option>
                        <option value="Software engineer">Software engineer</option>
                    
                   </select>
                  </div>
                         
    </div>

     <div class="form-group">
    <label for="salary" class="col-sm-3 control-label">salary<font color="red" size="4px">*</font></label>
    <div class="col-sm-9">
      <input type="number"  name="salary" class="form-control" id="salary" placeholder="salary of a month:30000" required>
    </div>
    </div>
    
    
           <div class="form-group">
    <label for="inputprofile" class="col-sm-3 control-label">Eligibility Criteria<font color="red" size="4px">*</font></label>
    <div class="col-sm-9">
            
                   <select class="form-control" name="criteria" required>
                       <option value=" "> Select Criteria</option>
                        <option value="Fresher">Fresher </option>
                        <option value="Exprience Holder">Exprience Holder</option>
                       <option value="Fresher or Exprience">Fresher or Exprienced</option>
                         
                   </select>
    
                  </div>
             </div>
     <div class="form-group">
    <label for="inputbond" class="col-sm-3 control-label">Bond (leave blank if,no bond)</label>
    <div class="col-sm-9">
      <input type="text" name="bond" class="form-control" id="inputbond" placeholder="like: 1 year or 2 year " required onblur="idd('inputbond','bnd')" >
    </div><span id="bnd" value=""></span>
    </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-3 control-label">Email<font color="red" size="4px">*</font></label>
    <div class="col-sm-9">
      <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter Email address" required onblur="emailvali('inputEmail','emil')">
    </div><span id="emil" value=""></span>
  </div>
   <div class="form-group">
    <label for="inputpost" class="col-sm-3 control-label">For Post</label>
    <div class="col-sm-9">
     <input class="btn btn-primary"  name="submit" type="submit" value="Click Here">
    </div>
  </div>
                  <div class="form-group">
    <label for="inputpost" class="col-sm-3 control-label">For Clear</label>
    <div class="col-sm-9">
     <input class="btn btn-danger"  name="submit" type="reset" value="Click Here">
    </div>
  </div>
     
</form>
                </div>     
             </div> 
        </div>
         <div class="col-md-4">
            <div class="container-fluid" >
            
             </div>
       </div>
    </div>
    
    
        <hr>     <?php include ('footer.php'); ?><hr>
          </div>
                    
    
      <script src="js/bootstrap.min.js"></script>
                  <script src="js/jquery-3.1.1.min.js"></script>
                  <script type="text/javascript" scr="studentregistration.js"></script>
</body>
</html>

