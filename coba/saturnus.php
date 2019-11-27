<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<div class="header">Welcome!! to the <?php echo $page ?>.</div>  
<?php
        $page =$_GET['page'];
        $data= get_planet_by_page($page);
?>
        <div class="info">
          <div><?php echo $data['deskripsi'];?> Yang Memiliki jarak ke matahari sekitar <?php echo $data['jarak'];?> Miliar KM dan mempunyai waktu sebesar <?php echo $data['waktu_rotasi'];?> untuk sekali rotasi </div>
      </div>
