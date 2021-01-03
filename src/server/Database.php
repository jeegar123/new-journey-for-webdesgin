<?php

// database mysql with using xamppp server


class Database{
    public $hostname = "localhost";
    public $username="root";
    public $password ="";
    public $databaseName="animes";
    private $mysql;

    public function __construct(){
      try {
        $this->mysql=new mysqli($this->hostname,$this->username,$this->password,$this->databaseName);  
      } catch (Throwable $th) {
          echo "$th";
      }
        

        if ($this->mysql->connect_errno) {
            echo "failed to connect";
        }else{
            echo "Successfully connected!!";
        }


    }

    public function getMySQL()
    {
        return $this->mysql;
    }


}
$database=new Database();

$mysql=$database->getMySQL();

$cursor=$mysql->query("select * from animes");

echo $cursor;

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

phpinfo();

