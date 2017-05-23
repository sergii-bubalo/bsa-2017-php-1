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
     * Get pokemon's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * Return battle cry of Bulbasaur
     *
     * @return string
     */
    public function battleCry(): string
    {
        return $this->getName() . ": Bool bool!";
    }

    /**
     * Return image URL of Bulbasaur
     *
     * @return string
     */
    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/bulbasaur.jpg";
    }
}