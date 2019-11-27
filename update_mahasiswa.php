<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }

//
$data =array(
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
);
update_data_mahasiswa($data);
redirect_to("mahasiswa");

?>