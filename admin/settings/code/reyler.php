<?php
$data = $CRUD->Select("reyler",1);

rsort($data);
if (isset($_POST["reyler-add"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg" , "image/gif"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/reyler/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) ) {
        header("Location:reyler-add.php?status=imgtype");
        exit;
    }

    $col = "
    adsoyad=:adsoyad,
    rey=:rey,
    sekil=:sekil
 ";
    $arr = [
        'adsoyad' => $_POST['adsoyad'],
        'rey' => $_POST['rey'],
        'sekil' =>  substr($sekilpath, 6)
    ];

    $ins = $CRUD->Insert("reyler", $col, $arr);


    if ($ins) {
        move_uploaded_file($sekiltmp, $sekilpath);
        header("Location:reyler.php?status=ok");
        exit;
    } else {
        header("Location:reyler-add.php?status=no");
        exit;
    }
}





if (isset($_GET["edit"])){
    $editdata = $CRUD->Select("reyler",0,"where id=".@$_GET["id"]);
    if (empty($editdata)){
        header("Location:reyler.php?status=empty");
        exit;
    }
}
if (isset($_POST["reyler_edit"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg" , "image/gif"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/reyler/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) & $sekilsize > 0) {
        header("Location:reyler.php?status=imgtype");
        exit;
    }

    $col = "
    adsoyad=:adsoyad,
    rey=:rey,
    sekil=:sekil
    where id=:id
    
 ";
    $arr = [
        'adsoyad' => $_POST['adsoyad'],
        'rey' => $_POST['rey'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : substr($_POST['oldsekil'],6),
        'id' => $_POST['id']
    ];

    $insrt = $CRUD->Update("reyler", $col, $arr);

    if ($insrt) {
        if ($sekilsize > 0){
            $sekil = $_POST["oldskl"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }

        header("Location:reyler.php?status=ok");
        exit;
    } else {
        $id = $_POST['id'];
        header("Location:reyler_edit.php?status=no&id=$id");
        exit;
    }
}
