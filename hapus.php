<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    $(document).ready(function(){
$.confirm({
     columnClass: 'small', containerFluid: false,
    title: 'Kofirmasi Penghapusan!',
    theme:'material',
    content: 'Simple confirm!',
    buttons: {
        hapus: {
            btnClass: 'btn-red any-other-class', 
            action:function(){
                <?php 
                include ("conn.php");
                $id = $_GET['delete'];
                $result = "DELETE FROM tblporto WHERE id = $id";
                $hasil = mysqli_query($db,$result);
                ?>
            }
        },
       
    }
});
    })
</script>