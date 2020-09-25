<?php
//  class in php is case insenstive
class User
{

    private $username;
    private $password;

    public static $security_code = "123@sss";
    // constructor
    public function __construct($username = "", $password = "")
    {
        echo "Constructor is invoked\n";
        $this->username = $username;
        $this->password = $password;
    }

    public function getSecurityCode()
    {
        return User::$security_code;
    }

    public static  function setSecurityCode($newcode)
    {
        User::$security_code= $newcode;
    }


    function checkUser()
    {
        if ($this->username == 'admin@gmail.com' && $this->password == 'admin123')
            return true;
        return false;
    }

    public function __destruct()
    {
        echo "Destructor is invoked\n";
    }
}


class foo
{
    public $bar = <<<EOT
bar
EOT;
}
