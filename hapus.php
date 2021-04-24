<?php include 'koneksi.php';?>
<?php
    if(isset($_GET['id_mahasiswa'])){
        $id = $_GET['id_mahasiswa'];
        $query = mysqli_query($koneksi,"DELETE FROM tb_mahasiswa where id_mahasiswa=$id");
        if(!$query){
            echo "<script>alert('Hapus Data Gagal!')</script>;";
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
        }else{
            echo "<script>alert('Hapus Data Berhasil!')</script>;";
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
        }
    }
?>