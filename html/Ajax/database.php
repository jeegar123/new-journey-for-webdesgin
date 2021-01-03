<?php
    $db =new mysqli("localhost","root","","test");

    if($db->connect_errno){
        echo    "System Fails to connect database";
        exit();
    }
    
