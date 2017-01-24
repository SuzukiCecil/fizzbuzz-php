<?php

namespace Tests\FizzBuzz;

use FizzBuzz\PlayerImpl;
use FizzBuzz\RulesImpl;

class PlayerImplTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function say()
    {
        $RulesImpl = $this->createMock(RulesImpl::class);
        $RulesImpl->expects($this->once())
            ->method('convert');
        $PlayerImpl = new PlayerImpl($RulesImpl);

        $PlayerImpl->say(1);
    }
}
