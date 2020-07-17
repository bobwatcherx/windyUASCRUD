<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<form method="POST" action="basic-table.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">nama </label>
    <input  name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">kesukaan</label>
    <input  name="kesukaan" type="text" class="form-control" id="exampleInputPassword1" placeholder="harga beli">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">umur</label>
    <input name="umur"  type="text" class="form-control" id="exampleInputPassword1" placeholder="harga jual">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">jobs</label>
    <input name="jobs"  type="text" value="" class="form-control" id="exampleInputPassword1" placeholder="stok">
  </div>
  <div class="form-check">
  
</div>
   <input type="file" name="image">
 <input type="submit" value="simpan" name="upload">
</form>
<script>
  function hainama(){
Swal.fire(
  'data berhasil di tambahkan',
  'Refresh browser',
  'success'
)
}
</script>
<?php
include ("conn.php");
  if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
 

    $target = "images/".basename($image);

    $path = $_FILES['file']['tmp_name'];
 $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $kesukaan = mysqli_real_escape_string($db, $_POST['kesukaan']);
    $umur = mysqli_real_escape_string($db, $_POST['umur']);
    $jobs = mysqli_real_escape_string($db, $_POST['jobs']);
   

    $sql = "INSERT INTO tblporto (id,nama,kesukaan,umur,jobs,img) VALUES (NULL,'$nama','$kesukaan','$umur','$jobs','$image')";
 $success =  mysqli_query($db, $sql);
      if($success){
        echo "<script>hainama();</script>";
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "berhasil upload";
    }else{
      $msg = "gagal uplot";
    }
  }
?>
<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>