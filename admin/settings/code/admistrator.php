<?php 

$admins = $CRUD->Select("admin",1);

function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


if(isset($_POST['blog_add'])){
    
    require_once "../settings/class/class.phpmailer.php";
    $mail = new PHPMailer();
    $pass = generateRandomString();

    $mail->IsSMTP();
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "erva.veridyen.com";
    $mail->Port = 465;
    $mail->IsHTML(true);

    $mail->CharSet  = "utf-8";
    $mail->Username = "ders@ayyubhajiyev.com";
    $mail->Password = "m8464625";
    $mail->SetFrom("ders@ayyubhajiyev.com", "Yup Technology");
    $mail->AddAddress($_POST["email"]);
    $mail->Subject = "Yup Technology | Admin Panel";
    $mail->Body = '
        <table>
            <tr>
                <td>Ad Soyad</td>
                <td>Email (Username)</td>
                <td>Şifrə</td>
                <td>Təsdiq Et</td>
            </tr>
            <tr>
                <td>'.$_POST["adsoyad"].'</td>
                <td>'.$_POST["email"].'</td>
                <td>'.$pass.'</td>
                <td><a href="http://ayyubhajiyev.com/135/tesdiq.php?email='.$_POST["email"].'&tesdiq=ok"><button>Təsdiq Et</button></a></td>
            </tr>
        </table>
    ';
    if (!$mail->Send()) {
        echo "Email Gönderim Xətası: " . $mail->ErrorInfo;
        header("Location:admin-add.php?status=no");
        exit;
    } else {
      $col = '
      adsoyad=:adsoyad,
      email=:email,
      pass=:pass,
      status=:st
      ';
      $arr = [
          'adsoyad'=>$_POST["adsoyad"],
          'email'=>$_POST["email"],
          'pass'=>md5("Yup!Tech@".$pass),
          'st'=>"1"
      ];
      $CRUD->Insert("admin",$col,$arr) ? header("Location:admins.php?status=ok") : header("Location:admin-add.php?status=no");
    }
}



