<?php
$data = $CRUD->Select("portfolio",1);

rsort($data);
if (isset($_POST["portfolioadd"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg" , "image/gif"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/portfolio/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) ) {
        header("Location:about.php?status=imgtype");
        exit;
    }

    $col = "
    kateqoriya=:kateqoriya,
    adi=:adi,
    info=:info,
    link=:link,
    sekil=:sekil
 ";
    $arr = [
        'kateqoriya' => $_POST['kateqoriya'],
        'adi' => $_POST['ad'],
        'info' => $_POST['info'],
        'link' => $_POST['link'] == "" ? "#0" : $_POST['link'] ,
        'sekil' => substr($sekilpath, 6)
    ];

    $ins = $CRUD->Insert("portfolio", $col, $arr);

    if ($ins) {
        move_uploaded_file($sekiltmp, $sekilpath);
        header("Location:portfolio.php?status=ok");
        exit;
    } else {
        header("Location:portfolio-add.php?status=no");
        exit;
    }
}

if (isset($_POST["portfolioredakte"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg", "image/gif"];

    $sekilname = $_FILES['sekil']["name"];

    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/portfolio/".time()."-" .$sekilname;

    if (!in_array($sekiltype, $sekiltypes) && $sekilsize > 0) {
        header("Location:portfolio.php?status=imgtype");
        exit;
    }

    $col = "
    kateqoriya=:kateqoriya,
    adi=:adi,
    info=:info,
    link=:link,
    sekil=:sekil
    where id=:id
 ";
    $arr = [
        'kateqoriya' => $_POST['redaktekateqoriya'],
        'adi' => $_POST['redakteadi'],
        'info' => $_POST['redakteinfo'],
        'link' => $_POST['redaktelink']  == "" ? "#0" : $_POST['redaktelink'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : substr($_POST['oldimg'],6),
        'id'=>$_POST['id']
    ];

    $upd = $CRUD->Update("portfolio", $col, $arr);

    if ($upd) {

        if ($sekilsize > 0) {
            $sekil = $_POST["oldimg"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }

        header("Location:portfolio.php?status=ok");
        exit;
    } else {
        header("Location:portfolio.php?status=no");
        exit;
    }
}

