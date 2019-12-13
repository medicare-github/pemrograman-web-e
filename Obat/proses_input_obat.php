<?php
// var_dump ($_POST);
include '../connection/connection.php';
$kd_obat = $_POST['kode_obat'];
$nm_obat = $_POST['nama_obat'];
$js_obat = $_POST['jenis_obat'];
$beli = $_POST['harga_beli'];
$jual = $_POST['harga_jual'];
$expr = $_POST['expired'];
//upload
$nama_gambar=$_FILES['poto']['name'];
$tmp=$_FILES['poto']['tmp_name'];
$folder="images_obat/";
$target_file=$folder.$nama_gambar;
$proses=move_uploaded_file($tmp,$target_file);

$query = "INSERT INTO tbl_obat (kode,nama_obat,jenis_obat,harga_beli,harga_jual,gambar,expired) VALUES ('$kd_obat','$nm_obat','$js_obat','$beli','$jual','$target_file','$expr')";
if (mysqli_query($con, $query)) {

    # code...
    ?>
    <script>
        alert('data berhasil di simpan');
        document.location = 'DataObat.php';
    </script>
<?php

} else {
    ?>
    <!-- <script>
        alert('Gagal di simpan');
        document.location = 'inputdataobat.php';
    </script> -->
<?php
}
