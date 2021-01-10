<?php
$data = $CRUD->Select("services",1);

rsort($data);
if (isset($_POST["service-add"])) {

    $logotypes = ["image/png", "image/jpeg", "image/jpg" , "image/gif"];

    $logoname = $_FILES['logo']["name"];

    $logosize = $_FILES['logo']["size"];
    $logotype = $_FILES['logo']["type"];
    $logotmp = $_FILES['logo']["tmp_name"];

    $logopath = "../../img/service/".time()."-".$logoname;

    if (!in_array($logotype, $logotypes) ) {
        header("Location:service-add.php?status=imgtype");
        exit;
    }
    $icontypes = ["image/png", "image/jpeg", "image/jpg"];

    $iconname = $_FILES['icon']["name"];

    $iconsize = $_FILES['icon']["size"];
    $icontype = $_FILES['icon']["type"];
    $icontmp = $_FILES['icon']["tmp_name"];

    $iconpath = "../../img/service/".time()."-".$iconname;

    if (!in_array($icontype, $icontypes) & $iconsize > 0) {
        header("Location:services.php?status=imgtype");
        exit;
    }

    $col = "
    adi=:adi,
    haqqinda=:haqqinda,
    logo=:logo,
    icon=:icon
 ";
    $arr = [
        'adi' => $_POST['adi'],
        'haqqinda' => $_POST['haqqinda'],
        'logo' =>  substr($logopath, 6),
        'icon' =>  substr($iconpath, 6)
    ];

    $ins = $CRUD->Insert("services", $col, $arr);


    if ($ins) {
        move_uploaded_file($logotmp, $logopath);
        move_uploaded_file($icontmp, $iconpath);
        header("Location:services.php?status=ok");
        exit;
    } else {
        header("Location:service-add.php?status=no");
        exit;
    }
}





if (isset($_GET["edit"])){
    $editdata = $CRUD->Select("services",0,"where id=".@$_GET["id"]);
    if (empty($editdata)){
        header("Location:services.php?status=empty");
        exit;
    }
}
if (isset($_POST["service_edit"])) {

    $logotypes = ["image/png", "image/jpeg", "image/jpg"];

    $logoname = $_FILES['logo']["name"];

    $logosize = $_FILES['logo']["size"];
    $logotype = $_FILES['logo']["type"];
    $logotmp = $_FILES['logo']["tmp_name"];

    $logopath = "../../img/service/".time()."-".$logoname;

    if (!in_array($logotype, $logotypes) & $logosize > 0) {
        header("Location:services.php?status=imgtype");
        exit;
    }
    $icontypes = ["image/png", "image/jpeg", "image/jpg"];

    $iconname = $_FILES['icon']["name"];

    $iconsize = $_FILES['icon']["size"];
    $icontype = $_FILES['icon']["type"];
    $icontmp = $_FILES['icon']["tmp_name"];

    $iconpath = "../../img/service/".time()."-".$iconname;

    if (!in_array($icontype, $icontypes) & $iconsize > 0) {
        header("Location:services.php?status=imgtype");
        exit;
    }

    $col = "
    adi=:adi,
    haqqinda=:haqqinda,
    logo=:logo,
    icon=:icon
    where id=:id
    
 ";
    $arr = [
        'adi' => $_POST['adi'],
        'haqqinda' => $_POST['haqqinda'],
        'logo' => $logosize > 0 ? substr($logopath, 6) : substr($_POST['oldimg'],6),
        'icon' => $iconsize > 0 ? substr($iconpath, 6) : substr($_POST['oldicon'],6),
        'id' => $_POST['id']
    ];

    $insrt = $CRUD->Update("services", $col, $arr);

    if ($insrt) {
        if ($logosize > 0){
            $logo = $_POST["oldimg"];
            unlink($logo);
            move_uploaded_file($logotmp, $logopath);
        }
        if ($iconsize > 0){
            $icon = $_POST["oldicon"];
            unlink($icon);
            move_uploaded_file($icontmp, $iconpath);
        }

        header("Location:services.php?status=ok");
        exit;
    } else {
        $id = $_POST['id'];
        header("Location:service_edit.php?status=no&id=$id");
        exit;
    }
}
