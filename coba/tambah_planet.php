<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<h4>
    Tambah Data Planet
    <span class="float-right" > 
    <a href="index.php?page=pengaturan" class= "btn btn-liight">kembali</a>    
    </span>
    </h4>
    <br />
    <form action="index.php?page=simpan_planet" method="post">
    <div class="form-group">
    <div class="form-group">
    <label for="inputdefault">Id Planet</label>
    <input class="form-control col-2" type="text" name="id_planet"/>
  </div>
  </div>
   <div class="form-group">
    <label for="inputdefault">Nama</label>
    <input class="form-control col-2" type="text" name="nama"/>
  </div>
  <div class="form-group">
    <label for="inputdefault">Jarak</label>
    <input class="form-control col-2" type="text" name="jarak"/>
  </div>
  <div class="form-group">
    <label for="inputdefault">Waktu_rotasi</label>
    <input class="form-control col-2" type="text" name="waktu_rotasi"/>
  </div>
  <div class="form-group">
    <label for="inputlg">Deskripsi</label>
    <input class="form-control input-lg-4" type="text" name="deskripsi"/>
  </div>
  <table>
            <td></td>
            <td></td>
            <td><input type="submit" /></td>
    </table>
    </form>