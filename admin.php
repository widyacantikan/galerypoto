<?php
   //menghubungkan ke database
   $koneksi = mysqli_connect("localhost","root","","galeryfoto");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <a href="">login</a> | <a href="">logout</a>

    <H1>website galery poto</H1>
    <a href="">tambah data </a>
    <table border=1>
        <thead>   
            <tr>
        <th><h1>galery album</h1></th>
        <th>albumid</th>
        <th>nama album</th>
        <th>deskripsi</th>
        <th>tanggal dibuat</th>
</tr>
     <tr>
        <th><h1>galery foto</h1></th>
        <th>fotoid</th>
        <th>judulfoto</th>
        <th>deskripsi foto</th>
        <th>tanggal unggah</th>
        <th>lokasi file</th>
        <th>albumid</th>
        <th>userid</th>
</tr>
    <tr>
        <th><h1>komentar foto</h1></th>
        <th>komentarid</th>
        <th>fotoid</th>
        <th>userid</th>
        <th>isikomentar</th>
        <th>tanggal komentar</th>
</tr>
    <tr>
        <th><h1>galery user</h1></th>
        <th>userid</th>
        <th>usernama</th>
        <th>password</th>
        <th>email</th>
        <th>nama lengkap</th>
        <th>alamat</th>
</tr>
    <tr>
        <th><h1>like foto</h1></th>
        <th>likeid</th>
        <th>fotoid</th>
        <th>userid</th>
        <th>tanggallike</th>
</tr>

</thead>
<tbody>
  <?php 
  ?>
  <tr>

</td>

</tr>
<?php

?>
</tbody>
</table>
</body>
</html>