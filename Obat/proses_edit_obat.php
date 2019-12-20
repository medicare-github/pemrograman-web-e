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

$query = "UPDATE tbl_obat SET nama_obat='$nm_obat', jenis_obat='$js_obat', harga_beli='$beli', harga_jual='$jual', expired='$expr', poto='$target_file' WHERE kode='$kd_obat'";
if (mysqli_query($con, $query)) {
    ?>
    <script>
        alert('data berhasil di ubah');
        document.location = 'DataObat.php';
    </script>
<?php

} else {
    ?>
    <script>
        alert('Gagal di ubah');
        document.location = 'DataObat.php';
    </script>
<?php
}
