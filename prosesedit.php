<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<?php 
include "conn.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$kesukaan = $_POST['kesukaan'];
$umur = $_POST['umur'];
$jobs = $_POST['jobs'];

$query = "UPDATE `tblporto` SET nama='$nama',kesukaan='$kesukaan',umur='$umur',jobs='$jobs' WHERE id=$id";

$jalan = mysqli_query($db,$query);
if($jalan){
	
	header("location:basic-table.php");
}
else{
	mysql_error();
	echo "gagal";
}
?>

