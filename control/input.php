<?php 
include 'config.php';
 if (isset($_POST["pesan"])) {  
//variabel yang akan di input
$nama_pelanggan=$_POST['nama_pelanggan'];
$nomer_meja=$_POST['nomer_meja'];
$makanan=$_POST['makanan'];
$minuman=$_POST['minuman'];
               
//input database
$result = mysqli_query($koneksi, "INSERT INTO pemesanan (nama_pelanggan,nomer_meja,makanan,minuman) VALUES('$nama_pelanggan','$nomer_meja','$makanan','$minuman')"); 


//pesan jika berhasil atau tidak

if (!$result){
            echo "<script>alert('Gagal!');history.go(-1);</script>";
            }else{
             echo "<script>alert('Pesanan Berhasil Dibuat Harap tunggu!');window.location='../view/pemesanan.php';</script>";
            }
}

if (isset($_POST["input_plg"])) {  
    //variabel yang akan di input
    $pesan_pelanggan=$_POST['pesan_pelanggan'];
                   
    //input database
    $result = mysqli_query($koneksi, "INSERT INTO testimoni (pesan_pelanggan) VALUES('$pesan_pelanggan')"); 
    
    
    //pesan jika berhasil atau tidak
    
    if (!$result){
                echo "<script>alert('Gagal!');history.go(-1);</script>";
                }else{
                 echo "<script>alert('Berhasil DiInput!');window.location='../view/pemesanan.php';</script>";
    
                }
    }
?>