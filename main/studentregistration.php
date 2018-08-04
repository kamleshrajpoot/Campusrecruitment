<?php 
include ('connection.php');

if(isset($_POST['submit']))
{
   
      $d=$_POST['Gender'];
  //  echo $d;worki
    $a=$_POST['Fname'];
    $b=$_POST['Mname'];
    $c=$_POST['Lname'];
  
    $e=$_POST['Email'];
    $f=$_POST['contact'];
       $i=$_POST['registration'];
       $k=$_POST['enroll'];
    $g=$_POST['City'];
    $h=$_POST['Address'];
    $j=$_POST['Dob'];
    $l=$_POST['School1'];
    $m=$_POST['Passyear1'];
    $n=$_POST['Aggrigate1'];
    $o=$_POST['School2'];
    $p=$_POST['Passyear2'];
    $q=$_POST['Aggrigate2'];
    $r=$_POST['School3'];
    $s=$_POST['Passyear3'];
    $t=$_POST['Aggrigate3'];
   // $u=$_POST['department'];
   // $v=$_POST['Stream'];
    $w=$_POST['Cirriculus'];
    $x=$_POST['Activity'];
    //$y=$_POST['Username'];
    $y=$_POST['CSpassword'];
  //  echo $z;working
  $u=$_POST['department'];// working
  $v=$_POST['stream'];// working
  //  echo $v;working

$query="insert into studentregistration(fname,mname,lname,gender,email,contact,registrationno,enrollno,city,address
,dob,board1,year1,aggerigate1,board2,year2,aggerigate2,board3,year3,aggerigate3,department,
stream,cirriculus,activity,spassword) VALUES ('$a','$b','$c','$d','$e','$f','$i','$k','$g','$h','$j','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y')
";
$result=mysqli_query($con,$query);
if($result){ ?>
<script>
alert('you are submitted successfully');
    window.open('studentlogin.php','_blank');
</script>
 
<?php }
} ?>



<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" scr="studentregistration.js"></script>
    <script>
    
