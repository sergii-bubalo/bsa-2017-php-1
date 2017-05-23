<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:49
 */

namespace BinaryStudioAcademy\Task1\Pokemon;


use BinaryStudioAcademy\Task1\Pokemon;

class Psyduck implements Pokemon
{

    public function battleCry(): string
    {
        return "PSY!PSY!PSY!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/psyduck.jpg";
    }
}