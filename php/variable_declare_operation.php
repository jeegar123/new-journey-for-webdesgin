<?php
    // types of data types
    $num=1;
    $isNum=true;
    echo   $isNum;
    echo $num;
    echo gettype($num);

    echo "\n";
    
    echo is_string("jdjdj"); // if output wil 1 or null
    //  concatation of string
    $author="Jeegar Vinodkumar";
    echo "Legend Never dies :".$author;

    //  constant in php

    // case senstive last parameter default false means no case senstive
    define('NAME',"Legend",true);

    echo "\nconstant:".NAME;

?>