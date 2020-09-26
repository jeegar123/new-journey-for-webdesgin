<?php

interface Sandwich
{
    public function getDetails();
}

class ColdSandwich implements Sandwich
{
    public function getDetails(){
            return 'Tuna' ;
    } 
}

class HotSandwich implements Sandwich
{
    public function getDetails(){
        return 'panni' ;
    } 
}

class FrozenSandwich implements Sandwich
{
    public function getDetails(){
        return "ice-cream" ;
    } 
}


$s=new FrozenSandwich();
 echo $s->getDetails();
