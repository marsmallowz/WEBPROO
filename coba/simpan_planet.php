<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }

//
$data =array(
    'id_planet' => $_POST['id_planet'],
    'nama' => $_POST['nama'],
    'jarak' => $_POST['jarak'],
    'deskripsi' => $_POST['deskripsi'],
    'waktu_rotasi' => $_POST['waktu_rotasi'],
);
simpan_data_planet($data);
redirect_to("pengaturan");

?>