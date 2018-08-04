<?php include ('connection.php');
if(isset($_POST['submit'])){
    
    $news=$_POST['newss'];
    $sno=$_POST['sno'];
    echo $sno;
    $query1="UPDATE news SET lnews='$news' WHERE sn='$sno' ";
$result=mysqli_query($con,$query1);
if($result){
    header('location:anews.php');
}
}
?>