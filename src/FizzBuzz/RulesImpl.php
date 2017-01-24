<?php

namespace FizzBuzz;

class RulesImpl implements Rules
{
    /**
     * 数字を元にFizzBuzzゲームの言葉に変換
     *
     * @param int $number 数字
     *
     * @return string Fizz|Buzz|FizzBuzz|数字
     */
    public function convert(int $number): string
    {
        if ($number !== 0) {
            if ($this->isFizzBuzz($number)) {
                return "FizzBuzz";
            } elseif ($this->isFizz($number)) {
                return "Fizz";
            } elseif ($this->isBuzz($number)) {
                return "Buzz";
            }
        }

        return (string) $number;
    }

    /**
     * 数字がFizzか判定
     *
     * @param int $number
     *
     * @return bool Fizzならtrue
     */
    private function isFizz(int $number): bool
    {
        return $number % 3 === 0;
    }

    /**
     * 数字がBuzzか判定
     *
     * @param int $number
     *
     * @return bool Buzzならtrue
     */
    private function isBuzz(int $number): bool
    {
        return $number % 5 === 0;
    }

    /**
     * 数字がFizzBuzzか判定
     *
     * @param int $number
     *
     * @return bool FizzBuzzならtrue
     */
    private function isFizzBuzz(int $number): bool
    {
        return $this->isFizz($number) && $this->isBuzz($number);
    }
}
