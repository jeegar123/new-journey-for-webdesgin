<?php
    //  class in php
    class Student{
        private  $fullname;
        private $adress;

        public $class_name = 'Student';
        
        function display(){
            echo "fullname:{$this ->fullname}";

        }
    }

// object of student
    $jeegar =new Student;
//  access public member variable
    print($jeegar ->class_name);

    $original_name ='class_name';
    print($jeegar->{$original_name});   // in php we can acces variable use literals ,functions,constants

    $jeegar -> display();








?>