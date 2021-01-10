<?php

require_once '../db.php';

$db = new DBConnection;

require_once '../class/general.php';
require_once '../class/crud.php';

$General =  new General;
$CRUD = new CRUD;

if(isset($_POST['Status'])){

    $st = $CRUD->Select("portfolio",0,"where id=".$_POST["id"])["status"];
    $col = "
    status=:status
    where id=:id
    ";
    $arr = [
        'status' => $st == 1 ? 0 : 1,
        'id' =>$_POST["id"]
    ];
    $upd = $CRUD->Update("portfolio", $col, $arr);
    if ($upd){
        echo "ok" ;
    }
    else{
        echo "no" ;
    }
}

if(isset($_POST['Edit'])){
    $data = $CRUD->Select("portfolio", 0, "where id=" . $_POST["id"]);
    $data = json_encode($data,true);
    echo $data;
}

if(isset($_POST['Sil'])){
    $dlt = $CRUD->Delete("portfolio","where id=:id",['id'=>$_POST['id']]);
    if($dlt){
        $img = $_POST['img'];
        unlink($img);
        echo "ok";
    }else{
        echo "no";
    }
}

