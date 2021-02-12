<?php
/* Create a class that represents a Wombat in the App\Marsupials namespace
You should be able to give the wombat a name when you create it.
The wombat should have a getName() method that returns its name
The wombat should have a sayHelloTo($wombat) method that you pass another wombat to and it will return a greeting
The wombat should have a giveHug() method and a howManyHugs() method. howManyHugs() should return the number of hugs the wombat has been given */

namespace App\Marsupials;

class Wombat
{
    private $name; // specify properties 
    private $hugs = 0;
    
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function sayHelloTo($wombat) //if there is anything in the argument of this method, like there is here ($fonny),then should put a parameter in brackets here to represent it.
    { 
        return "Hello {$wombat->getName()}";
    } 
    public function giveHug()
    {
         $this->hugs+= 1; // adding the increment 
         return $this; 
    }
    public function howManyHugs()
    {
        return $this->hugs;
    }
}