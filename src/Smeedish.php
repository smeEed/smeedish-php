<?php

namespace Smeed;

class Smeedish
{
    public static function decrypt(string $cipher) : string
    {
        return preg_replace('/[^a-z]/', '', trim($cipher));
    }
}