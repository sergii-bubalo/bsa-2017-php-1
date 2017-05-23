<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:43
 */

namespace BinaryStudioAcademy\Task1;

class Bulbasaur implements Pokemon
{
    private $name = "Bulbasaur";

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
        return $this->getName() . ": Bool bool!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/bulbasaur.jpg";
    }
}