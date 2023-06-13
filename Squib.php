<?php
require 'Person.php';

// Follows at least the SOLID'S Dependency Inversion Principle because it creates interfaces (like MagicUser) to be responsible of the abstraction of major properties 
// which is better than create classes to be depending on eachother.

interface MagicUser
{
    public function useMagic();
}

class Squib extends Person implements MagicUser
{
    public $blood_status = "Pureblood";

    public function useMagic()
    {
        echo "Ups, 404 Magic Almost Not Found";
    }

    public function desireMagic()
    {
        echo "I have pity on myself and feel miserable among wizards.";
    }
}


$caretaker_of_Hogwarts_Filch = new Squib;
