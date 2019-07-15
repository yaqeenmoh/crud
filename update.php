<!DOCTYPE html>
<?php include 'db.php'; 
$id =(int)$_GET['id'];
$sql="select * from tasks2 where id='$id'";

$rows =$db->query($sql);
$row=$rows->fetch_assoc();

if(isset($_POST['edit'])){
$task=$_POST['task'];
$sql="update tasks2 SET name='$task' where id='$id'";
$db=query($sql);
header('location:index.php');


}





?>
<html>
<head>
<title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<div class="row" style="margin-top: 70px;">
<center><h1>Edit my To Do list</h1></center>

<div class="col-md-10 col-md-offset-1">
<br>
<br>
<hr>


    
   
         <form method="post" action="index.php">
         <div class="form-group">
         <label>Task Name:</label>
         <input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
         </div>
         <div>
         <input type="submit" value="edit" name="edit" class="btn btn-success">
         <a href="index.php" class="btn btn-warning">Back</a>
         </div>
         </form>
 






</div>
</div>
</div>

</body>

</html>