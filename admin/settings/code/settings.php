<?php

$data = $CRUD->Select("nizamlamalar");

if (isset($_POST["general_settings"])) {

    $logotypes = ["image/png", "image/jpeg", "image/jpg"];
    $robotstypes = ["text/plain"];

    $logosize = $_FILES['logo']["size"];
    $logotype = $_FILES['logo']["type"];
    $logotmp = $_FILES['logo']["tmp_name"];

    $robotsname = $_FILES['robots']["name"];
    $robotssize = $_FILES['robots']["size"];
    $robotstype = $_FILES['robots']["type"];
    $robotstmp = $_FILES['robots']["tmp_name"];

    $robotspath = "../../robots.txt";
    $logopath = "../../img/logo.".(($logotype == "image/png") ? "png" : (($logotype == "image/jpeg") ? "jpeg" : "jpg"));
  
    if (!in_array($logotype, $logotypes) && $logosize > 0) {
        header("Location:general-settings.php?status=logotype");
        exit;
    }

    if (!in_array($robotstype, $robotstypes) && $robotssize > 0) {
        header("Location:general-settings.php?status=robotstype");
        exit;
    }

    $col = "
    basliq=:title,
    aciqlama=:description,
    robots=:robots,
    logo=:logo
 ";
    $arr = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'robots' => $robotssize > 0 ?  substr($robotspath, 6) : "robots.txt",
        'logo' => $logosize > 0 ? substr($logopath, 6) : $_POST['old_logo']
    ];

    $upd = $CRUD->Update("nizamlamalar", $col, $arr);

    if ($upd) {

        if ($logosize > 0) {
            $logo = "../../".$_POST["old_logo"];
            unlink($logo);
            move_uploaded_file($logotmp, $logopath);
        }
        if ($robotssize > 0) {
            unlink("../../robots.txt");
            move_uploaded_file($robotstmp, $robotspath);
        }

        header("Location:general-settings.php?status=ok");
        exit;
    } else {
        header("Location:general-settings.php?status=no");
        exit;
    }
}


if (isset($_POST["about"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/".$sekilname;
  
    if (!in_array($sekiltype, $sekiltypes) && $sekilsize > 0) {
        header("Location:about.php?status=imgtype");
        exit;
    }

    $col = "
    haqqinda=:haqqinda,
    sekil=:sekil
 ";
    $arr = [
        'haqqinda' => $_POST['mezmun'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : $_POST['old_sekil']
    ];

    $upd = $CRUD->Update("nizamlamalar", $col, $arr);

    if ($upd) {

        if ($sekilsize > 0) {
            $sekil = "../../".$_POST["old_sekil"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }

        header("Location:about.php?status=ok");
        exit;
    } else {
        header("Location:about.php?status=no");
        exit;
    }
}


if (isset($_POST["contact"])) {






    $col = "
    unvan=:unvan,
    email=:email,
    tel=:tel,
    mobil=:mobil,
    facebook=:facebook,
    instagram=:instagram,
    youtube=:youtube,
    github=:github,
    twitter=:twitter
 ";
    $arr = [
        'unvan' => $_POST['unvan'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel'],
        'mobil' => $_POST['mobil'],
        'facebook' => $_POST['facebook'],
        'instagram' => $_POST['instagram'],
        'youtube' => $_POST['youtube'],
        'github' => $_POST['github'],
        'twitter' => $_POST['twitter']


    ];

    $upd = $CRUD->Update("nizamlamalar", $col, $arr);

    if ($upd) {


        header("Location:contact.php?status=ok");
        exit;
    } else {
        header("Location:contact.php?status=no");
        exit;
    }
}