<?php
require 'Wizard.php';
require 'Person.php';

// This class is not modified by SOLID principles... do you want to try yourself?

class Auror extends Wizard
{
    public $voldemort_follower = false;
    public $Ministry_worker;

    public function knowsExistenceOfMagicalCreatures($creature)
    {
        echo "I haven't seen a " . $creature . "  before, but I can deal with it for sure.";
    }

    public function castDefensiveSpells($situation)
    {
        $defensive_spells = [
            "Stupify" => "Stupefies an opponent, or knocks them insensible temporarily",
            "Expelliarmus" => "Disarms the target of the spell, such as knocking their wand out of their hand",
            "Expectro Patrnum" => "Creates Patronus that defends against dementors",
            "Locomotor Mortis" => "The Leg-Locker Curse; locks an opponent's legs together",
            "Petrificus Totalus" => "Total petrification; petrifies an opponent totally"
        ];
        if ($situation == 1) {
            $spell_to_cast = $defensive_spells[0];
        } else if ($situation == 2) {
            $spell_to_cast = $defensive_spells[1];
        } else if ($situation == 3) {
            $spell_to_cast = $defensive_spells[2];
        }
        if ($situation == 4) {
            $spell_to_cast = $defensive_spells[3];
        } else {
            $spell_to_cast = $defensive_spells[5];
        }
        return $spell_to_cast;
    }
}

$Nymphadora_Tonks = new Auror("Pure-blood", "Hogwarts", "unknown");
$Nymphadora_Tonks->$Ministry_worker = false;
