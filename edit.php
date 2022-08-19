<html>
<head>
 <title>CRUD Edit Data Siswa</title>
</head>
<body>
<h2>CRUD Edit Data Siswa</h2>
<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
<h3>Edit Data Siswa</h3>
<?php
include('koneksi.php');
$id=$_GET['id'];
$show=mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="edit_proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table cellpadding="3" cellspancing="0">
 <tr>
  <td>NIS</td>
  <td>:</td>
  <td><input type="text" name="nis" value="<?php echo $data['nis'];?>"required></td>
 </tr>
 <tr>
  <td>Nama Lengkap</td>
  <td>:</td>
  <td><input type="text" name="nama" size="30" value="<?php echo $data['nama'];?>"required></td>
 </tr>
 <tr>
  <td>Kelas</td>
  <td>:</td>
  <td>
   <select name="kelas" required>
    <option value="">Pilih Kelas</option>
    <option value="X" <?php if($data['kelas']=='X'){echo'selected';}?>>X</option>
    <option value="XI" <?php if($data['kelas']=='XI'){echo'selected';}?>>XI</option>
    <option value="XII" <?php if($data['kelas']=='XII'){echo'selected';}?>>XII</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>Jurusan</td>
  <td>:</td>
  <td>
   <select name="jurusan" required>
    <option value="">Pilih Jurusan</option>
    <option value="IPA" <?php if($data['jurusan']=='IPA'){echo'selected';}?>>Ilmu Pengetahuan Alam</option>
    <option value="IPS" <?php if($data['jurusan']=='IPS'){echo'selected';}?>>Ilmu Pengetahuan Sosial</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>&nbsp;</td>
  <td></td>
  <td><input type="submit" name="simpan" value="Simpan"></td>
 </tr>
</table>
</form>
</body>
</html>
