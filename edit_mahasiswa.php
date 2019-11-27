<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<h4>
    Form Edit
    <span class="float-right" > 
    <a href="index.php?page=mahasiswa" class= "btn btn-liight">kembali</a>    
    </span>
    </h4>
    <br />
    <?php
        $nim =$_GET['nim'];
        $data= get_mahasiswa_by_nim($nim);
    ?>
    <form action="index.php?page=update_mahasiswa" method="post">
    <table>
    <input type="hidden" name="nim" value="<?php echo $nim; ?>"/>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"value="<?php echo $data['nama'];?>"/></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"value="<?php echo $data['alamat'];?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" /></td>
        </tr>
    </table>
    </form>