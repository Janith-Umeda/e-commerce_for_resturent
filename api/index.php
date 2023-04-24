<?php
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');

    $uri = explode("?",$_SERVER['REQUEST_URI'])[0];
    $uri_xp = explode("/",$uri);
   
    if(end($uri_xp) === ""){
        $i = strlen($uri)-1;
        if($i > 0){
            $uri = substr($uri,0,$i);
        }else{
            $uri = "/";
        }
    }

    $routes = [
        "/api/products"=>'products',
        "/e-commerce_for_resturent/api/products"=>"products"
    ];

    if (array_key_exists($uri,$routes)){
        include( "routes/".$routes[$uri].".php" );
    }else{
        header("Status-Code",500,true);
        // echo $uri;
    }
    
?>