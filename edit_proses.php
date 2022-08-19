<?php
if(isset($_POST['simpan'])){
 include('koneksi.php');
 $id=$_POST['id'];
 $nis=$_POST['nis'];
 $nama=$_POST['nama'];
 $kelas=$_POST['kelas'];
 $jurusan=$_POST['jurusan'];
 $update=mysqli_query($koneksi,"UPDATE siswa SET nis='$nis',nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id='$id'")or die(mysql_error());
 if($update){
  echo'Data berhasil disimpan! ';
  echo'<a href="index.php?id='.$id.'">Kembali</a>';
 }else{
  echo'Gagal menyimpan data! ';
  echo'<a href="index.php?id='.$id.'">Kembali</a>';
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>