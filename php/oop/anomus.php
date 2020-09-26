<?php
// <!-- anonomus class dont have load in website -->
    $my_class=new class(){
        public function display()
        {
            echo "oh no i have no name";
        }
        } ;

    $my_class->display();