<?php
    session_start();
    require_once("aplikasi.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<?php
    if(isset($_SESSION['username']))
    {
        $allowed_pages =array();
        $menu =get_menu($_SESSION['id_level']);
        while($row = mysqli_fetch_array($menu))
        {
            echo "<a href='index.php?page=".$row['page']."'>".$row['nama_menu']."</a><br />";
            $allowed_pages[] = $row['page'];
        }
        //sudahlogin
        echo '<a href = "index.php?page=logout" class="btn btn-danger">logout<a/>';
    }
    else
    {
        //sudah logout
    }
    ?>
<body>
 

        <?php
            ini_set("display_error","1");
            define("DIINDEX", True);
            if(isset($_GET['page']))
            {
                $page =$_GET['page'];
            }
            else{
                $page="beranda";
            }
            

            $kecuali = [
                "login_form","proses_login"
            ];
            if(!in_array($page,$kecuali))
            {
                if(isset($_SESSION['username'])== false)
                {
                    redirect_to("login_form");
                }
            }
            $bypass_authorization = array(
                "logout"
            );
            if(isset($_SESSION['username']))
            {
                if($page == "login_form")
                {
                    redirect_to("dashboard");
                }
                //pegecekanauthorizion
                if(in_array($page,$allowed_pages)== false
                && in_array($page,$bypass_authorization)==false)
                {
                    die("not allowed!");
                }

            }

            require_once($page.".php");
        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>