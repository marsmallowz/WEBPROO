<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>PLANET</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Planet ?</a></li>
            <li><a href="index.php?page=earth"><i ></i>Earth</a></li>
            <li><a href="index.php?page=mars"><i ></i>Mars</a></li>
            <li><a href="index.php?page=jupiter"><i ></i>Jupiter</a></li>
            <li><a href="index.php?page=uranus"><i ></i>Uranus</a></li>
            <li><a href="index.php?page=saturnus"><i ></i>Saturnus</a></li>
            <li><a href="index.php?page=merkurius"><i ></i>Merkurius</a></li>
            <li><a href="index.php?page=neptunus"><i ></i>Neptunus</a></li>
            <li><a href="index.php?page=pie"><i ></i>Chart</a></li>
            <li><a href="index.php?page=pengaturan"><i ></i>Pengaturan</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
    <?php
            define("DIINDEX", True);
            if(isset($_GET['page']))
            {
                $page =$_GET['page'];
            }
            else{
                $page="planet";
            }

            require_once("aplikasi.php");
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
    </div>
</div>

</body>
</html>