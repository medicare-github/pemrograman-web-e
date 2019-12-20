<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .box{
            margin-top: 20%;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="col-md-4 mx-auto">
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
            </form>
        </div>
    </div>
</body>

</html>