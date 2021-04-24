<!-- <?php include 'koneksi.php';?> -->
<?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $sql = "INSERT INTO tb_mahasiswa (id_mahasiswa,nama) VALUES ('','$nama')";
        $query = mysqli_query($koneksi,$sql);
        if(!$query){
            echo "<script>alert('Simpan Data Gagal!')</script>";
        }else{
            echo "<script>alert('Simpan Data Berhasil!')</script>";
            echo '<meta http-equiv="refresh" content="1; url=index.php">';
        }
    }
?>