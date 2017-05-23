<?php

namespace BinaryStudioAcademy\Task1;

class Bulbasaur implements Pokemon
{
    private $name = "Bulbasaur";

    public function getName(): string
    {
        return $this->name;
    }

    public function battleCry(): string
    {
        return $this->getName() . ": Bool bool!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/bulbasaur.jpg";
    }
}