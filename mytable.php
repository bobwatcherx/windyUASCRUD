<br>
<form action="" method="GET">
<input type="text" placeholder="cari apa " name="cari">
<input type="submit"  name="send"value="cari">
</form>   
<?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];

}
?>   



                <table class="table table-striped" id="tableall">
                      <thead>
                        <tr>
                          <th> Gambar </th>
                          <th> nama </th>
                          <th> Kesukaan</th>
                          <th> Umur </th>
                          <th> Jobs </th>
                          <th>Aksi</th>
                        </tr> 
                      </thead>
                      <tbody>
                        <tr>
                        <?php 
                      include ("conn.php");
                      if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $data = mysqli_query($db,"select * from tblporto where nama like '%".$cari."%'");
                
                      }
                      else{
                        $data = mysqli_query($db,'select * from tblporto');
                      $halaman = 5; /* page halaman*/
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                
                $result    =mysqli_query($db,"SELECT * FROM tblporto");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                
                $tampilMas    =mysqli_query($db,"SELECT * FROM tblporto LIMIT $mulai, $halaman");
                $no    =$mulai+1;
                      }


                          while($row = mysqli_fetch_assoc($data)):
                        ?>
                          <td class="py-1">
                            <img src="images/<?php echo $row['img'] ?>" alt="<?php echo $row['nama'] ?>" 
                            style="width:80px;height:80px"/> </td>
                          <td> <?php echo $row["nama"]?> </td>
                         
                          <td> <?php echo $row["kesukaan"]?> </td>
                         <td> <?php echo $row["umur"]?> </td>
                         <td> <?php echo $row["jobs"]?> </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><a
                            style="color:white"
                            href="edit.php?edit=<?php echo $row['id']?>"
                            type="button" class="btn btn-primary"
                            >Edit</a> || 
                            <a
                            style="color:white"
                            href="hapus.php?delete=<?php echo $row['id']?>"
                            type="button" class="btn btn-danger"
                            >hapus</a></td>
                        </tr>
                      <?php endwhile; ?>
                      </tbody>
                    </table>
                    <div style="font-weight:bold;">
        Paging

        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <a href="index.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
        <?php
            }
        ?>
    </div>