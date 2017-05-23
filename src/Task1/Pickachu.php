<?php

namespace BinaryStudioAcademy\Task1;

class Pickachu implements Pokemon
{
    private $name = "Pickachu";

    public function getName(): string
    {
        return $this->name;
    }

    public function battleCry(): string
    {
        return $this->getName() . ": Pika-Pika!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/pikachu.jpg";
    }
}