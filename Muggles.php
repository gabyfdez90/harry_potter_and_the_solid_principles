<?php
require 'Person.php';

// Follows at least the SOLID's Open-Closed Principle, because the Person class is open to be extended by Muggle 
// but it isn't modified with any Muggle, Squib or Wizard atributes.

class Muggle extends Person
{
    public $blood_status = "Muggleborn";
    public $has_magic = false;

    public function haveNoMagic()
    {
        echo "Magic?! That doesn't exist.";
    }

    public function dressing($clothes)
    {
        return $clothes . " are not robes. I wear just regular clothing.";
    }
}

$uncle_Vernon = new Muggle;
