<?php include ('connection.php'); ?>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['cname'];
    $b=$_POST['establised'];
    $c=$_POST['Email'];
    $d=$_POST['contact'];
    $e=$_POST['hrname'];
    $f=$_POST['hrid'];
    $g=$_POST['cpass'];
    $query="insert into companyregistration(cname,establised,cemail,contact,hrname,hrid,cpassword) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
   $result=mysqli_query($con,$query);
if($result){ ?>
<script>
alert('you are submitted successfully');
    window.open('companylogin.php','_blank');
</script>
 
<?php }
} ?>

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>

      <script>
    
    function namec(f1,f2){
        var id1=document.getElementById(f1).value;
        var id2=document.getElementById(f2);
        id1=id1.trim();
         if(id1.length<2){
            id2.innerHTML="<font color=red>please please enter  correct company name</font>";
        }
       
        else if(isNaN(id1)==false)
            {
                id2.innerHTML="<font color=red> please Enter correct full company name </font>";
                document.getElementById(field_id).style.borderColor="yellow";
            }
         else{
        id2.innerHTML="";
    }
    }
           function emailvalidation(f1,f2)
{
    var id1=document.getElementById(f1).value;
    var id2=document.getElementById(f2);
    var format=/.+@.+/;
    id1=id1.trim();
   if(!id1.match(format))
        {

        id2.innerHTML="<font color=red>the Email should be like :kamleshraj@gmail.com </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    
    else{
        id2.innerHTML="";
    }
    
}
          
          
function idhr(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    id1=id1.trim();
   if(id1.length<2)
        {

        f1.innerHTML="<font color=red>please Enter correct Id more than 2 characeter and at most 10 characeter</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
  else if(id1.length>10)
        {

        f1.innerHTML="<font color=red>please Enter correct Id more than 2 characeter and at most 10 characeter</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else if(id1=="")
        {

        f1.innerHTML="<font color=red>please Insert your id</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else{
        f1.innerHTML="";
    }
    
   
}
function mobile(field_id,field2)
{
      var mobile=document.getElementById(field_id).value;
    var f2=document.getElementById(field2);
    mobile=mobile.trim();
   if(mobile.length<10)
        {
            f2.innerHTML="<font color=red>please insert correct mobile number</font>";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else if(mobile.length>10){
         f2.innerHTML="<font color=red>please insert only 10 Digit mobile number</font>";
             document.getElementById(field_id).style.borderColor="yellow";
       
    }
    else{
         f2.innerHTML="";
    }
}
           function namehr(f1,f2){
        var id1=document.getElementById(f1).value;
        var id2=document.getElementById(f2);
        id1=id1.trim();
         if(id1.length<2){
            id2.innerHTML="<font color=red>please please enter  correct HR name</font>";
        }
       
        else if(isNaN(id1)==false)
            {
                id2.innerHTML="<font color=red> please Enter correct full HR name </font>";
                document.getElementById(field_id).style.borderColor="yellow";
            }
         else{
        id2.innerHTML="";
    }
    }
       
     
       function passwordd(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    var format=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    id1=id1.trim();
   if(!id1.match(format))
        {

        f1.innerHTML="<font color=red>the password must be combination of  at least one number, one lowercase and one uppercase letter and at least six characters </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    
    else{
        f1.innerHTML="";
    }
    
}
          function cpasswordd(field_id,field1,cfield)
{
    var id1=document.getElementById(field_id).value;
    var id2=document.getElementById(cfield).value;
    var f1=document.getElementById(field1);
    id1=id1.trim();
   if(id2!=id1)
        {

        f1.innerHTML="<font color=red>Entered password wrong </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    
    else{
        f1.innerHTML="";
    }
    
}
        
           function address(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);

    id1=id1.trim();
   if(id1<10)
        {

        f1.innerHTML="<font color=red>please insert address at-least 10 character</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
   else  if(id1>100)
        {

        f1.innerHTML="<font color=red>please insert address at-most 100 character</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    else {
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
        div.container{
             background-color:burlywood;
        }
           div container d1 h1{
            text-align:center;
        }
</style>
<body >
    
      <div  class="container">
            <br>
 <?php 
          
          include('header2.php');
          
          
          ?>
            <br>
   <div class="row">
              <div class="col-md-9" >
                    <div class="container-fluid" >
                         <div class="jumbotron">
                             <h3 style="color:green;">Company Registration Form</h3>
                         <form class="form-horizontal" action="" method="post">
                                 <div class="form-group">  
                                 <label for="Cname" class="col-sm-3 control-label">Company <font color="red" size="4px">*</font></label>
                                  <div class="col-sm-9">
                                  <input type="text" class="form-control" id="Cname" name="cname" placeholder="Enter Company Name" required onblur="namec('Cname','n')">
                                  </div><span id="n" value=""></span>
                                  </div>
                             <div class="form-group">
                             <label for="Estaiblished" class="col-sm-3 control-label">Established<font color="red" size="4px">*</font> </label>
                               <div class="col-sm-9">
                                  <input type="date" class="form-control" id="Estaiblished" placeholder="Enter Estaiblished year:2008" name="establised" required>
                               </div><span id="2" value=""></span>
                             </div>
                             <div class="form-group">
                              <label for="Email1" class="col-sm-3 control-label">Email<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9">
                             <input type="email" class="form-control" id="Email1" name="Email"  placeholder="xgqfrms@email.xyz" required="" autocomplete="" onblur="emailvalidation('Email1','e')" >
                             </div><span id="e" value=""></span>
                              </div>
                             <div class="form-group">
                             <label for="Contact" class="col-sm-3 control-label">Contact<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9">
                              <input type="number" class="form-control" id="Contact" name="contact" placeholder="Contact" required onblur="mobile('Contact','cc')">
                               </div><span id="cc" value=""></span>
                              </div>
                             <div class="form-group">
                              <label for="Hr" class="col-sm-3 control-label">HR Name<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9">
                               <input type="text" class="form-control" id="Hr" placeholder=" HR Name" name="hrname" required onblur="namehr('Hr','hrn')" >
                              </div><span id="hrn" value=""></span>
                              </div>
                             <div class="form-group">
                              <label for="Cid" class="col-sm-3 control-label">Your Id<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9">
                               <input type="text" class="form-control" id="Cid" placeholder="Id" name="hrid"  required onblur="idhr('Cid','hrid')">
                              </div><span id="hrid" value=""></span>
                              </div>
                             <div class="form-group">
                                <label for="cpassword" class="col-sm-3 control-label">Password<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9">
                            <input type="password" class="form-control" id="cpassword" name="cpass" placeholder="Enter password" required onblur="passwordd('cpassword','sp')">
                            </div><span id="sp" value=""></span>
                            </div>
                              <div class="form-group">
                                <label for="CSpassword" class="col-sm-3 control-label">Confirm Password<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9">
                            <input type="password" class="form-control" id="CSpassword" name="cpass" placeholder="Enter Above password" required onblur="cpasswordd('CSpassword','csp','cpassword')">
                            </div><span id="csp" value=""></span>
                            </div>
 
                            <div class="form-group">
                            <label for="Submit" class="col-sm-3 control-label">For Register</label>
                             <div class="col-sm-9">
                              <input class="btn btn-success" type="submit" name="submit" value="Click Here">
                             </div>
                              </div>
                              <div class="form-group">
                              <label for="Submit" class="col-sm-3 control-label">For Clear</label>
                               <div class="col-sm-9">
                              <input class="btn btn-primary" type="reset" value="Click Here">
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
                <?php include ("footer.php"); ?>
               <hr>
    
        
    </div>
           <script src="js/bootstrap.min.js"></script>
           <script src="js/jquery-3.1.1.min.js"></script>
</body>
</html>

