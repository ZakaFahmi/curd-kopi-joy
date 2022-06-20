<?php
session_start();
//koneksi
$c = mysqli_connect('localhost:8889','root','root','kasir');


//login
if(isset($_POST['login'])){
    //inisiet variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($c,"SELECT * FROM karyawan where username='$username' and password='$password'");
    $hitung = mysqli_num_rows($check);

    if($hitung>0){
        //jika datanya di temukan berhasil login

        $_SESSION['login'] = 'true';
        header('location:index.php');

    }else {
        //datanya tidak di temukan gagal login

        echo '
        <script>alert("user name atau password salah");
        window.location.href="login.php"
        </script>
        ';
    }

    
}

//tambah menu
if(isset($_POST['tambahmenu'])){
    $nama_menu = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    $tambah = mysqli_query($c,"INSERT INTO menu (nama_menu,deskripsi,harga,stock) VALUES ('$nama_menu','$deskripsi','$harga','$stock') ");

    if($tambah){
        header('location:menu.php');
    }else{
        echo '
        <script>alert("gagal menambahkan menu baru");
        window.location.href="menu.php"
        </script>
        ';
    }
}

//tambah pelanggan
if(isset($_POST['pelanggan'])){
    $nama = $_POST['nama'];
    $pilihan = $_POST['pilihan'];
    $harga = $_POST['hargaM'];
   

    $tambah = mysqli_query($c,"INSERT INTO pelanggan (nama, pilihan, hargaM) VALUES ('$nama','$pilihan',$harga); ");

}

?>