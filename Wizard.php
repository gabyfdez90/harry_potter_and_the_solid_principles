<?php
require 'Person.php';

// Follows at least the SOLID's Liskov Substitution Principle because the class Wizards extends the required from another file class Person, 
// and retains its properties (could be replaced by it without major inconviniences).

class Wizard extends Person
{
    public $have_magic = true;

    public $blood_status;
    public $school_attended;
    public $wand_core;
    public $is_animagus;

    public function __construct($blood_status, $school_attended, $wand_core)
    {
        $this->blood_status = $blood_status;
        $this->school_attended = $school_attended;
        $this->wand_core = $wand_core;

        echo  'Regardless of me being' . $blood_status . 'or not, I received a letter that says I`m goint to' . $school_attended . '/n' . 'this fall. That`s why I bought my' . $wand_core . "wand.";
    }

    public function castSpells($spell)
    {
        echo "I can do a " . $spell . " in no time.";
    }
}

$Hermione_Granger = new Wizard("Muggleborn", "Hogwarts", "dragon heartstring");
