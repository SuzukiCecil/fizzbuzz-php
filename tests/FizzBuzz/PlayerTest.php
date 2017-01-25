<?php

namespace Tests\FizzBuzz;

use FizzBuzz\Player;
use FizzBuzz\Rules;

class PlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function say()
    {
        $Rules = $this->createMock(Rules::class);
        $Rules->expects($this->once())
            ->method('convert');
        $Player = new Player($Rules);

        $Player->say(1);
    }
}
