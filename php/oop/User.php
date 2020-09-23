<?php
//  class in php is case insenstive
class User
{

    private $username;
    private $password;


    // constructor
    public function __construct( $username="",$password="")
    {
                echo "Constructor is invoked\n";
                $this->username = $username;
                $this->password=$password;

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


class foo {
    public $bar = <<<EOT
bar
EOT;
}
