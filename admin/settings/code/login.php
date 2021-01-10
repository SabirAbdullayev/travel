<?php 

ob_start();
session_start();
require_once '../settings/class/general.php';
require_once '../settings/class/crud.php';
require_once '../settings/class/login.php';
require_once '../settings/db.php';
$db = new DBConnection();
$General = new General();
$CRUD = new CRUD();
$Login = new Login();

if(isset($_POST["enter"])){
    $Login->Enter($_POST['email'], $_POST['pass']) ? header("Location:index.php?status=welcome") : header("Location:login.php?status=nouser");
}
