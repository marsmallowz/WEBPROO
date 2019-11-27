<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<h4>
    Data mahasiswa
    <span class="float-right" > 
    <a href="index.php?page=form_add_mahasiswa" class= "btn btn-primary">Tambah data Mahasiswa </a>    
    </span>
    </h4>
<?php 
    $mahasiswa =get_mahasiswa();
?>
<table class="table table-bordered">
<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($mahasiswa))
{
    echo "<tr>
        <td>".$row['nim']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['alamat']."</td>
        <td>
            <a href='index.php?page=edit_mahasiswa&nim=".$row['nim']."'>Edit</a> |
            <a href='index.php?page=hapus_mahasiswa&nim=".$row['nim']."'>Hapus</a>
        </td>
    </tr>";
}
?>
</table>