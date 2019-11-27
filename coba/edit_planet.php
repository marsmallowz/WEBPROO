<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<h4>
    Form Edit
    <span class="float-right" > 
    <a href="index.php?page=pengaturan" class= "btn btn-liight">kembali</a>    
    </span>
    </h4>
    <br />
    <?php
        $id_planet =$_GET['id_planet'];
        $data= get_planet_by_id($id_planet);
    ?>
    <form action="index.php?page=update_planet" method="post">
    <div class="form-group">
    <input class="form-control input-sm" type="hidden" name="id_planet" value="<?php echo $id_planet ?>"/>
    </div>
   <div class="form-group">
    <label for="inputdefault">Nama</label>
    <input class="form-control col-2" type="text" name="nama"value="<?php echo $data['nama'];?>"/>
  </div>
  </div>
   <div class="form-group">
    <label for="inputdefault">Nama</label>
    <input class="form-control col-2" type="text" name="nama"value="<?php echo $data['nama'];?>"/>
  </div>
  <div class="form-group">
    <label for="inputdefault">Jarak</label>
    <input class="form-control col-2" type="text" name="jarak"value="<?php echo $data['jarak'];?>"/>
  </div>
  <div class="form-group">
    <label for="inputdefault">Waktu_rotasi</label>
    <input class="form-control col-2" type="text" name="waktu_rotasi"value="<?php echo $data['waktu_rotasi'];?>"/>
  </div>
  <div class="form-group">
    <label for="inputlg">Deskripsi</label>
    <input class="form-control input-lg-4" rowspan="7" type="text" name="deskripsi"value="<?php echo $data['deskripsi'];?>"/>
  </div>
  <table>
            <td></td>
            <td></td>
            <td><input type="submit" /></td>
    </table>
    
    </form>