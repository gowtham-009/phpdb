<?php
include 'connect.php';
$sql="truncate table `datas`";
$result=mysqli_query($con,$sql);
if($result){
    header("location:display.php");
}
else{
    echo "some one error";
}
?>