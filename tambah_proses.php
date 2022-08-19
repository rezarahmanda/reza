<?php
if(isset($_POST['tambah'])){
 include('koneksi.php');
 $nis=$_POST['nis'];
 $nama=$_POST['nama'];
 $kelas=$_POST['kelas'];
 $jurusan=$_POST['jurusan'];
 $input=mysqli_query($koneksi,"INSERT INTO siswa VALUES(NULL,'$nis','$nama','$kelas','$jurusan')")or
 die(mysqli_error());
 if($input){
  echo'Data berhasil ditambahkan! ';
  echo'<a href="index.php">Kembali</a>';
 }else{
  echo'Gagal menambahkan data! ';
  echo'<a href="index.php">Kembali</a>';
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>