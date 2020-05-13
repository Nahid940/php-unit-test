<?php

namespace App;
class User
{
    public $firstName;
    public $lastName;

    public function returnFullName()
    {
        return trim($this->firstName." ".$this->lastName);
    }
}