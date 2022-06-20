<?php
$c = mysqli_connect('localhost:8889','root','root','kasir');

$id = $_GET["id"];
    
$query = "DELETE FROM menu WHERE id_menu=$id; ";
$hasil_query = mysqli_query($c, $query);


if(!$hasil_query) {
  die ("Gagal menghapus data: ".mysqli_errno($c).
   " - ".mysqli_error($c));
} else {
  echo "<script>('Data berhasil dihapalertus.');window.location='menu.php';</script>";
}
?>


