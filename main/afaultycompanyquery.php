


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
$query1="INSERT INTO faultycompany
SELECT * FROM companyregistration
WHERE  companyrid='$id'";
$result=mysqli_query($con,$query1);
if($result){
    header('location:aregisteredcompany.php');
}
}
?>

   
