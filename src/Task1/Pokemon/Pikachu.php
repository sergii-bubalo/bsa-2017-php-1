<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:37
 */

namespace BinaryStudioAcademy\Task1\Pokemon;

use BinaryStudioAcademy\Task1\Pokemon;

class Pikachu implements Pokemon
{
    public function battleCry(): string
    {
        return "Pika-Pika!" . PHP_EOL;
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/pikachu.jpg";
    }
}