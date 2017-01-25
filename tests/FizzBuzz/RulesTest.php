<?php

namespace Tests\FizzBuzz;

use FizzBuzz\Rules;

class RulesTest extends \PHPUnit_Framework_TestCase
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
     * @param int $number Rule#convertに渡す数字
     * @param string $expected 期待値
     */
    public function convert($number, $expected)
    {
        $Rules = new Rules();

        $this->assertSame($expected, $Rules->convert($number));
    }
}
