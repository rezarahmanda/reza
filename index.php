<html>
<head>
 <title>CRUD Data Siswa</title>
</head>
<body>
 <h2>CRUD Data Siswa</h2>
<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
<h3>Data Siswa</h3>
<table cellpadding="5" cellspacing="0" border="1">
 <tr bgcolor="#CCCCCC">
  <th>No.</th>
  <th>NIS</th>
  <th>Nama Lengkap</th>
  <th>Kelas</th>
  <th>Jurusan</th>
  <th>Opsi</th>
 </tr>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY NIS")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo"<td>$data[nis]</td>";
   echo'<td>'.$data['nama'].'</td>';
   echo'<td><center>'.$data['kelas'].'</center></td>';
   echo'<td><center>'.$data['jurusan'].'</center></td>';
   echo'<td><center><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
</table>
</body>
</html>