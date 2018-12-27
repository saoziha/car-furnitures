<?php
    function devBranding(){
        echo "Created by ezDevDanang&trade;";
    }

    function getMenu(){
        return Mirana_Protocol::wsCall("viewdata/fetch/menu");
    }

    function getProductList(){
        return Mirana_Protocol::wsCall("viewdata/fetch/product");
    }

    function hit($prodId){
        if (is_numeric($prodId)){
            Mirana_Protocol::wsCall("viewdata/fetch/hit",
                ["prodId"=>$prodId,
                "auth"=>"authentication@noithathuynhgiaphat.com--BEIOPRWCGMFETUQWERTUJNF"]
            );
        } else {
            ;
        }
        return NULL;
    }

    function getProduct(){
        $retVal = NULL;

        $t = Mirana_Routing::parseGetRequest();
        $t = isset($t['id'])?$t['id']:NULL;
        if (is_numeric($t)){
            $id = intval($t);
            $r = Mirana_Protocol::wsCall("viewdata/fetch/singleProduct", ['prodId'=>$id]);
            $retVal = $r;
            if (!isset($retVal['id']) || $retVal['id']===NULL) throw new \Exception("Product not found", 404);
        } else {
            ;
        }

        return $retVal;
    }

    function printProdDetail($key="", $product = NULL){
        $retVal = NULL;
        if (is_string($key) && $product!==NULL && isset($product[$key])) {
            $retVal = strval($product[$key]);
        } else {
            $retVal = "";
        }
        echo $retVal;
        return NULL;
    }

    function printProdURL($product = NULL){
        $retVal = NULL;
        if (is_array($product) && isset($product['id'])){
            $id = $product['id'];
            $retVal = "product?id=$id";
        } else {
            $retVal = "";
        }
        echo "\"$retVal\"";
        return NULL;
    }

    function isPrivatePrice($product){
        return isset($product['is_privateprice'])&&intval($product['is_privateprice'])==1;
    }

    function getRandomProduct($num = 4){
        $retVal = NULL;
        if (is_numeric($num)){
            $num = intval($num);
            $prodArr = Mirana_Protocol::wsCall("viewdata/fetch/product");
            if ($num > count($prodArr)) $num = count($prodArr);
            shuffle($prodArr);
            $retVal = array_slice($prodArr, 0, $num);
        } else {
            ;
        }
        return $retVal;
    }

    function getRelatedProduct($prodId){
        $retVal = NULL;
        if (is_numeric($prodId)){
            $prodId = intval($prodId);
            $prodArr = Mirana_Protocol::wsCall("viewdata/fetch/relatedProduct",["prodId" => $prodId]);
            $retVal = $prodArr;
        } else {
            ;
        }
        return $retVal;
    }

    function getLatestProduct($num = 20){
        $retVal = NULL;
        if (is_numeric($num)){
            $num = intval($num);
            $prodArr = Mirana_Protocol::wsCall("viewdata/fetch/latestProduct");
            if ($num > count($prodArr)) $num = count($prodArr);
            $retVal = array_slice($prodArr, 0, $num);
        } else {
            ;
        }
        return $retVal;
    }

    function getMostViewProduct($num = 20){
        $retVal = NULL;
        if (is_numeric($num)){
            $num = intval($num);
            $prodArr = Mirana_Protocol::wsCall("viewdata/fetch/mostHit");
            if ($num > count($prodArr)) $num = count($prodArr);
            $retVal = array_slice($prodArr, 0, $num);
        } else {
            ;
        }
        return $retVal;
    }

    function getHotProduct(){
        return Mirana_Protocol::wsCall("viewdata/fetch/hotProduct");
    }
?>
