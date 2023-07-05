<?php

declare (strict_types=1);

namespace gokilp\PakajeDemo;

class Api
{
    public function getRandomNumber(): int
    {
        return random_int(0, 100);
    }   
}

?>