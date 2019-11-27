<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }


// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

$cek_login= proses_login($username,$password);

if($cek_login){
    $_SESSION['username'] = $username;
    $_SESSION['id_level'] = $cek_login['id'];
    $level = get_level_pengguna($cek_login['id']);
    if($level)
    {
        $_SESSION['id_level'] = $level['id_level'];
    }
    else
    {
        //redirect_to("logout");
    }
    
    
    redirect_to("dashboard");
}else{
    redirect_to("login_form&error=1");
}
 

?>