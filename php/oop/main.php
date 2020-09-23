<?php

    require 'User.php';

    $user =new User("admin@gmail.com","admin123");

    echo $user->checkUser()?"valid user":"not valid";
    echo"\n";

    // invoke static method
    // echo $user::checkuser();
   
    //  to delete object
    unset($user);
    // echo $user->checkuser()?"valid user":"not valid";
    // echo"\n";

    $foo =new foo;
    echo $foo->bar;

    $n="india";
    //  in single quote data can't be parsed and interpret
    echo 'my country is $n'; 
    echo "my country is $n";


    // heroDOc and myDOc
echo "\n";
// heredoc similar ""
echo <<< DOT
MY DOT DATA
HELLO $n
DOT;

echo "\n";
// nowdoc similar ''
echo <<< 'DOT'
MY DOT DATA
HELLO $n
DOT;