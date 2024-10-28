<?php 

require "config.php";

function dbConnect(){
    $mysqli=new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
    if($mysqli->connect_error !=0){
        return FALSE;
    }else{
        return $mysqli;
    }
}


function getCategories(){
    $mysqli=dbConnect();

    $result=$mysqli->query("SELECT DISTINCT category FROM products");
    while($row=$result->fetch_assoc()){
        $categories[] = $row;

    }

    return $categories;

}

function getHomePageProducts($int){
    $mysqli=dbConnect();
    $result=$mysqli->query("SELECT*FROM products ORDER BY rand() LIMIT $int");
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    return $data;


}


?>