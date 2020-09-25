<?php
    require 'Traninne.php';
    class PhpDeveloper extends Trainne{

        private $framework;

        public function __construct($id = "", $fullname = "", $univeristy = "",$framework="")
        {
            parent::__construct($id,$fullname,$univeristy);
            $this ->framework =$framework;
        }








         




    }


?>