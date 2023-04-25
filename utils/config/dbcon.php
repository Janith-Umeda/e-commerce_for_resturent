<?php

    $env = parse_ini_file('.env');

    $host = $env['HOST'];
    $user = $env['USER'];
    $psw = $env['PSW'];
    $db = $env['DB'];

    if($_SERVER['SERVER_NAME'] === 'resturent.softgalle.com'){
        $host = $env['SHOST'];
        $user = $env['SUSER'];
        $psw = $env['SPSW'];
        $db = $env['SDB'];
    }

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$psw);
    }catch(Exception $e){
        die("DB Error. ".$e);
    }
?>