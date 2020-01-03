<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 15%">
        <div class="col-md-4 mx-auto">
            <h3 class="text-center">LOGIN</h3>
            <form action="proses_login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control text-center" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control text-center" placeholder="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-block">login</button>               
                </div>
                <div>
                    <a href="register.php" class="btn btn-success btn-block mt-3">register</a>               
                </div>
                <div class="text-center mt-3" style="color: red">
                    <p>
                        <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan']=='logout') {
                                    echo 'Anda berhasil Logout';
                                } else if($_GET['pesan']=='belum_login'){
                                    echo 'Silahkan Login Terlebih dahulu';
                                }
                            }
                        ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>