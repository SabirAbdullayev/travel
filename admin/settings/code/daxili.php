<?php
$data = $CRUD->Select("daxili",1);

rsort($data);
if (isset($_POST["daxili-add"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg" , "image/gif"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/daxili/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) ) {
        header("Location:daxili-add.php?status=imgtype");
        exit;
    }
    $sekil1types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil1name = $_FILES['sekil1']["name"];

    $sekil1size = $_FILES['sekil1']["size"];
    $sekil1type = $_FILES['sekil1']["type"];
    $sekil1tmp = $_FILES['sekil1']["tmp_name"];

    $sekil1path = "../../img/daxili/".time()."-".$sekil1name;

    if (!in_array($sekil1type, $sekil1types) & $sekil1size > 0) {
        header("Location:daxili.php?status=imgtype");
        exit;
    }

    $sekil2types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil2name = $_FILES['sekil2']["name"];

    $sekil2size = $_FILES['sekil2']["size"];
    $sekil2type = $_FILES['sekil2']["type"];
    $sekil2tmp = $_FILES['sekil2']["tmp_name"];

    $sekil2path = "../../img/daxili/".time()."-".$sekil2name;

    if (!in_array($sekil2type, $sekil2types) & $sekil2size > 0) {
        header("Location:daxili.php?status=imgtype");
        exit;
    }


    $sekil3types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil3name = $_FILES['sekil3']["name"];

    $sekil3size = $_FILES['sekil3']["size"];
    $sekil3type = $_FILES['sekil3']["type"];
    $sekil3tmp = $_FILES['sekil3']["tmp_name"];

    $sekil3path = "../../img/daxili/".time()."-".$sekil3name;

    if (!in_array($sekil3type, $sekil3types) & $sekil3size > 0) {
        header("Location:daxili.php?status=imgtype");
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
        'sekil3' =>  substr($sekil3path, 6),
    ];

    $ins = $CRUD->Insert("daxili", $col, $arr);


    if ($ins) {
        move_uploaded_file($sekiltmp, $sekilpath);
        move_uploaded_file($sekil1tmp, $sekil1path);
        move_uploaded_file($sekil2tmp, $sekil2path);
        move_uploaded_file($sekil3tmp, $sekil3path);
        header("Location:daxili.php?status=ok");
        exit;
    } else {
        header("Location:daxili-add.php?status=no");
        exit;
    }
}





if (isset($_GET["edit"])){
    $editdata = $CRUD->Select("daxili",0,"where id=".@$_GET["id"]);
    if (empty($editdata)){
        header("Location:daxili.php?status=empty");
        exit;
    }
}
if (isset($_POST["daxili_edit"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/daxili/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) & $sekilsize > 0) {
        header("Location:daxili.php?status=imgtype");
        exit;
    }
    $sekil1types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil1name = $_FILES['sekil1']["name"];

    $sekil1size = $_FILES['sekil1']["size"];
    $sekil1type = $_FILES['sekil1']["type"];
    $sekil1tmp = $_FILES['sekil1']["tmp_name"];

    $sekil1path = "../../img/daxili/".time()."-".$sekil1name;

    if (!in_array($sekil1type, $sekil1types) & $sekil1size > 0) {
        header("Location:daxili.php?status=imgtype");
        exit;
    }
    $sekil2types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil2name = $_FILES['sekil2']["name"];

    $sekil2size = $_FILES['sekil2']["size"];
    $sekil2type = $_FILES['sekil2']["type"];
    $sekil2tmp = $_FILES['sekil2']["tmp_name"];

    $sekil2path = "../../img/daxili/".time()."-".$sekil2name;

    if (!in_array($sekil2type, $sekil2types) & $sekil2size > 0) {
        header("Location:daxili.php?status=imgtype");
        exit;
    }


    $sekil3types = ["image/png", "image/jpeg", "image/jpg"];

    $sekil3name = $_FILES['sekil3']["name"];

    $sekil3size = $_FILES['sekil3']["size"];
    $sekil3type = $_FILES['sekil3']["type"];
    $sekil3tmp = $_FILES['sekil3']["tmp_name"];

    $sekil3path = "../../img/daxili/".time()."-".$sekil3name;

    if (!in_array($sekil3type, $sekil3types) & $sekil3size > 0) {
        header("Location:daxili.php?status=imgtype");
        exit;
    }
    $col = "
    basliq=:basliq,
    mezmun=:mezmun,
    sekil=:sekil,
    sekil1=:sekil1,
    sekil2=:sekil2,
    sekil3=:sekil3
    where id=:id
    
 ";
    $arr = [
        'basliq' => $_POST['basliq'],
        'mezmun' => $_POST['mezmun'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : substr($_POST['oldsekil'],6),
        'sekil1' => $sekil1size > 0 ? substr($sekil1path, 6) : substr($_POST['oldsekil1'],6),
        'sekil2' => $sekil2size > 0 ? substr($sekil2path, 6) : substr($_POST['oldsekil1'],6),
        'sekil3' => $sekil3size > 0 ? substr($sekil3path, 6) : substr($_POST['oldsekil3'],6),
        'id' => $_POST['id']
    ];

    $insrt = $CRUD->Update("daxili", $col, $arr);

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
        if ($sekil2size > 0){
            $sekil2 = $_POST["oldsekil2"];
            unlink($sekil2);
            move_uploaded_file($sekil2tmp, $sekil2path);
        }
        if ($sekil3size > 0){
            $sekil3 = $_POST["oldsekil3"];
            unlink($sekil3);
            move_uploaded_file($sekil3tmp, $sekil3path);
        }
        

        header("Location:daxili.php?status=ok");
        exit;
    } else {
        $id = $_POST['id'];
        header("Location:daxili_edit.php?status=no&id=$id");
        exit;
    }
}
