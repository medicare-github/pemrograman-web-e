<?php
include '../connection/connection.php';
$kode=$_GET['kode'];
$query="DELETE FROM tbl_obat WHERE kode='$kode'";
if (mysqli_query($con,$query)) {
    
    # code...
    ?>
    <script>
        alert('data berhasil di hapus');
        document.location='DataObat.php';
    </script>
    <?php

}else{
    ?>
    <script>
        alert('Gagal di hapus');
        document.location='DataObat.php';
    </script>
    <?php 
}