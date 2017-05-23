<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:51
 */

namespace BinaryStudioAcademy\Task1;

class Slowpoke implements Pokemon
{
    private $name = "Slowpoke";

    public function getName(): string
    {
        return $this->name;
    }

    public function battleCry(): string
    {
        return $this->getName() . ": So slow!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/slowpoke.jpg";
    }
}