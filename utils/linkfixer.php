<?php

    function fixedlink(){

        function emtycheck($elm){
            return ($elm === "") ? 0 : 1;
        }

        $link = explode('/',$_SERVER["REQUEST_URI"]);
        $paths = array_filter($link,"emtycheck");
        $length = sizeof($paths) - ($_SERVER['HTTP_HOST'] === "localhost")? 1 : 0;
        $bp = "";

        if($length > 0 ){
            for($i=1; $i <= $length; $i++){
                $bp .= "../";
            }
            return [$bp,end($paths)];
        }else{
            return ["",end($paths)];
        }
    }

?>