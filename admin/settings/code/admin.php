<?php 

date_default_timezone_set("Asia/Baku");
ob_start();
session_start();


require_once '../settings/db.php';

$db = new DBConnection;

require_once '../settings/class/general.php';
require_once '../settings/class/crud.php';
require_once '../settings/class/login.php';

$General =  new General;
$CRUD = new CRUD;
$Login = new Login;

if(!$Login->CheckSession($_SESSION["yup_email"])){
    header("Location:login.php?status=no");
    exit;
}