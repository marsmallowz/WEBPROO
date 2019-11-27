<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }
?>
<h5>Dashboard</h5>
<p>Welcome, <?php echo $_SESSION['username']; ?>!</p>