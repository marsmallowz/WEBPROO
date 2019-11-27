<?php
    function connect_to_db()
    {
            $conn =mysqli_connect('localhost',"root","","coba");
        
        if($conn == false)
        {
                echo mysqli_connect_error();
                die();
        }
        else
        {
            return $conn;
        }
    }

function proses_login($username,$password){
    $conn =connect_to_db();
    $sql = "SELECT * FROM pengguna WHERE username='$username' 
    AND password='".md5($password)."'";
    $query = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($query);
    // $num = mysqli_num_rows($query);
    // return ($num > 0);
    //return mysqli_fetch_row($query);
    if($num>0)
    {
        return mysqli_fetch_array($query);
    }
    else
    {
        return false;
    }
}

function get_level_pengguna($id){
    $conn =connect_to_db();
    $sql = "SELECT * FROM level_pengguna WHERE id_pengguna=$id LIMIT 1"; 
    $query = mysqli_query($conn,$sql);
    //return mysqli_fetch_row($query);
    $num = mysqli_num_rows($query);
    if($num > 0)
    {
        return mysqli_fetch_array($query);
    }
    else
    {
        return false;
        
    }

}

function get_menu($id_level){
    $conn =connect_to_db();
    $sql = "SELECT b.* FROM level_menu as a JOIN menu as b ON a.id_menu=b.id WHERE a.id_level=$id_level"; 
    $query = mysqli_query($conn,$sql);
    return $query;
}


function get_rekap_asal(){
    $conn =connect_to_db();
    $sql = "SELECT COUNT(*) as num,alamat FROM mahasiswa GROUP BY alamat";
    $query = mysqli_query($conn,$sql);
    $data = [];
    while($row = mysqli_fetch_array($query)) 
    {
        $data[$row['alamat']] = $row['num'];
    }
    $total = array_sum($data);
    foreach($data as $alamat => $num)
    {
        $data[$alamat]= round($num*100/$total,2);
    }
    return $data;
}
function select_db($sql)
{
    $conn = connect_to_db();
    return mysqli_query($conn,$sql);
}
function get_mahasiswa()
{
    $sql="select * from mahasiswa";
    return select_db($sql);
}

function get_mahasiswa_by_nim($nim)
{
    $conn = connect_to_db();
    $sql = "select * from mahasiswa where nim=".$nim;
    $query= mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($query);
}

function hapus_mahasiswa($nim)
{
    $conn = connect_to_db();
    $sql = "delete from mahasiswa where nim=".$nim;
    mysqli_query($conn,$sql);
}

function update_data_mahasiswa($data)
{
    $conn = connect_to_db();
    $nim =$data['nim'];
    $nama =$data['nama'];
    $alamat =$data['alamat'];
    $sql = "update mahasiswa 
        set nama='$nama',alamat='$alamat'
        where nim ='$nim'"; 
    mysqli_query($conn,$sql);
}

function simpan_data_mahasiswa($data)
{
    $conn = connect_to_db();
    $nim =$data['nim'];
    $nama =$data['nama'];
    $alamat =$data['alamat'];
    $sql = "insert into mahasiswa values (".$nim.",'".$nama."','".$alamat."')";
    mysqli_query($conn,$sql);
}

function redirect_to($page)
{
    echo"<script>
    window.location = 'index.php?page=$page'
    </script>";
}
?>