<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<?php
include ("conn.php");
$id = $_GET['edit'];
$query = "select * from tblporto WHERE id = $id";
$jalan = mysqli_query($db,$query);
while($row = mysqli_fetch_array($jalan)):
?>
<h3>EDIT FORM Portfolio</h3>
<img src="https://ppmschool.ac.id/id/wp-content/uploads/2016/01/tutor-8.jpg" 
style="width:280px"alt="">
<div class="container">
	<form action="prosesedit.php" method="POST">
	<input type="hidden" name="id" class="form-control"value="<?php echo $row['id'] ?>">
		 <label for="exampleInputEmail1">nama</label>

	<input type="text"  name="nama" class="form-control"value="<?php echo $row['nama'] ?>">
	 <label for="exampleInputEmail1">Kesukaan</label>
<input type="text"  name="kesukaan"class="form-control"value="<?php echo $row['kesukaan'] ?>">
	 <label for="exampleInputEmail1">umur</label>
<input type="text"  name="umur" class="form-control" value="<?php echo $row['umur'] ?>">
 <label for="exampleInputEmail1">jobs</label>
<input type="text" name="jobs" class="form-control" value="<?php echo $row['jobs'] ?>">

  <br>
  <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
 <?php endwhile; ?>
