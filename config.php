<?php
    $conx = mysqli_connect("localhost","root","","alimenta");
    if(!$conx){
        echo 'Connection Failed';
    }
