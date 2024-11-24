<?php

namespace Smeed;

class Smeedish
{
    public static function decrypt(string $cypherText) : string
    {
        return preg_replace('/[^a-z]/', '', trim($cypherText));
    }
}