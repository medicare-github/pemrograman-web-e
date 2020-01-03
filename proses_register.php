<?php
include 'connection/connection.php';

$nm_lengkap=$_POST['nama_lengkap'];
$email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['password'];

$encryPass=sha1($pass);

$query="INSERT INTO tbl_user (id_user,nama_lengkap,email,username,password) 
VALUES (Null, '$nm_lengkap','$email','$username','$encryPass')";

if (mysqli_query($con,$query)) {
    ?>
        <script>
            alert('berhasil register');
            document.location='index.php';
        </script>
    <?php
}else {
    ?>
        <script>
            alert('gagal register');
            document.location='register.php';
        </script>
    <?php
}