function idd(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    id1=id1.trim();
   if(id1.length<2)
        {

        f1.innerHTML="<font color=red>please Enter correct name more than 2 characeter</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else if(isNaN(id1)==false)
        {

        f1.innerHTML="<font color=red>please Insert only  characeter</font> ";
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
        function reg(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    id1=id1.trim();
    if (isNaN(id1)){
        f1.innerHTML="<font color=red>please Insert only  number </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
    }
   else if(id1.length<6)
        {

        f1.innerHTML="<font color=red>please Insert  correct  registration number </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
     else if(id1.length>6){
         f1.innerHTML="<font color=red>please insert only 6 digit registration number</font>";
             document.getElementById(field_id).style.borderColor="yellow";
       
    }
    else{
        f1.innerHTML="";
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
    
} function enrl(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);

    id1=id1.trim();
   if(id1<7)
        {

        f1.innerHTML="<font color=red>please Enter Correct Enroll no. like :15mca016</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
   else  if(id1>15)
        {

        f1.innerHTML="<font color=red>please Enter Correct Enroll no. like :15mca016</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    else {
        f1.innerHTML="";
    }
    
}
          function psy1(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    id1=id1.trim();
    if(isNaN(id1))
        {
             f1.innerHTML="<font color=red>please Insert valid passig year.iike:2014 </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
  else if(id1.length<4)
        {

        f1.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else if(id1<2000)
        {

        f1.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
     else if(id1.length>4){
         f1.innerHTML="<font color=red>please insert valid passing year like:2010</font>";
             document.getElementById(field_id).style.borderColor="yellow";
       
    }
    else if(id1>2013)
        {

        f1.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    else{
        f1.innerHTML="";
    }
    
}
         function psy2(field1,field2,field3)
{
    var p1=document.getElementById(field1).value;
    var p2=document.getElementById(field2).value;
    var p3=document.getElementById(field3);
    id1=p1.trim();
    id2=p2.trim();
    if( p1=="")
        {
             p3.innerHTML="<font color=red> First you Insert 10th class valid passig year in above Field.like:2009 </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
             
        }
     else if(isNaN(id2))
        {

        p3.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
  else if(id2.length<4)
        {

        p3.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else if((id2-id1)<2)
        {

        p3.innerHTML="<font color=red>please Insert at-least 2 year gape in between 10th  and 12th class    </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
     else if(id2.length>4){
         p3.innerHTML="<font color=red>please insert valid passing year like:2010</font>";
             document.getElementById(field_id).style.borderColor="yellow";
       
    }
    else if(id2>2015)
        {

        p3.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
    else{
        f1.innerHTML="";
    }
    
}
        function psy3(field1,field2,field3)
{
    var p1=document.getElementById(field1).value;
    var p2=document.getElementById(field2).value;
    var p3=document.getElementById(field3);
    id1=p1.trim();
    id2=p2.trim();
    if( p1=="")
        {
             p3.innerHTML="<font color=red> First you Insert 12th class valid passig year in above Field.like:2011 </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
             
        }
     else if(isNaN(id2))
        {

        p3.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    
  else if(id2.length<4)
        {

        p3.innerHTML="<font color=red>please Insert valid passig year  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else if((id2-id1)<2)
        {

        p3.innerHTML="<font color=red>please Insert at-least 3 year gape in between 12th  and Ug class  </font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
     else if(id2.length>4){
         p3.innerHTML="<font color=red>please insert valid passing year like:2010</font>";
             document.getElementById(field_id).style.borderColor="yellow";
       
    }
    else if(id2>2015)
        {

        p3.innerHTML="<font color=red>please Insert valid passig year  </font> ";
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
   <?php 
          
          include('header2.php');
          
          
          ?>
        <br>
          
               <div class="row">
                         <div class="col-md-offset-2 col-md-8">
                         <div class="container-fluid" >
                             
                         <div class="jumbotron">
                             <h3 style="color:green;">Student Registration Form</h3>
                          <form class="form-horizontal" action="" method="post" >
                        
                              <div class="form-group">
                              <label for="Fname" class="col-sm-3 control-label"  >First Name<font color="red" size="4px">*</font> </label> 
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                                       
                              <input type="text" class="form-control" id="Fname" name="Fname" minlength="2"  placeholder="Enter First Name" required  onblur="idd('Fname','1')" >
                                      
                              </div><span id="1" value=""></span>
                                 
                              </div> 
                              </div>
                              
                              
                              <div class="form-group">
                              <label for="Mname" class="col-sm-3 control-label">Middle Name</label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                               <input type="text" class="form-control" id="Mname" name="Mname" placeholder="Enter Middel Name" >
                                        <span id="" value=""></span>
                              </div>
                              </div>
                              </div>
                              
                              <div class="form-group">
                               <label for="Lname" class="col-sm-3 control-label">Last name</label>
                               <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                               <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Enter Last Name" >
                                        <span id="" value=""></span>
                               </div>
                               </div>
                                 </div>
                             <div class="form-group">
                             <label for="Gender" class="col-sm-3 control-label">Gender<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9">
                             <label class="radio-inline">
                              <input type="radio"  id="Gender" name="Gender" value="Male" required="required"> Male
                              </label>
                              <label class="radio-inline">
                               <input type="radio" id="Gender" name="Gender" value="Female" required="required"> Female
                             </label>
                             </div>
                             </div>
                              
                             <div class="form-group">
                              <label for="Email" class="col-sm-3 control-label">Email<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-envelope"></i></span>
                                                              
                             <input type="email" class="form-control" id="Email" name="Email"  placeholder="xgqfrms@email.xyz" required="" autocomplete="" onblur="emailvali('Email','em')"  >  
                             </div><span id="em" value=""></span>
                              </div>
                               </div>
                              <div class="form-group">
                              <label for="Contect" class="col-sm-3 control-label">Contact<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-phone"></i></span>
                                                              
                              <input type="number"  class="form-control" id="Contect"name="contact" minlength="10" maxlength="10"  placeholder="example:9098561128" pattern="{0-9}" required  onblur="mobile('Contect','co')">
                                        
                              </div><span id="co" value=""></span>
                               </div>
                               </div>
                              
                              
                                <div class="form-group">
                              <label for="Registration" class="col-sm-3 control-label">Registration no.<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                              <input type="text"  class="form-control" id="registration" name="registration"
                                     placeholder="Enter Registration number" pattern="{0-9}" required  onblur="reg('registration','re')">
                                        
                              </div><span id="re" value=""></span>
                               </div>
                               </div>
                                <div class="form-group">
                              <label for="Enroll" class="col-sm-3 control-label">Enroll no.<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                              <input type="text"  class="form-control" id="enroll"name="enroll" minlength="6" placeholder="Enter Enrollment number" pattern="{0-9,a-z,A-Z)}" required  onblur="enrl('enroll','en')" >
                                  </div>   <span id="en" value=""></span>
                              </div>
                               </div>
                               
                              <div class="form-group">
                              <label for="City" class="col-sm-3 control-label">City<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-home"></i></span>
                                                              
                               <input type="text" class="form-control" id="City"  minlength="2" name="City"placeholder="City Name" required onblur="idd('City','c')">
                                       
                               </div>
                                   <span id="c" value=""></span>
                               </div>
                               </div>
                             <div class="form-group">
                             <label for="Address" class="col-sm-3 control-label">Address<font color="red" size="4px">*</font></label>
                               <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-pencil"></i></span>
                                                              
                              <input type="text-field" class="form-control" id="Address" name="Address" placeholder="Enter Address" required  onblur="address('Address','add')">
                                       
                              </div> <span id="add" value=""></span>
                              </div>
                          
                               </div>
                            <div class="form-group">
                            <label for="Dob" class="col-sm-3 control-label">DOB<font color="red" size="4px">*</font></label>
                        <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-calendar"></i></span>
                                                              
                            <input type="date" class="form-control" id="Dob" name="Dob" placeholder="Date Of Birth" required>
                                        <span id="" value=""></span>
                             </div>
                             </div>
                               </div>
                          
                              
                                <div class="form-group">
                              <label for="School" class="col-sm-3 control-label">10th Board<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-education"></i></span>
                                                              
                              <input type="text" class="form-control" id="School1" name="School1" pattern="{a-z ,A-Z}" placeholder=" 10th Board Name" required onblur="idd('School1','s1')">
                                        
                                 </div> <span id="s1" value=""></span>
                                  </div>
                               </div>
                                 <div class="form-group">
                                <label for="Passyear1" class="col-sm-3 control-label">Passing Year<font color="red" size="4px">*</font></label>
                                 <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                                  <input type="text"  pattern="{0-9}" class="form-control" id="Passyear1"  name="Passyear1"placeholder="Example:2009"  required onblur="psy1('Passyear1','py1')">
                                     </div>  <span id="py1" value=""></span>
                                 
                                </div>
                               </div>
                              <div class="form-group">
                              <label for="Aggrigate1" class="col-sm-3 control-label">Aggrigate<font color="red" size="4px">*</font></label>
                               <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                             <input type="number" min="33"  max="100"class="form-control" id="Aggerigate1" name="Aggrigate1" placeholder=" 10th Aggrigate in %" required>
                                        <span id="" value=""></span>
                              </div>
                              </div>
                               </div>
                              <div class="form-group">
                               <label for="Sschool2" class="col-sm-3 control-label">12th Board<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-education"></i></span>
                                                              
                               <input type="text" class="form-control" id="School2"name="School2" pattern="{a-z,A-Z}" placeholder=" 12th Board Name" required onblur="idd('School2','s2')">
                                        
                              </div> <span id="s2" value=""></span>
                            </div>
                               </div>
                              <div class="form-group">
                              <label for="Passyear2" class="col-sm-3 control-label">Passing Year<font color="red" size="4px">*</font></label>
                        <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                              <input type="text" input type="text" pattern="\d{4}"class="form-control" id="Passyear2" name="Passyear2" placeholder="Example:2011" required onblur="psy2('Passyear1','Passyear2','py2')">
                            </div>     <span id="py2" value=""></span>
                              
                             </div>
                               </div>
                             <div class="form-group">
                             <label for="Aggrigate2" class="col-sm-3 control-label">Aggrigate<font color="red" size="4px">*</font></label>
                        <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                             <input type="number"  min="33" max="100"class="form-control" id="Aggrigate2"  name="Aggrigate2"placeholder=" 12th Aggrigate in %" required>
                                        <span id="" value=""></span>
                             </div>
                              </div>
                             </div> 
                              <div class="form-group">
                              <label for="School3" class="col-sm-3 control-label"> University<font color="red" size="4px">*</font></label>
                             <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-education"></i></span>
                                     
                                                              
                              <input type="text" class="form-control" id="School3"name="School3" pattern="{a-z,A-Z}" placeholder="University Name" required onblur="idd('School3','s3')">
                                        
                             </div> <span id="s3" value=""></span>
                              </div>
                               </div>
                              <div class="form-group">
                                <label for="Passyear3" class="col-sm-3 control-label">Passing Year<font color="red" size="4px">*</font></label>
                              <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                             <input type="text" input type="text" pattern="\d{4}" class="form-control" id="Passyear3" name="Passyear3" placeholder="Example:2014" required onblur="psy3('Passyear2','Passyear3','py3')">
                             </div>             
                              <span id="py3" value=""></span>
                               </div>
                               </div>
                             <div class="form-group">
                            <label for="Aggrigate3" class="col-sm-3 control-label">Aggrigate<font color="red" size="4px">*</font></label>
                    <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                            <input type="number" min="33" max="100" class="form-control" id="Aggirigate3" name="Aggrigate3" placeholder=" UG Aggrigate in %" required>
                                        <span id="" value=""></span>
                            </div>
                             </div>
                               </div>
                     <div class="form-group">
                    <label for="Department" class="col-sm-3 control-label">Department<font color="red" size="4px">*</font></label>
                <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                    <select class="form-control" name="department" required>
                        <option value=" ">Select Department</option>
                          <option value="Bio Engineering">Bio Engineering</option>
                         <option value="Chamical Engineering">Chamical Engineering</option>
                          <option value="Civil Engineering">Civil Engineering</option>
                          <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                         <option value="Electrical Engineering">Electrical Engineering</option>
                          <option value="Electronic and Communication Engineering">Electronic and Communication Engineering</option>
                          <option value="Electronic and instrumentation Engineering">Electronic and instrumentation Engineering</option>
                         <option value="Machanical Engineering">Machanical Engineering</option>
                         <option value="production Engineering">production Engineering</option>
                         <option value="Humanities & Social Sciences">Humanities & Social Sciences </option>
                         <option value="Phisics">Phisics</option>
                         <option  value="Chemistry">Chemistry</option>
                        <option value="Mathematics">Mathematics</option>
                    </select>
                    </div>
                   </div>
                     </div>
                    
                      <div class="form-group">
                   <label for="Stream" class="col-sm-3 control-label">Stream<font color="red" size="4px">*</font></label>
                   <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                   <select class="form-control" name="stream" required>
                        <option value=" "> Select Stream</option>
                        <option value="MCA">MCA</option>
                        <option value="M.TECH">M.TECH</option>
                        <option value="MBA">MBA</option>
                        <option value="B.TECH">B.TECH</option>
                   </select>
                  </div>
                  </div>
                            </div>   
                              <div class="form-group">
                           <label for="Cirriculus" class="col-sm-3 control-label">Extra Cirriculus</label>
                             <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                              <input type="text" class="form-control" id="Cirriculus"name="Cirriculus" pattern="{a-z,A-Z}" placeholder="Cirriculus Name" required onblur="idd('Cirriculus','ci')">
                                        
                           </div> <span id="ci" value=""></span>
                          </div>
                               </div>
                         <div class="form-group">
                         <label for="Activity" class="col-sm-3 control-label">Other Activity</label>
                          <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                          <input type="text" class="form-control" id="Activity"name="Activity" pattern="{a-z,A-Z}" placeholder="Example:Social Work" required onblur="idd('Activity','a')">
                                        
                          </div>
                               <span id="a" value=""></span>
                        </div>
                               </div>
                      
                              
                       <div class="form-group">
                         <label for="Spassword" class="col-sm-3 control-label">Password<font color="red" size="4px">*</font></label>
                       <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                         <input type="password" class="form-control" id="Spassword"name="Spassword" placeholder="Password" required onblur="passwordd('Spassword','sp')">
                                        
                       </div><span id="sp" value=""></span>
                         </div>
                           </div>
                                 <div class="form-group">
                         <label for="CSpassword" class="col-sm-3 control-label"> Confirm Password<font color="red" size="4px">*</font></label>
                       <div class="col-sm-9 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon">
                                      <i class="glyphicon glyphicon-user"></i></span>
                                                              
                         <input type="password" class="form-control" id="CSpassword"name="CSpassword" placeholder="Enter Above Password" required onblur="cpasswordd('CSpassword','csp','Spassword')">
                                        
                       </div><span id="csp" value=""></span>
                         </div>
                           </div>
                              
                              
                       <div class="form-group">
                       <label for="RSubmit" class="col-sm-3 control-label">For Register</label>
                       <div class="col-sm-9 ">
                                                              
                       <input class="btn btn-success" type="submit"  name="submit"value="Click Here" onclick="return checkyear()" >
                       </div>
                      </div>

                        <div class="form-group">
                       <label for="CSubmit" class="col-sm-3 control-label">For Clear</label>
                       <div class="col-sm-9">
                       <input class="btn btn-primary" type="reset" value="Click Here">
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
                <hr>
                         <?php include ('footer.php'); ?>
                <hr>
    
  </div>
    
                
                  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
                  <script src="js/jquery-3.1.1.min.js"></script>
                  <script type="text/javascript" scr="studentregistration.js"></script>
</body>
</html>