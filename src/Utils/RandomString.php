<?php

namespace Utils;

class RandomString
{
    private $length = 6;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function generate()
    {
        $characters = "abcdefghijklmnopqrstuvwxyz";
        $randomString = "";
        for ($i = 0; $i < $this->length; $i++)
        {
            $randomString .= $characters[rand(0, $this->length - 1)];
        }

        return $randomString;
    }
}
