<?php include 'koneksi.php'?>
<?php
    if(isset($_POST['ubah'])){
        $id_mahasiswa = $_POST['id'];
        $nama = $_POST['nama'];
        $sql = "UPDATE tb_mahasiswa SET nama='$nama' where id_mahasiswa='$id_mahasiswa'";
        $query = mysqli_query($koneksi,$sql);
        if(!$query){
            echo "<script>alert('Ubah Data Gagal!')</script>";
            echo '<meta http-equiv="refresh" content="1; url=index.php">';
        }else{
            echo "<script>alert('Ubah Data Berhasil!')</script>";
            echo '<meta http-equiv="refresh" content="1; url=index.php">';
        }
    }
?>