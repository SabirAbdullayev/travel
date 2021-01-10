<?php
$data = $CRUD->Select("xarici",1);

rsort($data);
if (isset($_POST["xarici-add"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg" , "image/gif"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/xarici/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) ) {
        header("Location:xarici-add.php?status=imgtype");
        exit;
    }
    $sekil1types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil1name = $_FILES['sekil1']["name"];

    $sekil1size = $_FILES['sekil1']["size"];
    $sekil1type = $_FILES['sekil1']["type"];
    $sekil1tmp = $_FILES['sekil1']["tmp_name"];

    $sekil1path = "../../img/xarici/".time()."-".$sekil1name;

    if (!in_array($sekil1type, $sekil1types) & $sekil1size > 0) {
        header("Location:xarici.php?status=imgtype");
        exit;
    }
    $sekil2types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil2name = $_FILES['sekil2']["name"];

    $sekil2size = $_FILES['sekil2']["size"];
    $sekil2type = $_FILES['sekil2']["type"];
    $sekil2tmp = $_FILES['sekil2']["tmp_name"];

    $sekil2path = "../../img/xarici/".time()."-".$sekil2name;

    if (!in_array($sekil2type, $sekil2types) & $sekil2size > 0) {
        header("Location:xarici.php?status=imgtype");
        exit;
    }
    $sekil3types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil3name = $_FILES['sekil3']["name"];

    $sekil3size = $_FILES['sekil3']["size"];
    $sekil3type = $_FILES['sekil3']["type"];
    $sekil3tmp = $_FILES['sekil3']["tmp_name"];

    $sekil3path = "../../img/xarici/".time()."-".$sekil3name;

    if (!in_array($sekil3type, $sekil3types) & $sekil3size > 0) {
        header("Location:xarici.php?status=imgtype");
        exit;
    }

    $col = "
    basliq=:basliq,
    mezmun=:mezmun,
    sekil=:sekil,
    sekil1=:sekil1,
    sekil2=:sekil2,
    sekil3=:sekil3
 ";
    $arr = [
        'basliq' => $_POST['basliq'],
        'mezmun' => $_POST['mezmun'],
        'sekil' =>  substr($sekilpath, 6),
        'sekil1' =>  substr($sekil1path, 6),
        'sekil2' =>  substr($sekil2path, 6),
        'sekil3' =>  substr($sekil3path, 6)
    ];

    $ins = $CRUD->Insert("xarici", $col, $arr);


    if ($ins) {
        move_uploaded_file($sekiltmp, $sekilpath);
        move_uploaded_file($sekil1tmp, $sekil1path);
        move_uploaded_file($sekil2tmp, $sekil2path);
        move_uploaded_file($sekil3tmp, $sekil3path);
        header("Location:xarici.php?status=ok");
        exit;
    } else {
        header("Location:xarici-add.php?status=no");
        exit;
    }
}





if (isset($_GET["edit"])){
    $editdata = $CRUD->Select("xarici",0,"where id=".@$_GET["id"]);
    if (empty($editdata)){
        header("Location:xarici.php?status=empty");
        exit;
    }
}
if (isset($_POST["xarici_edit"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/xarici/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) & $sekilsize > 0) {
        header("Location:xarici.php?status=imgtype");
        exit;
    }
    $sekil1types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil1name = $_FILES['sekil1']["name"];

    $sekil1size = $_FILES['sekil1']["size"];
    $sekil1type = $_FILES['sekil1']["type"];
    $sekil1tmp = $_FILES['sekil1']["tmp_name"];

    $sekil1path = "../../img/xarici/".time()."-".$sekil1name;

    if (!in_array($sekil1type, $sekil1types) & $sekil1size > 0) {
        header("Location:xarici.php?status=imgtype");
        exit;
    }

    $col = "
    basliq=:basliq,
    mezmun=:mezmun,
    sekil=:sekil,
    sekil1=:sekil1
    where id=:id
    
 ";
    $arr = [
        'basliq' => $_POST['basliq'],
        'mezmun' => $_POST['mezmun'],
        'sekil' => $logosize > 0 ? substr($logopath, 6) : substr($_POST['oldsekil'],6),
        'sekil1' => $iconsize > 0 ? substr($iconpath, 6) : substr($_POST['oldsekil1'],6),
        'id' => $_POST['id']
    ];

    $insrt = $CRUD->Update("xarici", $col, $arr);

    if ($insrt) {
        if ($sekilsize > 0){
            $sekil = $_POST["oldsekil"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }
        if ($sekil1size > 0){
            $sekil1 = $_POST["oldsekil1"];
            unlink($sekil1);
            move_uploaded_file($sekil1tmp, $sekil1path);
        }

        header("Location:xarici.php?status=ok");
        exit;
    } else {
        $id = $_POST['id'];
        header("Location:xarici_edit.php?status=no&id=$id");
        exit;
    }
}
