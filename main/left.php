<?php include ('connection.php'); ?>
<?php

    
    if(isset($_POST['submitforid']))
{
   
     $a=$_POST['Fname'];
  $v=$_POST['stream'];// working
   
$name=$a;
$name=substr($name,0,1);
    $stream=$v;
    $stream=substr($stream,0,1);
    
$generateid=str_shuffle ("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
$generateid1=substr($generateid,0,4);
    
    $generateid2=$name.$stream.$generateid1;
   // echo $generateid2;working
}
?>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['Fname'];
    $b=$_POST['Mname'];
    $c=$_POST['Lname'];
    $d=$_POST['gender'];
    $e=$_POST['Email'];
    $f=$_POST['contect'];
    $g=$_POST['City'];
    $h=$_POST['Address'];
    $i=$_POST['filephoto'];
    $j=$_POST['Dob'];
    $k=$_POST['Age'];
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
    $w=$_POST['cirriculus'];
    $x=$_POST['Activity'];
    $y=$_POST['Username'];
    $z=$_POST['Spassword'];
    echo $z;
}
   //not working
      
    if(isset($_POST['submit']))
{
   
    
  $u=$_POST['department'];// working
  $v=$_POST['stream'];// working
    echo $v;
}
?>









<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript"scr=studentregistration.js></script>
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
    <?php include ('header.php'); ?>
      <div  class="container">
    
               <div class="row">
                         <div class="col-md-6">
                         <div class="container-fluid" >
                         <div class="jumbotron">
                          <form class="form-horizontal" action="" method="post" >
                              
                              <div class="form-group">
                              <label for="Fname" class="col-sm-2 control-label"  >First Name<font color="red" size="4px">*</font> </label>
                              <div class="col-sm-10">
                              <input type="text" class="form-control" id="Fname" name="Fname" placeholder="Enter First Name" required>
                              </div>
                              </div>
                              
                              <div class="form-group">
                              <label for="Mname" class="col-sm-2 control-label">Middle Name</label>
                              <div class="col-sm-10">
                               <input type="text" class="form-control" id="Mname" name="Mname" placeholder="Enter Middel Name" >
                              </div>
                              </div>
                              
                              <div class="form-group">
                               <label for="Lname" class="col-sm-2 control-label">Last name</label>
                               <div class="col-sm-10">
                               <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Enter Last Name" required>
                               </div>
                               </div>

                             <div class="form-group">
                             <label for="Gender" class="col-sm-2 control-label">Gender<font color="red" size="4px">*</font></label>
                             <div class="col-sm-10">
                             <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="Gender" name="Gender" value="option1" required="required"> Male
                              </label>
                              <label class="radio-inline">
                               <input type="radio" name="inlineRadioOptions" id="Gender" name="Gender" value="option2" required="required"> Female
                             </label>
                             </div>
                             </div>
                              
                             <div class="form-group">
                              <label for="Email" class="col-sm-2 control-label">Email<font color="red" size="4px">*</font></label>
                             <div class="col-sm-10">
                             <input type="email" class="form-control" id="Email" name="Email"  placeholder="xgqfrms@email.xyz" required="" autocomplete="" autofocus="" oninvalid="this.setCustomValidity(`This is a customlised invalid warning info!`)">
                             </div>
                              </div>
                              
                              <div class="form-group">
                              <label for="Contect" class="col-sm-2 control-label">Contect<font color="red" size="4px">*</font></label>
                              <div class="col-sm-10">
                              <input type="number" min="10" class="form-control" id="Contect"name="contect" placeholder="example:+919098561128" pattern="{0-9}" required>
                              </div>
                               </div>
                              
                              <div class="form-group">
                              <label for="City" class="col-sm-2 control-label">City<font color="red" size="4px">*</font></label>
                              <div class="col-sm-10">
                               <input type="text" class="form-control" id="City"  name="City"placeholder="City Name" required>
                               </div>
                               </div>
                              
                             <div class="form-group">
                             <label for="Address" class="col-sm-2 control-label">Address<font color="red" size="4px">*</font></label>
                               <div class="col-sm-10">
                              <input type="text-field" class="form-control" id="Address" name="Address" placeholder="Enter Address" required>
                              </div>
                              </div>
                              
                            <div class="form-group">
                            <label for="FilePhoto "class="col-sm-2 control-label">Photo input<font color="red" size="4px">*</font></label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" id="FilePhoto" name="Filephoto" required>
                            </div>
                            </div>
                              
                            <div class="form-group">
                            <label for="Dob" class="col-sm-2 control-label">DOB<font color="red" size="4px">*</font></label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="Dob" name="Dob" placeholder="Date Of Birth" required>
                             </div>
                             </div>
                              
                            <div class="form-group">
                             <label for="Age" class="col-sm-2 control-label">Age<font color="red" size="4px">*</font></label>
                             <div class="col-sm-10">
                               <input type="number"  size="6"min="18" max="55" value="21" class="form-control" id="Age" name="Age" placeholder="Currunt Age" required>
                               </div>
                             </div>
                              
                                <div class="form-group">
                              <label for="School" class="col-sm-2 control-label">10th Board<font color="red" size="4px">*</font></label>
                             <div class="col-sm-10">
                              <input type="text" class="form-control" id="School1" name="School1" placeholder=" 10th Board Name" required>
                                 </div>
                                  </div>
                              
                                 <div class="form-group">
                                <label for="Passyear1" class="col-sm-2 control-label">Passing Year<font color="red" size="4px">*</font></label>
                                 <div class="col-sm-10">
                                  <input type="text" input type="text" pattern="\d{4}" class="form-control" id="Passyear1"  name="Passyear1"placeholder="Example:2009"  required>
                                 </div>
                                </div>
                              
                              <div class="form-group">
                              <label for="Aggrigate1" class="col-sm-2 control-label">Aggrigate<font color="red" size="4px">*</font></label>
                               <div class="col-sm-10">
                             <input type="number" min="45"  max="100"class="form-control" id="Aggerigate1" name="Aggrigate1" placeholder=" 12th Aggrigate" required>
                              </div>
                              </div>
                              
                              <div class="form-group">
                               <label for="Sschool2" class="col-sm-2 control-label">12th Board<font color="red" size="4px">*</font></label>
                              <div class="col-sm-10">
                               <input type="text" class="form-control" id="Sschool2"name="School2" placeholder=" 12th Board Name" required>
                              </div>
                            </div>
                              
                              <div class="form-group">
                              <label for="Passyear2" class="col-sm-2 control-label">Passing Year<font color="red" size="4px">*</font></label>
                               <div class="col-sm-10">
                              <input type="text" input type="text" pattern="\d{4}"class="form-control" id="Passyear2" name="Passyear2" placeholder="Example:2011" required>
                              </div>
                             </div>
                              
                             <div class="form-group">
                             <label for="Aggrigate2" class="col-sm-2 control-label">Aggrigate<font color="red" size="4px">*</font></label>
                              <div class="col-sm-10">
                             <input type="number"  min="45" max="100"class="form-control" id="Aggrigate2"  name="Aggrigate2"placeholder=" 12th Aggrigate" required>
                             </div>
                             
                             </div> <div class="form-group">
                              <label for="School3" class="col-sm-2 control-label">Graguated University<font color="red" size="4px">*</font></label>
                             <div class="col-sm-10">
                              <input type="text" class="form-control" id="School3"name="School3" placeholder="University Name" required>
                             </div>
                              </div>
                              
                              <div class="form-group">
                                <label for="Passyear3" class="col-sm-2 control-label">Passing Year<font color="red" size="4px">*</font></label>
                              <div class="col-sm-10">
                             <input type="text" input type="text" pattern="\d{4}" class="form-control" id="Passyear3" name="Passyear3" placeholder="Example:2014" required>
                             </div>
                               </div>
                              
                             <div class="form-group">
                            <label for="Aggrigate3" class="col-sm-2 control-label">Aggrigate<font color="red" size="4px">*</font></label>
                            <div class="col-sm-10">
                            <input type="number" min="45" max="100" class="form-control" id="Aggirigate3" name="Aggrigate3" placeholder="Aggrigate" required>
                            </div>
                             </div>
                              
                     <div class="form-group">
                    <label for="Department" class="col-sm-2 control-label">Department<font color="red" size="4px">*</font></label>
                    <div class="col-sm-10">
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
                    
                    
                      <div class="form-group">
                   <label for="Stream" class="col-sm-2 control-label">Stream<font color="red" size="4px">*</font></label>
                   <div class="col-sm-10">
                   <select class="form-control" name="stream" required>
                        <option value=" "> Select Stream</option>
                        <option value="MCA">MCA</option>
                        <option value="M.TECH">M.TECH</option>
                        <option value="MBA">MBA</option>
                        <option value="B.TECH">B.TECH</option>
                   </select>
                  </div>
                  </div>
                              
                              <div class="form-group">
                           <label for="Cirriculus" class="col-sm-2 control-label">Extra Cirriculus</label>
                             <div class="col-sm-10">
                              <input type="text" class="form-control" id="Cirriculus"name="Cirriculus" placeholder="Cirriculus Name" required>
                           </div>
                          </div>
                              
                         <div class="form-group">
                         <label for="Activity" class="col-sm-2 control-label">Other Activity</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="Activity"name="Activity" placeholder="Example:Social Work" required>
                          </div>
                        </div>
                              
                       <div class="form-group">
                      <label for="Username" class="col-sm-2 control-label">user Name<font color="red" size="4px">*</font></label>
                       <div class="col-sm-10">
                       <input type="text" class="form-control" id="Username" name="Username" placeholder="User Name" pattern="{[a-z],[A-Z]}" required>
                        </div>
                       </div>
                              
                       <div class="form-group">
                         <label for="Spassword" class="col-sm-2 control-label">Password<font color="red" size="4px">*</font></label>
                       <div class="col-sm-10">
                         <input type="text" class="form-control" id="Spassword"name="Spassword" placeholder="Password" required>
                       </div>
                         </div>
                              
                        <div class="form-group">
                        <label for="Generateuid" class="col-sm-2 control-label">Generate User Id</label>
                       <div class="col-sm-10">
                       <input class="btn btn-default" name="submitforid" type="submit" value="Click Here" onclick="return checkyear()">
                        </div>
                         </div>
    
                       <div class="form-group">
                       <label for="Sid" class="col-sm-2 control-label">User Id</label>
                         <div class="col-sm-10">
                         <input type="text" class="form-control" id="Sid" disabled="disabled" name="Sid" value="<?php  echo $generateid2 ?>" placeholder="User Id">
                        </div>
                         </div>
                              
                       <div class="form-group">
                       <label for="RSubmit" class="col-sm-2 control-label">For Register</label>
                       <div class="col-sm-10">
                       <input class="btn btn-default" type="submit" value="Click Here" >
                       </div>
                      </div>
                              
                        <div class="form-group">
                       <label for="CSubmit" class="col-sm-2 control-label">For Cancel</label>
                       <div class="col-sm-10">
                       <input class="btn btn-default" type="submit" value="Click Here">
                      </div>
                      </div>
                              
                  </form>
             </div>     
             </div> 
             </div>
                 
             <div class="col-md-6">
             <div class="container-fluid" >
             <div class="jumbotron">
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
                  <script type="text/javascript" scr="studentregistration.js"></script>
</body>
</html>

