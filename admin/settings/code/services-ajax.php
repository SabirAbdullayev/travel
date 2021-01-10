<?php

require_once '../db.php';

$db = new DBConnection;

require_once '../class/general.php';
require_once '../class/crud.php';

$General =  new General;
$CRUD = new CRUD;



if(isset($_POST['Edit'])){
    $data = $CRUD->Select("services", 0, "where id=" . $_POST["id"]);
    $data = json_encode($data,true);
    echo $data;
}

if(isset($_POST['Sil'])){
    $dlt = $CRUD->Delete("services","where id=:id",['id'=>$_POST['id']]);
    if($dlt){
        $img = $_POST['img'];
        $icon = $_POST['icon'];
        unlink($img);
        unlink($icon);
        echo "ok";
    }else{
        echo "no";
    }
}

