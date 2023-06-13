<?php
require 'Wizard.php';
require 'Person.php';

// Follows at least the SOLID's Interface Segregation Principle because it uses interfaces to specify diferent and single responsabilities 
// that could be extended in a class, Death_Eather.

interface LoyalFollower
{
    public function beLoyalToVoldemort($name);
}


interface AzkabanPrisioner
{
    public function goToAzkaban();
}


class Death_Eather extends Wizard implements LoyalFollower, AzkabanPrisioner
{
    public $have_dark_mark = true;
    public $voldemort_follower = true;
    public $azkaban_prisioner = false;

    public function beLoyalToVoldemort($name)
    {
        if ($name == "Lucios Malfoy") {
            echo "Yes I'm, but once I said I was under the effects of Imperius to avoid jail.";
        } else {
            echo "I'm waiting for the Dark Lord to be great again and rules the world";
        }
    }

    public function goToAzkaban()
    {
        echo "Oh, shit. Dementors everywhere.";
        return $this->azkaban_prisioner;
    }
}

$Lucius_Malfoy = new Death_Eather("Pureblood", "Hogwarts", "dragon nerve");
