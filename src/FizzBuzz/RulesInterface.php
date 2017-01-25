<?php

namespace FizzBuzz;

interface RulesInterface
{
    /**
     * 数字を元にFizzBuzzゲームの言葉に変換
     *
     * @param int $number 数字
     *
     * @return string Fizz|Buzz|FizzBuzz|数字
     */
    public function convert(int $number): string;
}
