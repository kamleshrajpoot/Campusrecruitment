


<?php include ('connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:adminlogin.php');
}
if(isset($_GET['sid'])){
$id=$_GET['sid'];
$query1="DELETE FROM studentvalid
WHERE  registrationno='$id'";
$result=mysqli_query($con,$query1);
if($result){
    header('location:avalidestudent.php');
}
}
?>

   
