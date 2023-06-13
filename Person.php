<?php

// Follows at least the SOLID's Single responsability Principle because each class, Person and KnowledgeOfMagicalWorld, have a single responsability.

class Person
{

    public function exist()
    {
        return "I am a human being.";
    }
}

class KnowledgeOfMagicalWorld
{
    public function knowsExistenceOfMagicalCreatures($creature)
    {
        return "Still don't know if I know the " . $creature . ' : that depends if I am a wizard or a muggle.';
    }
}

/* My first way to do it didn't follow this principle:

 <?php

 class Person
{
    public function exist()
    {
        return "I am a human being.";
    }


    public function knows_existence_of_magical_creatures($creature)
    {
        return 'Still don't know if I know the ' . $creature . ' : that depends if I am a wizard or a muggle.';
    }
} */