<?php 
include 'db.php'; 

if(isset($_POST['add']))
{
$task=$_POST['task'];
$sql="insert into tasks2 (name) values ('$task')";
$val=$db->query($sql);
if($val){

    header('location:index.php');
}
}


?>

