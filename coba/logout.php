<?php
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:../coba/index.php?page=login&pesan=logout");
?>