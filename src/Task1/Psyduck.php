<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:49
 */

namespace BinaryStudioAcademy\Task1;

class Psyduck implements Pokemon
{
    private $name ="Psyduck";

    public function getName(): string
    {
        return $this->name;
    }

    public function battleCry(): string
    {
        return $this->getName() . ": PSY!PSY!PSY!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/psyduck.jpg";
    }
}