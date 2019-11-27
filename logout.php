<?php
    if(defined("DIINDEX")==false)
    {
        die("Login dulu gan");
    }

    session_unset();
    redirect_to("login_form");