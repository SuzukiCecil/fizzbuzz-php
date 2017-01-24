<?php

namespace Tests\FizzBuzz;

use FizzBuzz\RulesImpl;

class RulesImplTest extends \PHPUnit_Framework_TestCase
{
    /**
     * convertのテストパターン
     *
     * @return array
     */
    public function convertProvider()
    {
        return [
            [1, '1'],
            [2, '2'],
            [3, 'Fizz'],
            [4, '4'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
        ];
    }

    /**
     * @test
     *
     * @dataProvider convertProvider
     *
     * @param int $number RuleImpl#convertに渡す数字
     * @param string $expected 期待値
     */
    public function convert($number, $expected)
    {
        $RulesImpl = new RulesImpl();

        $this->assertSame($expected, $RulesImpl->convert($number));
    }
}
