<?php include 'koneksi.php'?>
<?php
    if(isset($_GET['id_mahasiswa'])){
        $id = $_GET['id_mahasiswa'];
        $sql = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa=$id";
        $query = mysqli_query($koneksi,$sql);
        $record = mysqli_fetch_array($query,MYSQLI_BOTH);
        $nama = $record['nama'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <!-- Content here -->
    <h2>UBAH CRUD Bootstrap</h2><br>
    <form action="proses-edit.php" method="post">
        <input type="hidden" name="id" value="<?=$id;?>">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
                <input type="text" name="nama" value="<?=$nama;?>" class="form-control" autofocus="autofocus">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                <button type="submit" name="ubah" class="btn btn-sm btn-warning">Ubah</button>
                <a href="index.php" class="btn btn-sm btn-success">Kembali</a>
                </span>
            </div>
        </div>
    </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</html>