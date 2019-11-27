<?php
if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
$nim =$_GET['nim'];
hapus_mahasiswa($nim);
redirect_to("mahasiswa");

?>