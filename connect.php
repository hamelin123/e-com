<?php
    
    $conn = new mysqli('localhost','root','123456789','e-comproject');
    
    $conn->set_charset('utf8');
    if ($conn->connect_errno){
        echo "Connect Error :".$conn->connect_error;
        exit();
    }
    date_default_timezone_set('Asia/Bangkok');
    ?> 