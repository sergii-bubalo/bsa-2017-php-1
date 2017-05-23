<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:51
 */

namespace BinaryStudioAcademy\Task1\Pokemon;


use BinaryStudioAcademy\Task1\Pokemon;

class Slowpoke implements Pokemon
{

    public function battleCry(): string
    {
        return __CLASS__ . ": So slow!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/slowpoke.jpg";
    }
}