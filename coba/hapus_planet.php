<?php
if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
$id_planet =$_GET['id_planet'];
hapus_planet($id_planet);
redirect_to("pengaturan");

?>