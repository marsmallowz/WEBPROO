<?php
    function connect_to_db()
    {
            $conn =mysqli_connect('localhost',"root","root","tatasurya");
        
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

function select_db($sql)
{
    $conn = connect_to_db();
    return mysqli_query($conn,$sql);
}

function get_thread($id_planet){
    $sql = "SELECT id, nama, jarak, deskripsi, waktu_rotasi FROM `planet` WHERE id_planet = ".$id_planet;
    $data = do_query($sql);
    return $data;
}

function get_planet()
{
    $sql="select * from planet";
    return select_db($sql);
}

function get_planet_by_id($id_planet)
{
    $conn = connect_to_db();
    $sql = "select * from planet where id_planet=".$id_planet;
    $query= mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($query);
}

function get_planet_by_page($page)
{
    $conn = connect_to_db();
    $sql = "select * from planet where nama='$page'";
    $query= mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($query);
}

function hapus_planet($id_planet)
{
    $conn = connect_to_db();
    $sql = "delete from planet where id_planet=".$id_planet;
    mysqli_query($conn,$sql);
}

function update_data_planet($data)
{
    $conn = connect_to_db();
    $id_planet =$data['id_planet'];
    $nama =$data['nama'];
    $jarak =$data['jarak'];
    $deskripsi =$data['deskripsi'];
    $waktu_rotasi =$data['waktu_rotasi'];
    $sql = "update planet 
        set nama='$nama',jarak='$jarak',deskripsi='$deskripsi',waktu_rotasi='$waktu_rotasi'
        where id_planet ='$id_planet'"; 
    mysqli_query($conn,$sql);
}


function simpan_data_planet($data)
{
    $conn = connect_to_db();
    $id_planet =$data['id_planet'];
    $nama =$data['nama'];
    $jarak =$data['jarak'];
    $waktu_rotasi =$data['waktu_rotasi'];
    $deskripsi =$data['deskripsi'];
    $sql = "insert into planet values (".$id_planet.",'".$nama."','".$jarak."','".$deskripsi."','".$waktu_rotasi."')";
    mysqli_query($conn,$sql);
}

function redirect_to($page)
{
    echo"<script>
    window.location = 'index.php?page=$page'
    </script>";
}
?>