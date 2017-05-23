<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 12:43
 */

namespace BinaryStudioAcademy\Task1\Pokemon;


use BinaryStudioAcademy\Task1\Pokemon;

class Bulbasaur implements Pokemon
{

    public function battleCry(): string
    {
        return "Bool bool!";
    }

    public function imageUrl(): string
    {
        return "https://img.pokemondb.net/artwork/bulbasaur.jpg";
    }
}