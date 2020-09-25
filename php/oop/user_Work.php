
<?php
    require 'User.php';
$user1=new User("test@gmail.com","1233");

echo User::$security_code;

$user1::setSecurityCode(123);
echo "\n";
echo User::$security_code;