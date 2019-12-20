<?php
include "connection/connection.php";
$user	= ($_POST['username']);
$pass	= ($_POST['password']);

// $encryptPass=md5($pass);
$encryptPass=sha1($pass);

$data = mysqli_query($con,"SELECT * FROM users WHERE username='$user' AND password='$encryptPass'");

$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['status'] = "login";
    ?>
       <script>
           alert('berhasil login');
           document.location='home.php'
       </script> 
    <?php
}else{
    ?>
        <script>
           alert('gagal login');
           document.location='index.php'
       </script> 
    <?php
}
?>