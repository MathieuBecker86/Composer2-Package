<?php

namespace App\Wcs;

class hello {
    private $talk = 'Hello World';

    public function getTalk(): string
    {
        return $this->talk;
    }
}


namespace HelloWorld;

class SayHello
{
    public static function world()
    {
        return 'Hello World, Composer!';
    }
}