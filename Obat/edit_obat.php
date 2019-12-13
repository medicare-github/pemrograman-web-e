<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>input data obat</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Apotek-BG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="DataObat.php">Data Obat</a>
                    <a class="nav-item nav-link active" href="inputdataobat.php">Form input Obat</a>
                    <a class="nav-item nav-link" href="card.html">Data Apoteker</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h4 class="text-center pt-2">Edit Data Obat</h4>
        <div class="col-6 m-auto">
            <?php 
                include '../connection/connection.php';
                $kode=$_GET['kode'];
                $query="SELECT * FROM tbl_obat WHERE kode='$kode'";
                $result=mysqli_query($con,$query);
                while ($data=mysqli_fetch_object($result)):
                
                
            ?>
            <form action="proses_edit_obat.php" method="POST" >
                <div class="form-group">
                    <label for="">Kode Obat</label>
                    <input type="text" name="kode_obat" value="<?= $data->kode ?>" readonly class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Obat</label>
                    <input type="text" name="nama_obat" value="<?= $data->nama_obat ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">jenis obat</label>
                    <select name="jenis_obat" class="form-control">
                        <option value="tablet">Tablet</option>
                        <option value="kapsul">Kapsul</option>
                        <option value="sirup">Sirup</option>
                        <option value="bubuk">Bubuk</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">harga beli</label>
                    <input type="number" name="harga_beli" value="<?= $data->harga_beli ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">harga jual</label>
                    <input type="number" name="harga_jual" value="<?= $data->harga_jual ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Expired</label>
                    <input type="date" name="expired" value="<?= $data->expired ?>" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>

            </form>
            <?php 
                endwhile;
            ?>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>