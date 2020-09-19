<?php
    //  basic expression
    
    // 1.ternary operator
$num=1;
$num2=2;

    echo $num > $num2 ? "$num1 is Greater" :"$num2 is Greater";
// increment and decrement operator
    echo "\n";
    echo $num++ . $num--;
    $num +=10;
    echo "\n".$num."\n";

    //  magical for loops ,wow 

    for($i=1 , $j=2 , $c=1 ;$i<10 , $j<10; $i++,$j++){ // any thing can happen just ; is important
        // echo "i=$i and j=$j   c=$c\n";
    }

    // error operator


    $file= @file('function_in_php.t') or 
        die('sorry file not found'.$php_errormsg);
    


?>