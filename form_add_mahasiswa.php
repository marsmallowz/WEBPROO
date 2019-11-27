<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<h4>
    Data mahasiswa
    <span class="float-right" > 
    <a href="index.php?page=mahasiswa" class= "btn btn-liight">kembali</a>    
    </span>
    </h4>
    <br />
    <form action="index.php?page=simpan_mahasiswa" method="post">
    <table>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim"/></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"/></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"/></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" ></td>
        </tr>
    </table>
    </form>