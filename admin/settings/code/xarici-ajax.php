<?php

require_once '../db.php';

$db = new DBConnection;

require_once '../class/general.php';
require_once '../class/crud.php';

$General =  new General;
$CRUD = new CRUD;

if(isset($_POST['Status'])){

    $st = $CRUD->Select("xarici",0,"where id=".$_POST["id"])["status"];
    $col = "
    status=:status
    where id=:id
    ";
    $arr = [
        'status' => $st == 1 ? 0 : 1,
        'id' =>$_POST["id"]
    ];
    $upd = $CRUD->Update("xarici", $col, $arr);
    if ($upd){
        echo "ok" ;
    }
    else{
        echo "no" ;
    }
}

if(isset($_POST['Edit'])){
    $data = $CRUD->Select("xarici", 0, "where id=" . $_POST["id"]);
    $data = json_encode($data,true);
    echo $data;
}

if(isset($_POST['Sil'])){
    $dlt = $CRUD->Delete("xarici","where id=:id",['id'=>$_POST['id']]);
    if($dlt){
        $sekil = $_POST['sekil'];
        $sekil1 = $_POST['sekil1'];
        $sekil2 = $_POST['sekil2'];
        $sekil3 = $_POST['sekil3'];
        unlink($sekil);
        unlink($sekil1);
        unlink($sekil2);
        unlink($sekil3);
        echo "ok";
    }else{
        echo "no";
    }
}

