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
            <h3 class="text-center">REGISTER</h3>
            <form action="proses_register.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nama_lengkap" class="form-control text-center" placeholder="Nama lengkap">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control text-center" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control text-center" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control text-center" placeholder="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-block">simpan</button>               
                </div>               
            </form>
        </div>
    </div>
</body>
</html>