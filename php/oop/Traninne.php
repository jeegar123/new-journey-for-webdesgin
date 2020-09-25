<?php

class Trainne
{
    // properties
    private $id;
    private $fullname;
    private $univeristy;

    // constrcutor
    public function __construct($id = "", $fullname = "", $univeristy = "")
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->univeristy = $univeristy;
    }

    // methods
    // getter
    public function getID()
    {
        return $this->id;
    }
    public function getFullName()
    {
        return $this->fullname;
    }
    public function getUniversity()
    {
        return $this->univeristy;
    }
    // setter

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFullName($fullname)
    {
        $this->fullname = $fullname;
    }

    public function setUniversity($univeristy)
    {
        $this->univeristy = $univeristy;
    }


    public function __toString()
    {
        return "{
         id:$this->id,   
         fullname:$this->fullname,
         university:$this->univeristy  
        }";
    }
}
