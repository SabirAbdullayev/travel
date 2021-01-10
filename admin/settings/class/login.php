<?php 


date_default_timezone_set("Asia/Baku");

class Login
{

    public function Enter($email, $pass)
    {
        global $CRUD;
        if (!$this->EmailCheck($email)) {
            return 0;
        }

        $email = $this->Check($email);
        $pass = $this->PasswordHash("Yup!Tech@".$pass);
        $user = $CRUD->Select("admin", 0, "where status=:st AND email=:mail AND pass=:pass AND email_tesdiq=:email_tesdiq","*", [
            'st' => '1',
            'email_tesdiq' => '1',
            'mail' => $email,
            'pass' => $pass
        ]);
        if (!empty($user)) {
            $_SESSION["yup_name"] = $user["adsoyad"];
            $_SESSION["yup_id"] = $user["id"];
            $_SESSION["yup_email"] = $user["email"];
            return 1;
        } else {
            return 0;
        }
    }



    public function EmailCheck($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 1;
        }
    }
    public function PasswordHash($pass)
    {
        return md5($pass);
    }
    public function Check($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strtolower($data);
        return $data;
    }
   public function CheckSession($email)
    {
        global $CRUD;
        $user = $CRUD->Select("admin", 0, "where status=:st and email=:mail", "*",[
            'st' => 1,
            'mail' => $email
        ]);
        return empty($user)==1  ? 0 : 1;
    }
}
