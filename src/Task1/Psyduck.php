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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
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