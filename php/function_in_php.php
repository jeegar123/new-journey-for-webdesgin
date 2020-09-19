<?php
    //  function in php

    // function with name
    $num=(int)readline('enter number :');
    paridrom_number($num);

    // $temp = 121;
    // echo $temp * 1.1;
    // echo floor($temp /10) ;
    echo "\n";
    $myfunc= function(){
        return 12;
    };

    echo $myfunc();
?>
<?php
function paridrom_number($num){
        $temp=$num;
        $reverse_number=0;
        while(floor($temp)){
            $div=$temp % 10;
            $reverse_number =$reverse_number * 10 + $div;
            $temp = $temp / 10;
        }

        if($num == $reverse_number){
            echo "$num is palidrom";
        }else{
            echo "$num is not palidrom";
        }

      
    }
?>