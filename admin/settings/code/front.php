<?php 

date_default_timezone_set("Asia/Baku");
ob_start();
session_start();


require_once 'admin/settings/db.php';

$db = new DBConnection;

require_once 'admin/settings/class/general.php';
require_once 'admin/settings/class/crud.php';

$General =  new General;
$CRUD = new CRUD;

$settings = $CRUD->Select("nizamlamalar",0);
$service = $CRUD->Select("services",1);
$daxili = $CRUD->Select("daxili",1);
$xarici = $CRUD->Select("xarici",1);
$reyler = $CRUD->Select("reyler",1);


if (isset($_GET['service'])){
    $srv = $CRUD->Select("services",0,"where id=".@$_GET['id']);
}
if (isset($_GET['reyler'])){
    $rey = $CRUD->Select("reyler",0,"where id=".@$_GET['id']);
}
if (isset($_GET['daxili'])){
    $srv = $CRUD->Select("daxili",0,"where id=".@$_GET['id']);
}
if (isset($_GET['xarici'])){
    $srv = $CRUD->Select("xarici",0,"where id=".@$_GET['id']);
}






/*
$portfolio = $CRUD->Select("portfolio",1,"where status<>1");
$portfoliokateqoriya = [];

for($i = 0;$i<count($portfolio);$i++){
    if(!in_array($portfolio[$i]['kateqoriya'],$portfoliokateqoriya)){
        array_push($portfoliokateqoriya,$portfolio[$i]['kateqoriya']);
    }
}
*/
///($portfolio[$i]["kateqoriya"] == "Web Layihələr") ? "cat-1" : (($portfolio[$i]["kateqoriya"]) == "Mobil Layihələr" ? "cat-2" : "cat-3")