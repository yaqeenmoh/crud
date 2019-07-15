<!DOCTYPE html>
<?php include 'db.php';
$page=(isset($GET['page'])?$GET['page']:1) ; // if in the url their is a page get the page number else make it 1

$sql="select * from tasks2";

$rows =$db->query($sql);










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
<center><h1>To Do list</h1></center>

<div class="col-md-10 col-md-offset-1">
<br>
<br>
<button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">ADD TASK</button>
<input type=button onclick="window.print()"  class="btn btn-light fight" value='Print '>


<hr>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">ADD TASK</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <form method="post" action="insert.php">
         <div class="form-group">
         <label>Task Name:</label>
         <input type="text" required name="task" class="form-control">
         </div>
         <div>
         <input type="submit" value="add" name="add" class="btn btn-success">
         </div>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>





<table class="table">
  <thead>
    <tr>
      <th scope="col">ID.</th>
      <th scope="col">Task</th>
     
    </tr>
  </thead>
  <tbody>
    <tr> 
    <?php while($row = $rows->fetch_assoc()):?>
   
      <th scope="row"><?php echo $row['id']?></th>
      <td class="col-md-2"><?php echo $row['name']?></td>
      <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>


     
    </tr>
    <?php endwhile ?>
    
  </tbody>
</table>
</div>
</div>
</div>

</body>

</html>