<?php

interface Sandwich
{
    public function getDetails();
}

class ColdSandwich implements Sandwich
{
    public function getDetails()
    {
        return 'Tuna';
    }
}

class HotSandwich implements Sandwich
{
    public function getDetails()
    {
        return 'panni';
    }
}

abstract class FrozenSandwich implements Sandwich
{
    public function getDetails()
    {
        return "ice-cream";
    }
    abstract  public function myType();
}

class IceCreamBread  extends FrozenSandwich
{

    public function myType()
    {
        return 'ice';
    }
}



$sandwitch = new FrozenSandwich();
echo $sandwitch->getDetails();

$iceCream=new IceCreamBread();