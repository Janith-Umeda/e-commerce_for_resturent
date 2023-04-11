<?php

    $env = parse_ini_file('.env');

    $host = $env['HOST'];
    $user = $env['USER'];
    $psw = $env['PSW'];
    $db = $env['DB'];

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$psw);
    }catch(Exception $e){
        die("DB Error. ".$e);
    }
?>