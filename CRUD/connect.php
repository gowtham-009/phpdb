<?php
$con=new mysqli('localhost','root','','phpdb');
if(!$con){
    die(mysqli_error($con));
}
?>