<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.20/datatables.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Apotek-BG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="DataObat.php">Data Obat</a>
                    <a class="nav-item nav-link" href="inputdataobat.php">Form input Obat</a>
                    <a class="nav-item nav-link" href="card.html">Data Apoteker</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h4 class="text-center pt-2">Data Obat Apotek Bumigora</h4>
        <a href="inputdataobat.php" class="text-right">
            <button class="btn btn-success mb-1"> Tambah Obat</button>
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Input data obat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form action="proses_input.html">
                            <div class="form-group">
                                <label for="">Nama Obat</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">jenis obat</label>
                                <select name="" class="form-control">
                                    <option value="tablet">Tablet</option>
                                    <option value="kapsul">Kapsul</option>
                                    <option value="sirup">Sirup</option>
                                    <option value="bubuk">Bubuk</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">harga beli</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">harga jual</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Expired</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover " id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Obat</th>
                    <th>jenis obat</th>
                    <th>harga beli</th>
                    <th>harga jual</th>
                    <th>expired</th>
                    <th>images</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                   include '../connection/connection.php';
                   $query="SELECT * FROM tbl_obat JOIN tbl_jenis_obat 
                   ON tbl_obat.id_jenis_obat=tbl_jenis_obat.id_jenis_obat";
                    $result=mysqli_query($con,$query);
                    $no=1;
                    while ($data=mysqli_fetch_object($result)) :                   
                ?>
                <tr>
                    <td>
                     <?= $no ?>
                    </td>
                    <td><?php echo $data->nama_obat ?></td>
                    <td> <?= $data->nama_jenis_obat ?> </td>
                    <td> <?= $data->harga_beli ?> </td>
                    <td> <?= $data->harga_jual ?> </td>
                    <td> <?= $data->expired ?> </td>
                    <td>
                        <img src="<?= $data->poto ?>" width="100px" height="100px">
                    </td>
                    <td>
                        <a href="edit_obat.php?kode=<?= $data->kode ?>" class="btn btn-warning">edit</a>
                        <a href="delete_obat.php?kode=<?= $data->kode ?>" onclick="return confirm('anda yakin ingin hapus ?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php 
                $no++;
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
    <a href="inputdataobat.html">
        <!-- <button class="btn btn-primary">Input Data Obat</button> -->
    </a>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            searching: false,
            lengthMenu: [
                [6, 12, 24, -1],
                [6, 12, 24, "all"]
            ]
        })
    </script>


</body>

</html>