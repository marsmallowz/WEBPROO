<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../coba/index.php?page=login&pesan=belum_login");
	}
	?>
<h4>
<br/>
    Data Planet
    <span class="float-right" > 
    <a href="index.php?page=tambah_planet" class= "btn btn-primary">Tambah data Planet </a>   
    <a href="logout.php" class= "btn btn-secondary">LOGOUT</a> 
    </span>
</h4>
<?php 
    $planet =get_planet();
?>
<table class="table table-bordered">
<tr>
    <th>Foto</th>
    <th>Nama</th>
    <th>Jarak</th>
    <th>Deskripsi</th>
    <th>Waktu Rotasi</th>
    <th>Aksi</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($planet))
{
    echo "<tr>
        <td><img src='images/".$row['foto_planet']."' width='100' height='100'></td>
        <td>".$row['nama']."</td>
        <td>".$row['jarak']."</td>
        <td>".$row['deskripsi']."</td>
        <td>".$row['waktu_rotasi']."</td>
        <td>
            <a href='index.php?page=edit_planet&id_planet=".$row['id_planet']."'>Edit</a> |
            <a href='index.php?page=hapus_planet&id_planet=".$row['id_planet']."'>Hapus</a>
        </td>
    </tr>";
}
?>
	<br/>

</table>