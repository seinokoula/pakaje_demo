<?php

use gokilp\PakajeDemo\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends \PHPUnit\Framework\TestCase
{
    public function testGetRandomNumber()
    {
        $api = new \gokilp\PakajeDemo\Api();
        $this->assertIsInt($api->getRandomNumber());
        $this->assertGreaterThanOrEqual(0, $api->getRandomNumber());
        $this->assertLessThanOrEqual(100, $api->getRandomNumber());
    }
}

?>