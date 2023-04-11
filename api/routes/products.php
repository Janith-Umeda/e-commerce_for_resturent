<?php
    require('../utils/config/dbcon.php');

    if(!isset($_POST['mode'])){
        echo 'Invalid Request. Please use POST Method for get products.';
        die();
    }

    if($_POST['mode'] === 'show'){

        $filter = $_POST['filter'];
        $category = $_POST['category'];
        
        $products = $conn->query("SELECT * FROM products WHERE cat = '$category' ORDER BY $filter DESC")->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($products);

    }elseif($_POST['mode'] === 'cart'){

        $response = [];

        $reqitems = json_decode($_POST['requests']);
        foreach($reqitems as $key => $row){
            $sql = "SELECT itemcode,name,upri,stock FROM products WHERE itemcode = '{$row->{'itemcode'}}'";
            $details = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);

            array_push($response,[
                "itemcode"=>$details['itemcode'],
                "name"=>$details['name'],
                "upri"=>$details['upri'],
                "count"=>$row->{'count'},
                "total"=>$details['upri'] * $row->{'count'},
                "stock"=>$details['stock']
            ]);
        }

        echo json_encode($response);

    }


?>
